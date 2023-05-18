function show_pup(){
    console.log("hamza");
    document.getElementById('pup').classList.add('open');
}
function hide_pup(){
    document.getElementById('pup').classList.remove('open');
}
//diaporama-acctualite
// Variables globales
let compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
let timer, elements, slides, slideWidth

window.onload = () => {
    // On récupère le conteneur principal du diaporama
    const diapo = document.querySelector(".diapo")

    // On récupère le conteneur de tous les éléments
    elements = document.querySelector(".elements")

    // On récupère un tableau contenant la liste des diapos
    slides = Array.from(elements.children)

    // On calcule la largeur visible du diaporama
    slideWidth = diapo.getBoundingClientRect().width

    // On récupère les deux flèches
    let next = document.querySelector("#nav-droite")
    let prev = document.querySelector("#nav-gauche")

    // On met en place les écouteurs d'évènements sur les flèches
    next.addEventListener("click", slideNext)
    prev.addEventListener("click", slidePrev)

    // Automatiser le diaporama
    timer = setInterval(slideNext, 5000)

    // Gérer le survol de la souris
    diapo.addEventListener("mouseover", stopTimer)
    diapo.addEventListener("mouseout", startTimer)

    // Mise en oeuvre du "responsive"
    window.addEventListener("resize", () => {
        slideWidth = diapo.getBoundingClientRect().width
        slideNext()
    })
}

/**
 * Cette fonction fait défiler le diaporama vers la droite
 */
function slideNext(){
    // On incrémente le compteur
    compteur++

    // Si on dépasse la fin du diaporama, on "rembobine"
    if(compteur == slides.length){
        compteur = 0
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur
    elements.style.transform = `translateX(${decal}px)`
}

/**
 * Cette fonction fait défiler le diaporama vers la gauche
 */
function slidePrev(){
    // On décrémente le compteur
    compteur--

    // Si on dépasse le début du diaporama, on repart à la fin
    if(compteur < 0){
        compteur = slides.length - 1
    }

    // On calcule la valeur du décalage
    let decal = -slideWidth * compteur
    elements.style.transform = `translateX(${decal}px)`
}

/**
 * On stoppe le défilement
 */
function stopTimer(){
    clearInterval(timer)
}

/**
 * On redémarre le défilement
 */
function startTimer(){
    timer = setInterval(slideNext, 5000)
}
$(document).ready(function() {
    var main = $(".main");
    var scrollWidth = main[0].scrollWidth;
    var viewportWidth = main.innerWidth();
    var scrollPosition = 0;
    var scrollDirection = 1;
  
    // Ajout des boutons de scrolling
    $('.scroll-left').click(function() {
      scrollPosition -= viewportWidth / 8;
      if (scrollPosition < 0) {
        scrollPosition = 0;
      }
      $(".main").animate({
        scrollLeft: scrollPosition
      }, 500);
    });
  
    $('.scroll-right').click(function() {
      scrollPosition += viewportWidth / 8;
      if (scrollPosition > scrollWidth - viewportWidth) {
        scrollPosition = scrollWidth - viewportWidth;
      }
      $(".main").animate({
        scrollLeft: scrollPosition
      }, 500);
    });
  
    // Défilement automatique
    setInterval(function() {
      scrollPosition += scrollDirection * (viewportWidth );
      if (scrollPosition > scrollWidth - viewportWidth || scrollPosition < 0) {
        scrollDirection *= -1;
      }
      $(".main").animate({
        scrollLeft: scrollPosition
      }, 1000);
    }, 9000);
  });
  //project//
  
  function slidesPlugin(activeSlide = 0) {
    const slides = document.querySelectorAll('.slide');

    makeSlideActive( slides[activeSlide] );

    slides.forEach(slide => {
        slide.addEventListener('click', (event) => {
            clearActiveSlide();
            makeSlideActive(event.target);
            
        });
    })

    function clearActiveSlide() {
        for (const slide of slides) {
            if ( isSlideActive(slide) ) {
                makeSlidePassive(slide);
                break;
            }
        }
    }

    function isSlideActive(el) {
        return el.classList.contains('active');
    }

    function makeSlideActive(el) {
        el.classList.add('active');
    }

    function makeSlidePassive(el) {
        el.classList.remove('active');
    }
}

slidesPlugin(2);

/*nos client*/

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 1000, // Définir la durée en millisecondes entre chaque défilement automatique (ici, 5 secondes)
    disableOnInteraction: false, // Permettre à l'utilisateur d'interagir avec les slides sans arrêter le défilement automatique
  },
});
//reload 
window.addEventListener('load', function() {
  const nbClient = document.querySelector('.nb-client p:first-child');
  const chiffre = document.querySelector('.chiffre p:first-child');
  const anneeEx = document.querySelector('.annee-ex p:first-child');

  const targetNbClient = 70; // Nombre cible pour les clients satisfaits
  const targetChiffre = 50; // Nombre cible pour le chiffre en croissance
  const targetAnneeEx = 22; // Nombre cible pour les années d'expérience

  let currentNbClient = 0;
  let currentChiffre = 0;
  let currentAnneeEx = 0;

  const incrementNumbers = function() {
    if (currentNbClient < targetNbClient) {
      currentNbClient++;
      nbClient.textContent = '+' + currentNbClient;
    }
    if (currentChiffre < targetChiffre) {
      currentChiffre++;
      chiffre.textContent = '+' + currentChiffre + 'M€';
    }
    if (currentAnneeEx < targetAnneeEx) {
      currentAnneeEx++;
      anneeEx.textContent = '+' + currentAnneeEx;
    }

    if (currentNbClient < targetNbClient || currentChiffre < targetChiffre || currentAnneeEx < targetAnneeEx) {
      setTimeout(incrementNumbers, 105); // Temps en millisecondes entre chaque incrémentation
    }
  };

  incrementNumbers();
});


  
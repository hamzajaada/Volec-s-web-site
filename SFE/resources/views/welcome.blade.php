<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>VolecGroup</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store of skills</title>
    {{-- LINK CSS --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alegreya+Sans+SC:ital@1&family=Bebas+Neue&family=Cabin:wght@500&family=Dosis&family=Kanit:ital,wght@0,100;0,200;1,100&family=Murecho:wght@500&family=Open+Sans&family=Oswald&family=Outfit:wght@100&family=Poiret+One&family=Poppins:wght@500&family=Prompt:ital,wght@1,200&family=Public+Sans:wght@600&family=Questrial&family=Quicksand&family=Roboto+Condensed&family=Roboto+Flex:opsz,wght@8..144,500&family=Rowdies:wght@700&family=Rubik:wght@500&family=Saira:wght@200&family=Slabo+27px&family=Unbounded:wght@300&display=swap" rel="stylesheet">
    <!--swipper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="image/volec.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#QUE">Que faisons-nous?</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Secteur d'activité
            </a>
            <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
              @foreach ( $secteurs as $secteur)
                <li><a class="dropdown-item" href="{{ route('view-service' ,$secteur->categorie) }}">{{ $secteur->categorie }}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#SERV">Nos références</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#SERV">Nos clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#CON">Contact</a>
          </li>
        </ul>
        <div class="polic-icone">
          <a href="{{ route('login') }}" class="police-link"><i class="fa-solid fa-shield-halved"></i></a>
        </div>
      </div>
    </div>
  </nav>
  
    <section class="P-1-1">
        <div class="diapo">
            <!-- Conteneur des "diapos" -->
            <div class="elements">
                <!-- Première diapo -->
                @foreach ($actualites as $actualite )
                    <div class="element active">
                    <img class="img" src="{{ asset('image/Actualite/'.$actualite->image) }}" alt="Image 1">
                    <div class="caption">
                        <h1 class="h-diapo">{{ $actualite ->titre }}</h1>
                        <div class="pp-diapo"> 
                          <p class="p-diapo">
                            {{ $actualite ->description }}</p>
                          </div>
                       
                    </div>
                </div> 
                
                @endforeach
         
                     
        </div>
        <!-- Flèches de navigation -->
                     <i id="nav-gauche" class="fa-solid fa-chevron-left"></i>
                     <i id="nav-droite" class="fa-solid fa-chevron-right"></i>
        </div>
    </section>
    <section class="P-1">
           <h1 class="titre-statis">Nos statistiques</h1>
           <div class="statistique">
           
            <div class="nb-client">
                <p style="color: #82ce2f; font-size:50px; font-family: 'Cabin', sans-serif;">+70</p>
                <p>CLIENTS SATISFAITS</p>

            </div>
            <div class="chiffre">
                <p style="color: #82ce2f; font-size:50px;font-family: 'Cabin', sans-serif;" >+50M€</p>
                <p>UN CHIFFRE EN CROISSANCE</p>

            </div>
            <div class="annee-ex">
                <p style="color: #82ce2f; font-size:50px ;font-family: 'Cabin', sans-serif;" >+22</p>
                <p>ANNÉES D’EXPÉRIENCE</p>
            </div>
           </div>
    </section>
    <span id="QUE"></span>
    <section  class="P-2">
    <h1 class="titre-desc">Que faisons nous ?</h1>
      <div class="desc">
        <p class="text-desc">La société VOLEC Pôle d'ingénierie et de service pour la construction, la rénovation, la main-
        tenance et l'innovation des procédés industriels. Forts de la diversité de nos expériences et de
        notre expertise, nous vous proposons une large gamme de prestation dans le plus grand
        respect des règles de sécurité, d'environnement et de développement durable. Réaliser un projet est un exercice complexe. le choix optimal des équipements, l’intégration efficace des systèmes, l’optimisation du rendement de votre investissement, ainsi que le respect des contraintes économiques et environnementales.
        c’est notre challenge !
    </p>  
    </div>
    </section>
   
  
    <span id="SERV"></span>

    <section class="P-4">
        <h1 class="titre-P-4">Secteur d'activité</h1>
        <!--<p class="text-ser">Volec est une entreprise de renom dans le domaine de la construction, de la rénovation, de la maintenance et de l'innovation des procédés industriels. Avec une solide expérience et un savoir-faire inégalé, Volec est reconnue pour offrir des services de haute qualité à ses clients.

            Que ce soit pour des projets de construction, de rénovation ou de maintenance, Volec s'engage à fournir des solutions innovantes, fiables et durables. L'entreprise dispose d'une équipe de professionnels qualifiés, qui mettent leur expertise à disposition pour répondre aux besoins spécifiques de chaque client.
             
            De plus, Volec est à la pointe de l'innovation dans les procédés industriels, en utilisant les technologies les plus avancées pour améliorer l'efficacité et la productivité des processus de production. Cette expertise dans l'innovation industrielle a permis à l'entreprise de se différencier de ses concurrents et de devenir un leader dans son secteur. ...</p>-->
            <div class="main">
                <div class="card2-serv-wrapper">
                  @foreach ( $secteurs as $secteur)
                  <div class="card2-serv">
                    <div class="img-serv">
                      <img src="{{ asset('image/Secteur/'.$secteur->image) }}" alt="" srcset="">
                    </div>
                    <div class="des-serv">
                      <p class="serv-text">
                        {{ $secteur->categorie }}
                      </p>
                      <u style="color: #82CE2F"><a href="{{ route('view-service' ,$secteur->categorie) }}" class="detail">Détail ...</a></u> 
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
   
  
    </section>
    <div class="bottnn">
        <button class="scroll-left"><i style="font-size: 3em" class="fa-solid fa-circle-chevron-left"></i></button>
        <button class="scroll-right"><i style="font-size: 3em" class="fa-solid fa-circle-chevron-right"></i></button>
    </div>
    <span id="CON"></span>

   

    <section class="P-6">
        <h3 class="mini-titre-P-6">CE QUI EST DIFFÉRENT!</h3>
        <h1 class="titre-P-6">Principales raisons pour lesquelles vous devriez nous choisir !</h1>
            <div class="notif">
                <div class="not1">
                    <h1 class="iconAv"><img src="https://em-energie.com/wp-content/uploads/2019/04/Quality-icon-e1558601150809.png.webp" alt="" srcset=""></h1>
                    <h2 style="color: orange" class="decrir">INTÉGRITÉ</h2>
                    <div style="padding-right: 29px" class="content">
                   <p class="text-not">
                    Une culture fondée sur l’intégrité est essentielle à la concrétisation de nos aspirations stratégiques pour instaurer un environnement professionnel dans lequel nous pouvons tous être fiers de ce que nous faisons.
                   </p>
               </div>
                </div>
                <div class="not2">
                    <h1 class="iconAv"><img src="https://em-energie.com/wp-content/uploads/2019/04/Security-icon-e1558601176442.png.webp" alt="" srcset=""></h1>
                    <h2 class="decrir">SÉCURITÉ</h2>
                    <div class="content">
                   <p class="text-not">
                       La sécurité de nos clients et de nos équipes est capitale. Nous veillons à éviter tous les risques et incidents pendant la réalisation et l'exploitation.
                   </p>
               </div>
                </div>
              
                <div class="not4">
                    <h1 class="iconAv"><img src="https://em-energie.com/wp-content/uploads/2019/04/Satisfaction-icon-e1558601189813.png.webp"></h1>
                    <h2 style="color: rgb(136, 0, 255)" class="decrir">INNOVATION</h2>
                    <div style="padding-right: 29px" class="content">
                   <p class="text-not">
                    Nous pensons que nos capacités à innover ainsi qu'à cultiver une réflexion constituent un véritable moteur de croissance, de réussite et de progression.
                   </p>
               </div>
                </div>
            </div>
            
    
        
    </section> 
    <section class="project">
        <h1 class="titre-project">Nos références</h1>
        <div class="containere">
          @foreach ( $projets as $projet)
            <div
              class="slide"
              style="background-image: url('{{ asset('image/Projet/'.$projet->image) }}');"
            >
        
              <div class="title">
                <h3 style="font-family: 'Roboto Condensed', sans-serif;    color: white;">{{ $projet->nom_projet }}</h3>
                <small style="font-family: 'Roboto Condensed', sans-serif;    color: white;">{{ $projet->nom_entreprise }} | {{ $projet->localisation_entreprise }} </small>
                <div class="boton"><a href="" class="boton-link">Voir plus</a></div>
              </div>
            </div>
            @endforeach
     
            </div>
            <div class="btn-prj"><a href="{{route('view-projet')}}" class="link-prj"> Voir plus ...</a></div>
    </section>
    <section class="nosclient">
      <h1 class="titre-nosclient">Nos Clients</h1>
      <div class="mainn">
      <div class="text-client">
        <p class="desc-client">Grâce à notre travail acharné, à notre organisation solide et à notre engagement envers l'excellence, VOLEC Casablanca est fier de gagner la confiance des grandes entreprises mondiales. Notre expertise et notre expérience nous permettent de collaborer avec des leaders mondiaux, offrant des solutions innovantes et répondant aux besoins spécifiques de chaque entreprise. Nous sommes prêts à relever de nouveaux défis et à établir des partenariats fructueux avec les entreprises de renommée internationale. Faites-nous confiance pour réaliser vos ambitions et atteindre vos objectifs stratégiques</p>
        <h2 class="titre-client">" Confiance mondiale, notre défi permanent "</h2>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="car swiper-slide"><img  src="image/accor.jpg" alt="" srcset=""></div>
          <div class="car swiper-slide"><img src="image/emsi.jpg" alt="" srcset=""></div>
          <div class="car swiper-slide"><img src="image/raunlt.jpg" alt="" srcset=""></div>
          <div class="car swiper-slide"><img src="image/total.jpg" alt="" srcset=""></div>
          <div class="car swiper-slide"><img src="image/ocp.jpg" alt="" srcset=""></div>
          <div class="car swiper-slide"><img src="image/sofitel.jpg" alt="" srcset=""></div>
          <div class="car swiper-slide"><img src="image/cih.jpg" alt="" srcset=""></div>
          <div class="car swiper-slide"><img src="image/uca.jpg" alt="" srcset=""></div>
        </div>
      </div>
    </div>
    </section>
    <section class="P-5">
        <i id="icone" class="fa-solid fa-square-envelope"></i>
        <h1 class="titre-P-5">Contactez-nous dès maintenant pour découvrir comment nous pouvons vous aider à construire, rénover, maintenir et innover vos processus industriels pour assurer votre succès.</h1>
        <div class="button-2"><a href="{{ route('contact') }}" class="contact-us"> Contactez-Nous </a></div> 
    </section>
    <section class="P-7">
        <div class="sec1">
            <h2 class="sec-titre">Trouvez-nous</h2>
            <div class="desc-footer">
            <p class="text-footer"><i class="fas fa-map-pin"></i>   Casablanca,Maroc.</p>
            <p class="text-footer"><i class="fas fa-phone-alt"></i>  +212(0) 5 22 75 71 76 .</p>
            <p class="text-footer"><i class="fas fa-envelope"></i>  <a href="mailto:volec@menara.ma" class="mail"> volec@menara.ma</a></p>
            </div>
        </div>
        <div class="sec2">
            <h2 class="sec-titre">Trouvez-nous</h2>
            <div class="lien">
                <i id="fb" class="fab fa-facebook"></i>
                <i id="linkd" class="fab fa-linkedin"></i>
                <i id="insta" class="fab fa-instagram"></i>
            </div>
        </div>
        <div class="sec3">
            <h2 class="sec-titre">Rubriques</h2>
            <div class="lien-reb">
            <a href="" class="reb-lien">Que faisons nous ?</a> <br>
            <a href="" class="reb-lien">Contactez-Nous</a> <br>
            <a href="" class="reb-lien">Nos Services</a> <br>
            <a href="" class="reb-lien"> Nos Compètences</a> <br>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="js/diaporama.js"></script>

<script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>

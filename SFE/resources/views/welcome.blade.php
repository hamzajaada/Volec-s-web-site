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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alegreya+Sans+SC:ital@1&family=Bebas+Neue&family=Cabin:wght@500&family=Dosis&family=Kanit:ital,wght@0,100;0,200;1,100&family=Murecho:wght@500&family=Open+Sans&family=Oswald&family=Outfit:wght@100&family=Poiret+One&family=Poppins:wght@500&family=Prompt:ital,wght@1,200&family=Public+Sans:wght@600&family=Questrial&family=Quicksand&family=Roboto+Condensed&family=Roboto+Flex:opsz,wght@8..144,500&family=Rowdies:wght@700&family=Rubik:wght@500&family=Saira:wght@200&family=Slabo+27px&family=Unbounded:wght@300&display=swap" rel="stylesheet"></head>
<body>
    <nav style="position: fixed;width: 100%;height:7%;top:0; z-index: 999;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <img src="image/volec.png" alt="" srcset="">
            
            <ul>
                <li><a href="" class="Faisons">Que faisons nous?</a></li>
                <li><a href="" class="Services">Services</a> </li>
                <li><a href="" class="Projets">Projets</a> </li>
                <li><a href="" class="menu">Menu</a> </li>
                <li><a href="" class="Contact">Contact</a> </li>
                
            </ul>
            <div class="link">
                <div class="login"><a href="{{ route('login') }}" class="Link-login">Login</a></div>
                <div class="Register"><a href="{{ route('register') }}" class="Link-register">Register</a></div>
            </div>
    </nav>
    <section class="P-1">
            <div class="part1">
                <div class="logo-part1"><img src="image/volec.png" alt="" srcset=""></div>
                <h2 id="text-part1">Solutions <span style="color:#82CE2F">&</span>  Services en Electrotechnique, Electronique de puissance, Automatisme et Régulation lndustrielle.</h2>
            </div>
           <div class="button-1"><a href="" class="view-more"> Voir plus .. </a></div>
    </section>
    <section class="P-2">
      <u style="color: #82CE2F"><h1 class="titre-desc">Que faisons nous ?</h1></u> 
      <div class="desc">
        <p class="text-desc">La société VOLEC Pôle d'ingénierie et de service pour la construction, la rénovation, la main-
        tenance et l'innovation des procédés industriels. Forts de la diversité de nos expériences et de
        notre expertise, nous vous proposons une large gamme de prestation dans le plus grand
        respect des règles de sécurité, d'environnement et de développement durable.</p>  
    </div>
    </section>
    <section class="P-3">
        <h1 class="P-3-titre">Nos Compètences </h1>
        <div class="main">
            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/consiel.png" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Consiel 
                    </p>
                </div>
            </div>

            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/images.jpg" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Etudes préliminaires
                    </p>
                </div>
            </div>

            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/analyse.png" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Analyse fonctionnelle
                    </p>
                </div>
            </div>

            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/fourniture.jpg" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Fournitures d'équipements
                    </p>
                </div>
            </div>

            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/fabrication.jpg" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Fabrication
                    </p>
                </div>
            </div>

            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/assistance.jpg" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Assistance technique & formation
                    </p>
                </div>
            </div>

            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/arrete.jpg" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Maîtrise des arrêts
                    </p>
                </div>
            </div>

            <div class="card1-comp">
                <div class="img-comp">
                    <img src="image/essai.jpg" alt="" srcset="">
                </div>
                <div class="des-comp">
                    <p class="comp-text">
                        Essais & mise en service
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="P-4">
        <h1 class="titre-P-4">Nos services</h1>
            <div class="main">
                <div class="card2-serv">
                    <div class="img-serv">
                        <img src="image/MT.jpg" alt="" srcset="">
                    </div>
                    <div class="des-serv">
                        <p class="serv-text">
                            Solutions d'Equipement MT
                        </p>
                        <i  class="fa-solid fa-circle-info"></i>

                    </div>
                </div>
                <div class="card2-serv">
                    <div class="img-serv">
                        <img src="image/bt.jpg" alt="" srcset="">
                    </div>
                    <div class="des-serv">
                        <p class="serv-text">
                            Solutions d'Equipement BT
                        </p>
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                </div>
                <div class="card2-serv">
                    <div class="img-serv">
                        <img src="image/automatisation.jpg" alt="" srcset="">
                    </div>
                    <div class="des-serv">
                        <p class="serv-text">
                            Solutions d'Automatisation
                        </p>
                        <i  class="fa-solid fa-circle-info"></i>
                    </div>
                </div>

                <div class="card2-serv">
                    <div class="img-serv">
                        <img src="image/faible.jpg" alt="" srcset="">
                    </div>
                    <div class="des-serv">
                        <p class="serv-text">
                            Solutions du Courant Faible
                        </p>
                        <i  class="fa-solid fa-circle-info"></i>
                    </div>
                </div>

                <div class="card2-serv">
                    <div class="img-serv">
                        <img src="image/eclair.jpg" alt="" srcset="">
                    </div>
                    <div class="des-serv">
                        <p class="serv-text">
                            Solutions d'Eclairage
                        </p>
                        <i  class="fa-solid fa-circle-info"></i>
                    </div>
                </div>

                <div class="card2-serv">
                    <div class="img-serv">
                        <img src="image/anti.jpg" alt="" srcset="">
                    </div>
                    <div class="des-serv">
                        <p class="serv-text">
                            Solutions Antidéflagrante
                        </p>
                        <i  class="fa-solid fa-circle-info"></i>
                    </div>
                </div>

                

            </div>


    </section>
    <section class="P-5">
        <i id="icone" class="fa-solid fa-square-envelope"></i>
        <h1 class="titre-P-5">Contactez-nous dès maintenant pour découvrir comment nous pouvons vous aider à construire, rénover, maintenir et innover vos processus industriels pour assurer votre succès.</h1>
        <div class="button-2"><a href="" class="contact-us"> Contactez-Nous </a></div> 
    </section>

    <section class="P-6">
        <h3 class="mini-titre-P-6">CE QUI EST DIFFÉRENT!</h3>
        <h1 class="titre-P-6">Principales raisons pour lesquelles vous devriez nous choisir !</h1>
            <div class="notif">
                <div class="not1">
                    <h1 class="titre-not1"> <span>1-  </span>  CONNAISSANCE</h1>
                    <p class="text-not">
                        La connaissance institutionnelle est la capacité d’agir, est la somme de 
                        l’intelligence d’entreprise, de l’éducation et des expériences
                    </p>
                </div>
                <div class="not2">
                    <h1 class="titre-not2"><span>2- </span> INNOVATION</h1>
                    <p class="text-not">
                        Comme nous continuons à appliquer parfaitement les solutions existantes à plusieurs reprises et, 
                        nous adaptons toujours les dernières technologies du monde aux solutions optimales.
                    </p>
                </div>
                <div class="not3">
                    <h1 class="titre-not3"><span>3- </span> RESPECT</h1>
                    <p class="text-not">
                        Nous respectons nos clients et aussi leurs clients
                    </p>
             
                </div>
                <div class="not4">
                    <h1 class="titre-not3"><span>4- </span> CONFIDENCE & TRUST</h1>
                    <p class="text-not">
                        Nos clients font confiance à notre organisation pour la qualité, la fiabilité et l’honnêteté; 
                        parce qu’ils savent que nous ne ferons aucun compromis sur l’éthique professionnelle afin de gagner aujourd’hui.
                    </p>
                </div>
            </div>
            
    
        
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
<script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
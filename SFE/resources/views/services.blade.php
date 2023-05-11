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
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">

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
</head>
<body>
    <nav style="position: fixed;width: 100%;height:7%;top:0; z-index: 999;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <img src="../image/volec.png" alt="" srcset="">
            
            <ul>
                <li><a href="#QUE" class="Faisons">Que faisons nous?</a></li>
             
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Secteur d'activité
                  </a>

                  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
               
                    @foreach ( $secteurs as $secteur)
                    <a class="dropdown-item" href="{{ route('view-service' ,$secteur->categorie) }}">{{ $secteur->categorie }}</a>
                     @endforeach
                 
                      
                      

                  </div>
              </li>
                <li><a href="#SERV" class="Nos-références">Nos références</a> </li>
                <li><a href="#SERV" class="Nos-Client">Nos Client</a> </li>
                <li><a href="#CON" class="Contact">Contact</a> </li>
                
            </ul>
            </ul>
            <div class="polic-icone">
                <a href="{{ route('login') }}" class="police-link"><i class="fa-solid fa-shield-halved"></i></a>
            </div>
    </nav>
<section class="P1">
    <div class="titreP">
               <h1 class="titre-P1">{{ $categories }}</h1>
    </div>
    

</section>
<div class="main">
        <div class="m1">
            <h2 class="t-m1">Nos Service par Secteur</h2>
            @foreach ( $secteurs as $secteur )  
            <a href="{{ route('view-service',$secteur->categorie) }}" class="m1-link">{{ $secteur->categorie }}</a>
            <div class="str1"></div>
        @endforeach
        </div>
        <div class="m2">
            @foreach ( $services as $service )
                
            
           <div class="card">
            <div class="img-card">
                <img src="{{ asset('image/Servic/'.$service->image) }}" alt="" srcset="">
            </div>
            <div class="talks">
                <p class="talks-p">{{ $service->nom_service }}</p>
                <div class="str"></div>
                <a href="" class="talks-a">Détail ...</a>
            </div>
           </div>
           @endforeach
        

        </div>
    </div>



    <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
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
    <link rel="stylesheet" href="{{ asset('css/projet.css') }}">

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
          </div>
        </div>
      </nav>
<section class="P1">
    <div class="titreP">
               <h1 class="titre-P1">NOS RÉFÉRENCES</h1>
    </div>
    

</section>
<div class="main">
      
        <div class="m2">
          
                
            @foreach ( $projects as $projet)
           <div class="card">
            <div class="img-card">
                
                    <img src="{{ asset('image/Projet/'.$projet->image) }}" alt="" srcset="">
               
                
            </div>
            <div class="talks">
               <a href="{{ route('view-projet-table',$projet->nom_entreprise) }}" class="list-link"><i class="fa-solid fa-bars"></i></a> 
            </div>
           </div>
           @endforeach
        

        </div>
    </div>



    <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
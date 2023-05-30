<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>VolecGroup / detail services</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    {{-- LINK CSS --}}
    <link rel="stylesheet" href="{{ asset('css/detail-services.css') }}">

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
            <img src="{{ asset('image/volec.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                  <li><a href="{{ route('home1') }}" class="Nos-références">Accueil</a> </li>

              <li class="nav-item dropdown">
                <a style="margin-top: -10px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Secteur d'activité
                </a>
                <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                  @foreach ( $secteurs as $secteur)
                    <li class="lii"><a class="dropdown-item" href="{{ route('view-service' ,$secteur->categorie) }}">{{ $secteur->categorie }}</a></li>
                  @endforeach
                </ul>
              </li>
           
            </ul>
            <div class="polic-icone">
              <a href="{{ route('login') }}" class="police-link"><i class="fa-solid fa-shield-halved"></i></a>
            </div>
          </div>
        </div>
      </nav>
<section class="P1">
    <div class="titreP">
               <h1 class="titre-P1">{{ $nom }}</h1>
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
            <h2 class="desc-detail-titre">les Details de service:</h2>
            @foreach ($services as $service)
            <div class="img-detail">
                <img src="{{ asset('image/Servic/'.$service->image) }}" alt="">
            </div>
            <p class="desc-detail">{{ $service->description }}</p>
          @endforeach
        </div>
    </div>



    <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
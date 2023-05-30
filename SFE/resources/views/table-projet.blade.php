<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Detail / projet</title>
    {{-- LINK CSS --}}
    <link rel="stylesheet" href="{{ asset('css/table-projet.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alegreya+Sans+SC:ital@1&family=Bebas+Neue&family=Cabin:wght@500&family=Dosis&family=Kanit:ital,wght@0,100;0,200;1,100&family=Murecho:wght@500&family=Open+Sans&family=Oswald&family=Outfit:wght@100&family=Poiret+One&family=Poppins:wght@500&family=Prompt:ital,wght@1,200&family=Public+Sans:wght@600&family=Questrial&family=Quicksand&family=Roboto+Condensed&family=Roboto+Flex:opsz,wght@8..144,500&family=Rowdies:wght@700&family=Rubik:wght@500&family=Saira:wght@200&family=Slabo+27px&family=Unbounded:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
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
               <h1 class="titre-P1">{{ $nom }}</h1>
    </div>
    

</section>
<div class="main">
      
        <div class="m2">
          @foreach ( $projects as $projet )
          
          <div class="img-entr"><img src="{{ asset('image/Projet/'.$projet->image) }}" alt="" srcset=""></div>
         
          <table style="" class="table">
            <thead>
              <tr>
                <th scope="col">Nom de l'entreprise</th>
                <th scope="col">Nom de projet</th>
                <th scope="col">Adresse de l'entreprise</th>
                <th scope="col">Description</th>
                <th scope="col">Prix de realisation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $projet->nom_entreprise }}</td>
                <td>{{ $projet->nom_projet }}</td>
                <td>{{ $projet->localisation_entreprise}}</td>
                <td>{{ $projet->description }}</td>
                <td>{{ $projet->prix_projet }} DH</td>
              </tr>
            
            </tbody>
          </table>
            @endforeach
        

        </div>
    </div>



    <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
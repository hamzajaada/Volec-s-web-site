<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--  <link rel="stylesheet" href="{{ asset('css/profile.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/ajoute-service.css') }}">
    <title>Volec - Ajout d'offre</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alegreya+Sans+SC:ital@1&family=Bebas+Neue&family=Dosis&family=Kanit:ital,wght@0,100;0,200;1,100&family=Open+Sans&family=Oswald&family=Poiret+One&family=Poppins:wght@500&family=Prompt:ital,wght@1,200&family=Questrial&family=Roboto+Condensed&family=Rowdies:wght@700&family=Slabo+27px&family=Unbounded:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav style="position: fixed;width: 100%;height:7%;top:0; z-index: 999;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <img src="../image/volec.png" alt="" srcset="">
            
            <ul class="ul">
                <li class="li"><a href="" class="Faisons">Que faisons nous?</a></li>
                <li class="li" ><a href="" class="Services">Services</a> </li>
               
                <li class="li"><a href="" class="Contact">Contact</a> </li>
                
            </ul>
            <div class="polic-icone">
                <a href="{{ route('login') }}" class="police-link"><i class="fa-solid fa-shield-halved"></i></a>
            </div>
    </nav> 
    <section class="services-p">
        <section class="main-sec1">
            @extends('admin.Barre')
        </section>
        <section class="AF"  >
            <h1 class="titre-Ajouteoffre">Ajouter un <span >service</span></h1>
            <div class="info-compte">
                <form class="row g-3" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group2">
                        <label for="exampleFormControlSelect1">Catégorie:</label><br>
                        <select class="form-select" aria-label="Default select example"  name="categorie" id="exampleFormControlSelect1">
                            <option value="Design graphique">Solutions d'Equipement MT</option>
                            <option value="Développement web et mobile">Solutions d'Equipement BT</option>
                            <option value="Rédaction et traduction">Solutions d'Automatisation</option>
                            <option value="Marketing et publicité">Solutions du Courant Faible</option>
                            <option value="Services informatiques">Solutions d'Eclairage</option>
                            <option value="Coaching et formation">Solutions Antidéflagrante</option>
                            
                        </select>
                    </div>
                    <div class="form-group2" >
                        <label for="exampleFormControlTextarea1">Nom de service:</label>
                        <input class="form-control" type="text"  aria-label="default input example">

                    </div>
                    <div class="form-group2" >
                        <label for="exampleFormControlTextarea1">description:</label>
                        <textarea class="form-control" name="offre" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputImage" class="form-label">Image de service</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <input type="hidden" name="id_user" value="">
                    <div class="col-12">
                        <center><button style="background-color: #82CE2F ; border:none; width:50%" type="submit" class="btn btn-primary" style="width: 50%">Ajouter</button></center>
                    </div>
                </form>
            </div>
        </section>
    </section>
    <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>

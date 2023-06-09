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
    <link rel="stylesheet" href="{{ asset('css/modifier-service.css') }}">
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
    @extends('layouts.app')

    @section('content')
    <section class="services-p">
        <section class="main-sec1">
            @extends('admin.Barre')
        </section>
        <section class="AF"  >
            <h1 class="titre-Ajouteoffre">Modifier un <span >service</span></h1>
            <div class="info-compte">
                <form class="row g-3" method="post" action="{{ route('services.modifier-ex',$service->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group2">
                        <label for="exampleFormControlSelect1">Catégorie:</label><br>
                        <select class="form-select" value="{{ $service->categorie }}" aria-label="Default select example"  name="categorie" id="exampleFormControlSelect1">
                               
                                  <option value="{{ $service->categorie }}">{{ $service->categorie }}</option>
                           
                        </select>
                    </div>
                    <div class="form-group2" >
                        <label for="exampleFormControlTextarea1">Nom de service:</label>
                        <input class="form-control" value="{{ $service->nom_service }}" type="text" name="nom_service"  aria-label="default input example">

                    </div>
                    <div class="form-group2" >
                        <label for="exampleFormControlTextarea1">description:</label>
                        <textarea class="form-control"   name="description" id="exampleFormControlTextarea1" rows="3">{{ $service->description }}</textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputImage" class="form-label">Image de service</label>
                        <input class="form-control" value="{{  asset('image/Servic/'.$service->image)  }}" name="image" type="file" id="formFile">
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

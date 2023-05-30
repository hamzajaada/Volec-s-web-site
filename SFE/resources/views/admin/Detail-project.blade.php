<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style-demandes.css') }}">
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
    @extends('layouts.app')

    @section('content')
        <section class="services-p">
            <section class="main-sec1">
                @extends('admin.Barre')
            </section>
            <section class="AF">
              <h1 style="
                margin-left:-200px;
                margin-bottom:100px;
                text-align:center;
                color: rgb(221, 76, 76);
                
                
                ">{{ $projets->nom_projet }}  <span style="color:black">|</span>  <span style="color:#82cf82">{{ $projets->nom_entreprise }}</span></h1>
                <table style="" class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nom de l'entreprise</th>
                        <th scope="col">Nom de projet</th>
                        <th scope="col">Adresse de l'entreprise</th>
                        <th scope="col">description</th>
                        <th scope="col">Prix</th>
                        

                      </tr>
                    </thead>
                    <tbody>
                       
                      <tr> 
                       
                        <td>{{ $projets->nom_entreprise }} </td>
                        <td>{{ $projets->nom_projet }}</td>
                        <td>{{ $projets->localisation_entreprise }}</td>
                        <td>{{ $projets->description }}</td>
                        <td>{{ $projets->prix_projet}}</td>
                
                      </tr>
                    
                    </tbody>
                  </table>
            </section>
        </section>
        <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
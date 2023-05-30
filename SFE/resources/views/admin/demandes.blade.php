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
                <table style="" class="table">
                    <thead>
                      <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Numéro de téléphone</th>
                        <th scope="col">Catégorie de service</th>
                        <th scope="col">Objet</th>
                        <th scope="col">Message</th>
                        

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $demandes as $demandes )
                      <tr>
                        <td> {{ $demandes->email }}</td>
                        <td>{{ $demandes->telephone }}</td>
                        <td>{{ $demandes->categorie }}</td>
                        <td>{{ $demandes->objet }}</td>
                        <td>{{ $demandes->Message }}</td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
            </section>
        </section>
        <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
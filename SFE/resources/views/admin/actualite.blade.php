<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style-actualite.css') }}">
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
    @extends('layouts.app')

    @section('content')
        <section class="services-p">
            <section class="main-sec1">
                @extends('admin.Barre')
            </section>
            <section class="AF">
                @foreach ( $actualites as $act )
                    
               
               <div class="card-act">
                <div class="picture"><img src="{{ asset('../image/Actualite/'.$act->image) }}" alt="" srcset=""></div>
                <div class="caption">  
                    <p style="color:#82cf2c; margin-top:5px">description:</p>
                    <p style=" margin-top:-17px" class="p-diapo">{{ $act ->description }}</p>
                </div>
                <div class="btn-mp">
                    <form style="box-shadow: none" method="POST" action="{{ route('actualites.supprimer', $act->id) }}">
                        @csrf
                        @method('DELETE')
                        <button style="background-color: white; border:none;margin-bottom:5px" type="submit" class="btn btn-danger"><i style="color:rgb(255, 28, 28)" class="fa-solid fa-trash"></i></button>
                    </form>
                    <a href="{{ route('actualites.modifier', $act->id) }}" class="ope"><i style="color: rgba(38, 38, 211, 0.756)" class="fa-solid fa-pen-to-square"></i></a>

                </div>
               </div>
               @endforeach
              
            </section>
        </section>
        <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>
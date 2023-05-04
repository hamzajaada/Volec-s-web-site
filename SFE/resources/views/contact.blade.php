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
    <link rel="stylesheet" href="css/style-contact.css">

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
                <li><a href="" class="menu">Menu</a> </li>
                
            </ul>
            <div class="link">
                

            </div>
    </nav>
    <section class="AF"  >
        <div class="info-compte">
            <form class="row g-3" method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse Email :</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Objet:</label>
                    <input type="text" class="form-control" id="" aria-describedby="">
                  </div>
                <div class="form-group2">
                    <label for="exampleFormControlSelect1">Catégorie de service:</label><br>
                    <select class="form-select" aria-label="Default select example"  name="categorie" id="exampleFormControlSelect1">
                        <option value="Solutions d'Equipement MT">Solutions d'Equipement MT</option>
                        <option value="Solutions d'Equipement BT">Solutions d'Equipement BT</option>
                        <option value="Solutions d'Automatisation">Solutions d'Automatisation</option>
                        <option value="Solutions du Courant Faible">Solutions du Courant Faible</option>
                        <option value="Solutions d'Eclairage">Solutions d'Eclairage</option>
                        <option value="Solutions Antidéflagrante">Solutions Antidéflagrante</option>
                
                    </select>
                </div> 
     
                <div class="form-group2" >
                    <label for="exampleFormControlTextarea1">Message:</label>
                    <textarea class="form-control" name="offre" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                
                
                <input type="hidden" name="id_user" value="">
                <div class="col-12">
                    <center><button id="button" type="submit" class="btn btn-primary" style="width: 50%">Envoyer</button></center>
                </div>
            </form>
        </div>
    </section>
  
<script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>
</body>
</html>

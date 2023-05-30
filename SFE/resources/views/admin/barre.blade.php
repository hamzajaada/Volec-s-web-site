
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{ asset('css/barre.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name"><i class="fa-solid fa-shield-halved"></i> <span style="color: #82CE2F">V</span>olec</div>
            <i class="fa-solid fa-angle-right" id="btn"></i>
        </div>
        <div class="links">
            <ul class="nav-list">
                <li>
                    <a href="{{ url('/') }}">
                
                    <i class="fa fa-home"></i>
                    <span class="links_name">Accueil</span>
                    </a>
                    <span style="color:black" class="tooltip">Accueil</span>
                </li>
              
                <li>
                    <a href="{{ route('view-projet-admin') }}">
                    
                        <i class="fa-solid fa-diagram-project"></i>
                        <span class="links_name">Projet</span>
                    </a>
                    <span style="color:black" class="tooltip">Projet</span>
                </li>
                <li>
                    <a href="{{ route('demandes-admin') }}">
                         
                        <i class="fa fa-inbox"></i>
                        <span class="links_name">Demandes</span>
                    </a>
                    <span style="color:black" class="tooltip">Demandes</span>
                </li>
                <li>
                    <a href="{{ route('view-clients') }}">
                         
                        <i class="fa-sharp fa-regular fa-handshake"></i>
                        <span class="links_name">Client</span>
                    </a>
                    <span style="color:black" class="tooltip">Client</span>
                </li>
                <li>
                    <a href="{{ route('show-actualite-admin') }}">
                         
                        <i class="fa-regular fa-newspaper"></i>
                        <span class="links_name">Actualité</span>
                    </a>
                    <span style="color:black" class="tooltip">Actualité</span>
                </li>
                <li>
                    <a href="{{ route('show-secteur-admin') }}">
                         
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="links_name">Secteur d'activité</span>
                    </a>
                    <span style="color:black" class="tooltip">Secteur d'activité</span>
                </li>
                
                    <li>
                        <a href="{{ route('view-service.ajouter') }}">
                            
                            <i class="fa fa-plus"></i>
                            <span class="links_name"> Service</span>
                        </a>
                        <span  style="color:black"class="tooltip">  Ajouter Service</span>
                    </li>
                    <li>
                        <a href="{{ route('ajouteact-admin') }}">
                            
                            <i class="fa fa-plus"></i>
                            <span class="links_name">Actualité </span>
                        </a>
                        <span  style="color:black"class="tooltip">  Ajouter Actualité </span>
                    </li>
                    <li>
                        <a href="{{ route('view-secteur.ajouter') }}">
                            
                            <i class="fa fa-plus"></i>
                            <span class="links_name"> Secteur d'activite </span>
                        </a>
                        <span  style="color:black"class="tooltip"> Ajouter Secteur d'activite </span>
                    </li>
                    <li>
                        <a href="{{ route('view-projet.ajouter') }}">
                            
                            <i class="fa fa-plus"></i>
                            <span class="links_name"> Projet</span>
                        </a>
                        <span  style="color:black"class="tooltip">  Ajouter Projet</span>
                    </li>
                    <li>
                        <a href="{{ route('ajoute-client-view') }}">
                            
                            <i class="fa fa-plus"></i>
                            <span class="links_name"> Client</span>
                        </a>
                        <span  style="color:black"class="tooltip">  Ajouter Client</span>
                    </li>
               
                 
                   
             
            </ul>
        </div>
    </div>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });

        searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
        }
        </script>
        <script src="https://kit.fontawesome.com/6fe423de62.js" crossorigin="anonymous"></script>

</body>
</html>


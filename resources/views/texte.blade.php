<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
       #header {
        height: 70px;
        transition: all 0.5s;
        z-index: 997;
        background: white;
        color: black;
    }

    #header .logo h1 {
        margin: 0;
        padding: 6px 0;
        line-height: 1;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    #header .logo h1 a,
    #header .logo h1 a:hover {
        color: #fff;
        text-decoration: none;
    }

    #header .logo img {
        padding: 0;
        margin: 0;
        max-height: 40px;
    }

    @media (max-width: 992px) {
        #header {
            height: 60px;
        }
    }

    /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
    /**
* Desktop Navigation
*/
    .navbar {
        padding: 0;
    }

    .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
        color: black;
    }

    .navbar li {
        position: relative;
        color: black;
        font-size: 20;
        font-weight: bolder;
    }

    .navbar>ul>li+li {
        margin-left: 30px;
        color: #616A6B;

    }

    .navbar a,
    .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 0;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        white-space: nowrap;
        transition: 0.3s;
        position: relative;
        color: black;

    }

    .navbar a i,
    .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
        color: black;

    }

    .navbar>ul>li>a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 3px;
        left: 0;
        background-color: #7DB41E;
        visibility: hidden;
        width: 0px;
        transition: all 0.3s ease-in-out 0s;
    }

    .navbar a:hover:before,
    .navbar li:hover>a:before,
    .navbar .active:before {
        visibility: visible;
        width: 100%;
    }

    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
        color: black;
    }

    .navbar .dropdown ul {
        display: block;
        position: absolute;
        left: 0;
        top: 100%;
        margin: 0;
        padding: 10px 0;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
    }

    .navbar .dropdown ul li {
        min-width: 200px;
    }

    .navbar .dropdown ul a {
        padding: 10px 20px;
        font-size: 14px;
        text-transform: none;
        font-weight: 500;
        color: black;
    }

    .navbar .dropdown ul a i {
        font-size: 12px;
        font-weight: bolder;
    }

    .navbar .dropdown ul a:hover,
    .navbar .dropdown ul .active:hover,
    .navbar .dropdown ul li:hover>a {
        color: #7DB41E;
        font-weight: bolder;
    }

    .navbar .dropdown:hover>ul {
        opacity: 1;
        visibility: visible;
    }

    .navbar .dropdown .dropdown ul {
        top: 0;
        left: calc(100% - 30px);
        visibility: hidden;
    }

    .navbar .dropdown .dropdown:hover>ul {
        opacity: 1;
        top: 0;
        left: 100%;
        visibility: visible;
    }

    @media (max-width: 1366px) {
        .navbar .dropdown .dropdown ul {
            left: -90%;
        }

        .navbar .dropdown .dropdown:hover>ul {
            left: -100%;
        }
    }

  
    </style>

</head>

<body>
    <header id="header" class="sticky-top d-flex align-items-center">

        <div class="container d-flex justify-content-between">

            <div class="logo">
                <a href="{{ url('../') }}" class="navbar-brand">
                    <img src="https://www.radeel.ma/images/radeel-logo-1x1.png" style="height: 130px; width=90px;">
                </a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>


             <nav id="navbarNav navbar-expand-sm " class="navbar ">

                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <button type="button" class="navbar-toggler me-0 collapsed" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul>
                    <li><a class="nav-link scrollto active " href="{{ url('../') }}">ACCEUIL</a></li>
                    <li class="dropdown"><a href="{{ url('../') }}"><span>RADEEL</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur
                                    Général</a></li>
                            <li><a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Structure RADEEL</a>
                            </li>
                            <li><a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités </a></li>
                            <li><a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>ESPACE CLIENT</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../paiement') }}" class="dropdown-item">Paiement en
                                    ligne</strong></a></li>
                            <li><a href="{{ url('../Abonnement') }}" class="dropdown-item">Particulier</a></li>
                            <li><a href="{{ url('../GrosAbonnee') }}" class="dropdown-item">Gros client </a></li>
                            <li><a href="{{ url('../reclamation') }}" class="dropdown-item">Réclamation</a></li>
                            <li><a href="{{ url('../Autre') }}" class="dropdown-item">Guide client </a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>ESPACE RH</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../loi') }}" class="dropdown-item">Loi cadre</a></li>
                            <li><a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Avis de
                                    recrutement</a></li>
                            <li><a href="{{ url('../stage') }}" class="dropdown-item">Stages </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>FOURNISSEURS</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href=" {{ url('../AppelOffre') }}" class="dropdown-item">Avis des appels
                                    d'offres</a></li>
                            <li><a href="{{ url('../ResultatOffre') }}" class="dropdown-item">Résultat d'appels
                                    d'offres</a></li>
                            <li><a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </li>
                            <li><a href="{{ url('../Reglement') }}" class="dropdown-item"> Réglement des marchés
                                    publics </a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>PRATIQUE</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a>
                            </li>
                            <li><a href="{{ url('../galerie') }}" class="dropdown-item">Galerie</a></li>
                            <li><a href="{{ url('../') }}#AudioVisual" class="dropdown-item">Audiovisuel</a></li>
                            <li><a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a></li>
                            <li><a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a></li>

                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="{{ url('../') }}#contact">CONTACT</a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="dropdown">
                        <img src="img/france.png" width="20" height="20">
                        <ul>
                            <li>
                                <a href="#" class="dropdown-item">
                                    <img src="img/france.png" width="20" height="20">Français
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">
                                    <img src="img/maroc.png" width="20" height="20">Arabe
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </nav>  
           


        </div>
    </header><!-- End Header -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RADEEL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(https://i.ibb.co/PZjP8dD/head.png) center center no-repeat;
            background-size: cover;
            width: 100%;
        }

        body {
            margin: 0;
            font-family: "Montserrat", sans-serif;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.7;
            color: #717171;
            text-align: left;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-fluid  py-2 d-none d-md-flex" style="background: #077ec0; font-size:18px; font-family:'arial'">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white"><i class="fas fa-envelope text-white"></i><a
                            href="mailto:info@Radeel.com" style="color:white"> reclamation@radeel.com</a></small>
                    <small class="me-3 text-white"><i class="fas fa-map-marker-alt text-white"></i>
                        <a style="color:white;text-decoration: none;text-decoration: none;"
                            href="https://www.google.com/maps/place/La+R%C3%A9gie+Autonome+Intercommunale+de+Distribution+d'Eau+et+d'Electricit%C3%A9+de+la+Province+de+LARACHE/@35.1673009,-6.1433723,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc947c5cd4efd:0x39b8205ae5d8018d!8m2!3d35.1672965!4d-6.1411836"
                            target="_blank" rel="noopener">1647, lotissement Maghreb AL JADID</a>
                    </small>
                </div>

                <div id="note" class="text-secondary d-none d-xl-flex text-white">
                    <small><a href="tel:0801000042" style="color:white;text-decoration: none;">ALLO Radeel 08 01 00 00
                            42</a></small>
                </div>
                <div class="top-link">
                    <a href="https://www.facebook.com/RADEEL.Officiel/"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle">
                        <i class="fab fa-facebook-f" style="color: #077ec0;"></i></a>&nbsp;&nbsp;
                    <a href="https://twitter.com/RADEELOfficiel/status/1756352376523407617"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle">
                        <i class="fab fa-twitter" style="color: #077ec0;"></i></a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/p/CwSqgxHOC6d/"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle">
                        <i class="fab fa-instagram" style="color: #077ec0;font-weight: 900;"></i>
                    </a>&nbsp;&nbsp;
                    <a href="https://ma.linkedin.com/company/radeelofficiel"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle me-0">
                        <i class="fab fa-linkedin-in" style="color: #077ec0;"></i></a>&nbsp;&nbsp;
                    <a href="tel:0801000042" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0">
                        <i class="fas fa-headset" style="color: #077ec0;font-weight: bold;"></i></a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .reseau {
            position: fixed;
            top: 400px;
            left: 0%;
            transform: translate(-50%, -50%);
        }

        .reseau ul {
            list-style: none;
        }

        .reseau ul li {
            width: 50px;
            height: 50px;
            position: relative;
            background: #e59500;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 3px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .reseau ul li .fab {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            color: #fff;
        }

        .reseau ul li.facebook {
            background: #39569C;
        }

        .reseau ul li.twitter {
            background: #14171A;
        }

        .reseau ul li.instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .reseau ul li.linkdin {
            background: #39569C;
        }

        .reseau ul li.youtube {
            background-color: red;
        }

        .reseau ul li.facebook div.slider {
            background: #627aac;
        }

        .reseau ul li.twitter div.slider {
            background: #14171A;
        }

        .reseau ul li.instagram div.slider {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .reseau ul li.linkdin div.slider {
            background: #39569C;
        }

        .reseau ul li.youtube div.slider {
            background: red;
        }

        .slider {
            content: "";
            position: absolute;
            top: 0;
            left: 51px;
            width: 0px;
            height: 50px;
            background: #eebb5c;
            border-radius: 3px;
            transition: all 0.5s 0.3s ease;
        }

        .slider p {
            text-transform: uppercase;
            font-size: 16px;
            font-weight: 900;
            color: #fff;
            text-align: center;
            line-height: 50px;
            opacity: 0;
            transition: all 0.6s ease;
        }

        .reseau ul li:hover .slider {
            width: 180px;
            transition: all 0.5s ease;
        }

        .reseau ul li:hover .slider p {
            opacity: 1;
            transition: all 1s 0.2s ease;
        }
    </style>

    <div class="reseau">
        <ul>
            <li class="facebook">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <div class="slider">
                    <p><a href="https://www.facebook.com/RADEEL.Officiel/" style="color:white;">facebook</a></p>
                </div>
            </li>

            <style>
                svg {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
            </style>
            <li class="twitter">
                <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                    viewBox="0 0 352 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#fff"
                        d="M242.7 256l100.1-100.1c12.3-12.3 12.3-32.2 0-44.5l-22.2-22.2c-12.3-12.3-32.2-12.3-44.5 0L176 189.3 75.9 89.2c-12.3-12.3-32.2-12.3-44.5 0L9.2 111.5c-12.3 12.3-12.3 32.2 0 44.5L109.3 256 9.2 356.1c-12.3 12.3-12.3 32.2 0 44.5l22.2 22.2c12.3 12.3 32.2 12.3 44.5 0L176 322.7l100.1 100.1c12.3 12.3 32.2 12.3 44.5 0l22.2-22.2c12.3-12.3 12.3-32.2 0-44.5L242.7 256z" />
                </svg>
                <div class="slider">
                    <p><a href="https://twitter.com/RADEELOfficiel/status/1756352376523407617"
                            style="color:white;">twitter</a></p>
                </div>
            </li>

            <li class="instagram">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <div class="slider">
                    <p> <a href="https://www.instagram.com/p/CwSqgxHOC6d/" style="color:white;">instagram</a></p>
                </div>
            </li>

            <li class="linkdin">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                <div class="slider">
                    <p> <a href="https://ma.linkedin.com/company/radeelofficiel" style="color:white;">linkdin</a></p>
                </div>
            </li>
            <li class="youtube">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <div class="slider">
                    <p> <a href="https://www.youtube.com/@RADEELOfficiel" style="color:white;">Youtube</a></p>
                </div>
            </li>
        </ul>
    </div>

    <!-- allo Radeel -->

    <style>
        .allo {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 24px;
            right: 24px;
            background-color: #f89323;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            -webkit-box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.42);
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.42);
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 24px;
            z-index: 3;
        }

        .allo i {
            color: white;
            font-size: 26px;

        }

        .allo .allotext {
            background-color: #f89323;
            padding: 4px 8px;
            white-space: nowrap;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            font-size: 11px;
            position: absolute;
            z-index: 1;
            top: 5px;
            right: 105%;
        }
    </style>

    <a href="tel:0801000042" class="allo">
        <i class="fas fa-headset"></i>
        <span class="allotext">Allo RADEEL</span>
    </a>
   

<!-- end Spinner Start -->

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

    /**
* Mobile Navigation
*/
    .mobile-nav-toggle {
        color: #fff;
        cursor: pointer;
        display: none;
        line-height: 0;
        transition: 0.5s;
    }

    @media (max-width: 991px) {
        .mobile-nav-toggle {
            display: block;
        }

        .navbar ul {
            display: none;
        }
    }

    .navbar-mobile {
        position: fixed;
        overflow: hidden;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: rgba(16, 31, 29, 0.9);
        transition: 0.3s;
        z-index: 0;
    }

    .navbar-mobile .mobile-nav-toggle {
        position: absolute;
        top: 15px;
        right: 15px;
    }

    .navbar-mobile ul {
        display: block;
        position: absolute;
        top: 55px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        padding: 10px 0;
        background-color: #fff;
        overflow-y: auto;
        transition: 0.3s;
    }

    .navbar-mobile>ul>li+li {
        margin: 0;
    }

    .navbar-mobile a:hover:before,
    .navbar-mobile li:hover>a:before,
    .navbar-mobile .active:before {
        visibility: hidden;
    }

    .navbar-mobile a,
    .navbar-mobile a:focus {
        padding: 10px 20px;
        font-size: 15px;
        color: #7DB41E;
    }

    .navbar-mobile a:hover,
    .navbar-mobile .active,
    .navbar-mobile li:hover>a {
        color: #7DB41E;
    }

    .navbar-mobile .getstarted,
    .navbar-mobile .getstarted:focus {
        margin: 15px;
    }

    .navbar-mobile .dropdown ul {
        position: static;
        display: none;
        margin: 10px 20px;
        padding: 10px 0;
        z-index: 99;
        opacity: 1;
        visibility: visible;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    }

    .navbar-mobile .dropdown ul li {
        min-width: 200px;
    }

    .navbar-mobile .dropdown ul a {
        padding: 10px 20px;
    }

    .navbar-mobile .dropdown ul a i {
        font-size: 12px;
    }

    .navbar-mobile .dropdown ul a:hover,
    .navbar-mobile .dropdown ul .active:hover,
    .navbar-mobile .dropdown ul li:hover>a {
        color: #7DB41E;
    }

    .navbar-mobile .dropdown>.dropdown-active {
        display: block;
    }
</style>

<!-- Navbar Start -->
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
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
</button>
            <ul>
                <li><a class="nav-link scrollto " href="{{ url('../') }}">ACCEUIL</a></li>
                <li class="dropdown"><a href class="nav-link active"><span>RADEEL</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur Général</a></li>
                        <li><a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Structure RADEEL</a></li>
                        <li><a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités </a></li>
                        <li><a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences </a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>ESPACE CLIENT</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../paiement') }}" class="dropdown-item">Paiement en ligne</strong></a></li>
                        <li><a href="{{url('../Abonnement') }}" class="dropdown-item">Particulier</a></li>
                        <li><a href="{{url('../GrosAbonnee') }}" class="dropdown-item">Gros client </a></li>
                        <li><a href="{{url('../reclamation') }}" class="dropdown-item">Réclamation</a></li>
                        <li><a href="{{url('../Autre') }}" class="dropdown-item">Guide client </a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>ESPACE RH</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{url('../loi') }}" class="dropdown-item">Loi cadre</a></li>
                        <li><a href="{{url('../Avis recrutement') }}" class="dropdown-item">Avis de recrutement</a></li>
                        <li><a href="{{url('../stage') }}" class="dropdown-item">Stages </a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>FOURNISSEURS</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href=" {{url('../AppelOffre') }}" class="dropdown-item">Avis des appels d'offres</a></li>
                        <li><a href="{{url('../ResultatOffre') }}" class="dropdown-item">Résultat d'appels d'offres</a></li>
                        <li><a href="{{url('../programme') }}" class="dropdown-item">Programme prévisionnel</a></li>
                        <li><a href="{{url('../Reglement') }}" class="dropdown-item"> Réglement des marchés publics </a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>PRATIQUE</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="{{url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a></li>
                        <li><a href="{{url('../galerie') }}" class="dropdown-item">Galerie</a></li>
                        <li><a href="{{url('../') }}#AudioVisual" class="dropdown-item">Audiovisuel</a></li>
                        <li><a href="{{url('../Actualite') }}" class="dropdown-item">Actualités</a></li>
                        <li><a href="{{url('../coupure') }}" class="dropdown-item">Avis d'interruption </a></li>

                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="{{url('../')}}#contact">CONTACT</a></li>
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

        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
    <!-- Navbar End -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Nos Activités</h1>
        </div>
    </div>


    <style>
        #nav-link-1 .active {
            color: #fff;
            background-color: #fbc02d;
            border-color: transparent;
            box-shadow: 0 1px 9px 0 rgb(251 192 45 / 50%);
        }

        #nav-link-2 .active {
            color: #fff;
            background-color: #077ec0;
            box-shadow: 0 12px 5px -10px rgb(33 150 243 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }

        #nav-link-3 .active {
            color: #fff;
            background-color: rgb(155,187,89);;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }
        #nav-link-3 a {
            color: rgb(155,187,89);;
            background-color: #fff;
            padding: 30px;
            font-size: 19px;
            margin: 20px;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }
        #nav-link-2 a {
            color: #077ec0;
            background-color: #fff;
            padding: 30px;
            font-size: 19px;
            margin: 20px;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }
        #nav-link-1 a {
            color: #fbc02d;
            background-color: #fff;
            padding: 30px;
            font-size: 19px;
            margin: 20px;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }
       

       

        .bg_elect {
            background-color: #fbc02d !important;
            border-color: transparent;
            box-shadow: 0 1px 9px 0 rgb(251 192 45 / 50%);
        }

        .why-us .content {
            padding: 60px 100px 0 100px;
        }

        .why-us .content h3 {
            font-weight: 400;
            font-size: 34px;
            color: #37517e;
        }

        .why-us .content h4 {
            font-size: 20px;
            font-weight: 700;
            margin-top: 5px;
        }

        .why-us .content p {
            font-size: 15px;
            color: #848484;
        }

        .why-us .img {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .why-us .accordion-list ,.why-us .accordion-listP ,.why-us .accordion-listPP{
            padding: 0 100px 60px 100px;
        }

        .why-us .accordion-list ul , .why-us .accordion-listP ul , .why-us .accordion-listPP ul{
            padding: 0;
            list-style: none;
        }

        .why-us .accordion-list li+li ,.why-us .accordion-listP li+li ,.why-us .accordion-listPP li+li  {
            margin-top: 15px;
        }

        .why-us .accordion-list li ,  .why-us .accordion-listP li ,  .why-us .accordion-listPP li {
            padding: 20px;
            background: #fff;
            border-radius: 4px;
        }

        .why-us .accordion-list a, .why-us .accordion-listP a , .why-us .accordion-listPP a{
            display: block;
            position: relative;
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            line-height: 24px;
            font-weight: 500;
            padding-right: 30px;
            outline: none;
            cursor: pointer;
        }

        .why-us .accordion-list span , .why-us .accordion-listP span, .why-us .accordion-listPP span {
            color: #47b2e4;
            font-weight: 800;
            font-size: 19px;
            padding-right: 10px;
        }

        .why-us .accordion-list i , .why-us .accordion-listP i, .why-us .accordion-listPP i  {
            font-size: 24px;
            position: absolute;
            right: 0;
            top: 0;
        }

        .why-us .accordion-list p, .why-us .accordion-listP p, .why-us .accordion-listPP p {
            margin-bottom: 0;
            padding: 5px 0 0 0;
        }

        .why-us .accordion-list .icon-show ,.why-us .accordion-listP .icon-show,.why-us .accordion-listPP .icon-show {
            display: none;
        }

        .why-us .accordion-list a.collapsed,.why-us .accordion-listP a.collapsed ,.why-us .accordion-listPP a.collapsed  {
            color: #343a40;
        }

        .why-us .accordion-list a.collapsed:hover, .why-us .accordion-listP a.collapsed:hover, .why-us .accordion-listPP a.collapsed:hover {
            color: #47b2e4;
        }

        .why-us .accordion-list a.collapsed .icon-show,.why-us .accordion-listP a.collapsed .icon-show, .why-us .accordion-listPP a.collapsed .icon-show {
            display: inline-block;
        }

        .why-us .accordion-list a.collapsed .icon-close,.why-us .accordion-listP a.collapsed .icon-close ,.why-us .accordion-listPP a.collapsed .icon-close {
            display: none;
        }

        @media (max-width: 1024px) {

            .why-us .content,
            .why-us .accordion-list, .why-us .accordion-listP, .why-us .accordion-listPP{
                padding-left: 0;
                padding-right: 0;
            }
        }

        @media (max-width: 992px) {
            .why-us .img {
                min-height: 400px;
            }

            .why-us .content {
                padding-top: 30px;
            }

            .why-us .accordion-list {
                padding-bottom: 30px;
            }
        }

        @media (max-width: 575px) {
            .why-us .img {
                min-height: 200px;
            }
        }
        p{
            font-size:20px;
            font-family: Arial, sans-serif;
        }
        h3{
            display: inline-block;
            font-size:20px;
        }
        ol li{
            padding: 5px;

        }
        .bd-callout {
            padding: 1.25rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #e9ecef;
            border-left-width: 0.25rem;
            border-radius: 0.25rem;
            border-left-color: red;
        }
    </style>

    <div class="section py-5">
        <div class="container">
            <div class="section w-100  my-4">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col">

                            <ul class="nav nav-pills justify-content-center mb-3 direction-rtl" id="pills-tab"
                                role="tablist">
                                <li class="nav-item" id="nav-link-1">
                                    <a class="elec btn btn-rounded active" id="pills-first-tab" data-toggle="pill"
                                        href="#pills-first" role="tab" aria-controls="pills-first"
                                        aria-selected="true"> <i class="fas fa-bolt"></i>&nbsp;Electricité
                                    </a>
                                </li>
                                <li class="nav-item" id="nav-link-2">
                                    <a class="water btn btn-rounded" id="pills-second-tab" data-toggle="pill"
                                        href="#pills-second" role="tab" aria-controls="pills-second"
                                        aria-selected="false"> <i class="fas fa-tint"></i>&nbsp;Eau Potable
                                    </a>
                                </li>
                                <li class="nav-item" id="nav-link-3">
                                    <a class="assa btn btn-rounded " id="pills-third-tab" data-toggle="pill"
                                        href="#pills-third" role="tab" aria-controls="pills-third"
                                        aria-selected="false"> <i class="fas fa-water"></i>&nbsp;Assainissement Liquide
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-first" role="tabpanel"
                                    aria-labelledby="pills-first-tab">
                                    <div class="row ">
                                        <div class="">
                                            <div class="text-center">
                                                <h2  style="color:#f89323;">REALISATIONS D’ELECTRICITE 2017</h2>
                                                <p class="text-start">
                                                    Le budget d’investissement alloué à la distribution Electricité est
                                                    de 20,45 Mdhs.
                                                    Les réalisations ont atteint un total de 13,86 Mdhs soit un taux de
                                                    réalisation de
                                                    68 %. <br>
                                                    Les réalisations par chapitre se présentent comme suit : <br>
                                                <div class="text-center">
                                                    <img src="img/elec.png" alt="" class="img-fluid "
                                                        style="margin:5px; width:550px">
                                                    <img src="img/elec1.png" alt="" class="img-fluid "
                                                        style="margin:5px;">
                                                </div>
                                                </p>
                                                <ul class="text-start">
                                                   <p> La RADEEL a réalisé en 2017 plusieurs projets s’inscrivant dans le
                                                    cadre de :</p>
                                                    <section id="why-us" class="why-us">
                                                        <div class="container-fluid aos-init aos-animate"
                                                            data-aos="fade-up">
                                                            <div class="row">
                                                                <div
                                                                    class=" justify-content-center align-items-stretch  ">
                                                                    <div class="accordion-list">
                                                                        <ul>
                                                                            <li>
                                                                                <a data-bs-toggle="collapse"
                                                                                    class="collapse collapsed"
                                                                                    data-bs-target="#accordion-list-1"
                                                                                    aria-expanded="false"><span>01</span>
                                                                                   <h3 style="color:#f89323"><u> Ouvrages électriques postes sources
                                                                                    et
                                                                                    répartiteurs </u></h3>
                                                                                   </a>
                                                                                <div id="accordion-list-1"
                                                                                    class="collapse"
                                                                                    data-bs-parent=".accordion-list">
                                                                                            <p>L’achèvement des travaux de
                                                                                            renouvellement de deux jeux
                                                                                            de
                                                                                            combinés de
                                                                                            mesure TT-TC dans le cadre
                                                                                            du
                                                                                            marché 15/E/2014 :
                                                                                            Fourniture
                                                                                            et mise en
                                                                                            service des combinés de
                                                                                            mesure
                                                                                            TC-TT 72,5KV au poste source
                                                                                            Ksar El Kébir.</p>
                                                                                      <p>Réalisation des travaux de
                                                                                            maintenance et d’entretien
                                                                                            de
                                                                                            tous les postes
                                                                                            répartiteurs de la RADEEL
                                                                                            dans
                                                                                            le cadre du marché 15/E/2017
                                                                                            : Maintenance et
                                                                                            diagnostic des cellules
                                                                                            disjoncteurs MT des postes
                                                                                            source et
                                                                                            poste
                                                                                            répartiteurs de la RADEEL.<p>
                                                                                   
                                                                                        <div class="text-center">
                                                                                            <img src="img/elec2.jpg"
                                                                                                class="img-fluid "
                                                                                                style="margin:5px;">
                                                                                            <img src="img/elc4.jpg"
                                                                                                class="img-fluid "
                                                                                                style="margin:5px;">
                                                                                        </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <a data-bs-toggle="collapse"
                                                                                    data-bs-target="#accordion-list-2"
                                                                                    class="collapsed"
                                                                                    aria-expanded="false"><span>02</span>
                                                                                    <h3 style="color:#f89323"><u>Travaux
                                                                                    sur les réseaux Moyenne Tension</u></h3>
                                                                                    <i
                                                                                        class="bx bx-chevron-down icon-show"></i><i
                                                                                        class="bx bx-chevron-up icon-close"></i></a>
                                                                                <div id="accordion-list-2"
                                                                                    class="collapse"
                                                                                    data-bs-parent=".accordion-list"
                                                                                    style="">
                                                                                    <div class="row">
                                                                                        <div class="col text-center"><br>
                                                                                            <img src="img/elec8.jpg"
                                                                                            class="img-fluid" width="200px" >
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <p class=""
                                                                                                style="display:inline-block">
                                                                                                Ces travaux ont été
                                                                                                réalisés
                                                                                                suite aux études du
                                                                                                Schéma
                                                                                                Directeur
                                                                                                d’Electricité, de
                                                                                                raccordement des
                                                                                                nouveaux
                                                                                                postes préfabriqués
                                                                                                à
                                                                                                LARACHE et KSAR EL KEBIR
                                                                                                et
                                                                                                dans le cadre de la
                                                                                                normalisation
                                                                                                des lignes
                                                                                                MT aériennes et création
                                                                                                de
                                                                                                la sécurisation par
                                                                                                des boucles de
                                                                                                part et
                                                                                                d’autres. Parmi ces
                                                                                                travaux
                                                                                                nous citons :
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p >Le déplacement et le
                                                                                            renforcement de la ligne
                                                                                            aérienne MT 20kV du
                                                                                            Douar Krimda, d’une longueur
                                                                                            de
                                                                                            3.77Km-Tri-filaire.</p>
                                                                                        <p>La réalisation de
                                                                                            l’extension de
                                                                                            la ligne MT 20kV,
                                                                                            pour
                                                                                            l’alimentation du quartier
                                                                                            Ghdira.</p>
                                                                                        <div class="text-center py-4">
                                                                                            <img src="img/elec9.jpg"
                                                                                                class="img-fluid "
                                                                                                style="margin:5px; width:100% "
                                                                                                alt="">
                                                                                        </div>
                                                                                        <p> Le renouvellement des
                                                                                            réseaux
                                                                                            MT de câble S22-95
                                                                                            mm2 vétuste en
                                                                                            câble 240 mm² Alu S26 au
                                                                                            niveau
                                                                                            du tronçon liant les
                                                                                            postes Oulad
                                                                                            Hmaid et Abattoirs, soit une
                                                                                            longueur de 1
                                                                                            510m-tri-filaire posée.</p>
                                                                                         <p>La mise en souterrain de la
                                                                                            ligne aérienne «
                                                                                            Larache1 », Pose de
                                                                                            1614 m-trifilaire du câble
                                                                                            PRC
                                                                                            S26-240mm².</p>
                                                                                        <div class="text-center py-4">
                                                                                            <img src="img/elec10.jpg"
                                                                                                class="img-fluid "
                                                                                                style="margin:5px; width:100% "
                                                                                                alt="">
                                                                                        </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <a data-bs-toggle="collapse"
                                                                                    data-bs-target="#accordion-list-3"
                                                                                    class="collapsed"
                                                                                    aria-expanded="false"><span>03</span>
                                                                                <h3 style="color:#f89323"><u>Les Postes MT/BT</u></h3>
                                                                                    <i
                                                                                        class="bx bx-chevron-down icon-show"></i><i
                                                                                        class="bx bx-chevron-up icon-close"></i></a>
                                                                                <div id="accordion-list-3"
                                                                                    class="collapse"
                                                                                    data-bs-parent=".accordion-list"
                                                                                    style="">
                                                                                    <ul>
                                                                                       Acquisition et installation
                                                                                            -
                                                                                            dans le cadre du
                                                                                            marché 04/E/2017 - de
                                                                                            5 postes MT/BT préfabriqués
                                                                                            bas
                                                                                            de poteau 250 KVA
                                                                                            dans différents
                                                                                            quartiers de la ville de
                                                                                            Larache
                                                                                            et Ksar Kébir, et
                                                                                            ce pour
                                                                                            satisfaire les besoins en
                                                                                            électricité de plusieurs
                                                                                            abonnés qui ont
                                                                                            connu un développement
                                                                                            urbanistique et des
                                                                                            extensions importantes
                                                                                            ces dernières années.
                                                                                        <br>
                                                                                       
                                                                                            <div class="bd-callout bd-callout-info">
                                                                                                <i class="fa fa-check  me-3"
                                                                                                    style="color:#285AEB;padding-left:20px;"></i>
                                                                                            Krimda<br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i> Rkada<br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i> Amgala<br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Oudiniyine<br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i> Khyayta
                                                                                            </div>
                                                                                            <p>Réalisation des travaux de
                                                                                            normalisation des postes
                                                                                            MT/BT dans le
                                                                                            cadre du marché 05/E/2017
                                                                                            dans
                                                                                            l’objectif de
                                                                                            nnormalisation et mise
                                                                                            à niveau des équipements
                                                                                            électriques et du GC des
                                                                                            postes MT/BT en
                                                                                            exploitation (TUR, terres
                                                                                            techniques etc.) avec
                                                                                            optimisation de la
                                                                                            puissance installée.</p>
                                                                                       <p>Renouvellement et
                                                                                            installation
                                                                                            de tableau MT étanche
                                                                                            au niveau du
                                                                                            poste MT/BT Dior Houata.</p>
                                                                                    </ul>
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/elec15.jpg"
                                                                                            style="width:100%; height:350px"
                                                                                            class="img-fluid ">
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <a data-bs-toggle="collapse"
                                                                                    data-bs-target="#accordion-list-4"
                                                                                    class="collapsed"
                                                                                    aria-expanded="false"><span>04</span>
                                                                                <h3 style="color:#f89323"><u>Travaux sur les
                                                                                    Réseaux Basse Tension </u></h3>
                                                                                    <i
                                                                                        class="bx bx-chevron-down icon-show"></i><i
                                                                                        class="bx bx-chevron-up icon-close"></i></a>
                                                                                <div id="accordion-list-4"
                                                                                    class="collapse"
                                                                                    data-bs-parent=".accordion-list"
                                                                                    style="">
                                                                                    <ul>
                                                                                        <p>Ces travaux visent
                                                                                            l’amélioration de la qualité
                                                                                            de
                                                                                            la desserte chez
                                                                                            les clients BT (continuité
                                                                                            de service, élimination
                                                                                            des chutes de
                                                                                            tension, structuration des
                                                                                            réseaux et répartition
                                                                                            des charges).</p>
                                                                                        <p>Renouvellement et de
                                                                                            renforcement des réseaux BT
                                                                                            sur façade des
                                                                                            différents quartiers des
                                                                                            villes de Larache et Ksar
                                                                                            El Kébir dans le
                                                                                            cadre du marché 13/E/2015.</p>
                                                                                       
                                                                                        <div class="text-center py-4">
                                                                                            <img src="img/elec17.jpg"
                                                                                                class="img-fluid "
                                                                                                style="width:100%; height:350px">
                                                                                        </div>
                                                                                       <p>Renouvellement et de
                                                                                            renforcement des réseaux BT
                                                                                            sur poteau dans le
                                                                                            cadre du marché 15/E/2016,
                                                                                            au niveau des Douars
                                                                                            suivants :</p>
                                                                                            <div class="bd-callout bd-callout-info">
                                                                                                <i class="fa fa-check  me-3"
                                                                                                    style="color:#285AEB;padding-left:20px;"></i>
                                                                                           Krimda</br>
                                                                                           <i class="fa fa-check  me-3"
                                                                                           style="color:#285AEB;padding-left:20px;"></i> Rihiyine</br>
                                                                                           <i class="fa fa-check  me-3"
                                                                                           style="color:#285AEB;padding-left:20px;"></i> Zrarka</div>
                                                                                            <!-- <img src="img/ELC23.jpg" class="img-fluid " alt=""> -->
                                                                                       
                                                                                        <p>Renouvellement et
                                                                                            normalisation des
                                                                                            branchements BT
                                                                                            dans le cadre
                                                                                            du marché 03/E/2017, au
                                                                                            niveau des Douars suivants :</p>
                                                                                            <div class="bd-callout bd-callout-info">
                                                                                                <i class="fa fa-check  me-3"
                                                                                                    style="color:#285AEB;padding-left:20px;"></i>
                                                                                           Ghdira Riyah</br>
                                                                                           <i class="fa fa-check  me-3"
                                                                                                    style="color:#285AEB;padding-left:20px;"></i> Hraksa</br>
                                                                                                    <i class="fa fa-check  me-3"
                                                                                                    style="color:#285AEB;padding-left:20px;"></i> Oulad Hamou Smid Lma</br>
                                                                                           
                                                                                                    <i class="fa fa-check  me-3"
                                                                                                    style="color:#285AEB;padding-left:20px;"></i> Bargha
                                                                                            </div>
                                                                                     
                                                                                        <ul>
                                                                                            <p>
                                                                                                Au niveau des travaux
                                                                                                avec participation</p>
                                                                                           
                                                                                            <p>
                                                                                                Etudes et suivi des
                                                                                                travaux d’électricité
                                                                                                des
                                                                                                lotissements MANAR
                                                                                                1 extension et MANAR
                                                                                                III. <br>
                                                                                                Le tableau ci-dessous
                                                                                                récapitule le linéaire
                                                                                                du
                                                                                                réseau MT et BT
                                                                                                :
                                                                                            <div
                                                                                                class="text-center py-4">
                                                                                                <img src="img/ELE1.png"
                                                                                                    class="img-fluid "
                                                                                                    style="width:80%; height:350px">
                                                                                                <br>
                                                                                            </div>
                                                                                            <p> Le tableau ci-dessous
                                                                                                récapitule ces
                                                                                                réalisations :
                                                                                            </p>
                                                                                            <div
                                                                                                class="text-center py-4">
                                                                                                <img src="img/ELE2.png"
                                                                                                    class="img-fluid "
                                                                                                    style="width:80%; height:350px">
                                                                                            </div>
                                                                                            <p> Marché achevé dans
                                                                                                l’attente de la
                                                                                                validation des
                                                                                                rapports
                                                                                                provisoires.</p>
                                                                                            <p>Le volume total des
                                                                                                investissements en
                                                                                                électricité réalisé
                                                                                                pour la période de 2013
                                                                                                à 2017 est de 72 993
                                                                                                Kdhs réparti
                                                                                                comme suit :</p>
                                                                                            <div
                                                                                                class="text-center py-4">
                                                                                                <img src="img/ELE3.png"
                                                                                                    class="img-fluid "
                                                                                                    style="width:80%; height:350px margin:3px"
                                                                                                    alt=""><br>
                                                                                                <img src="img/elec23.png"
                                                                                                    class="img-fluid "
                                                                                                    style="width:80%; height:350px"
                                                                                                    alt="">
                                                                                            </div>
                                                                                            </p>
                                                                                        </ul>
                                                                                    </ul>

                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img aos-init aos-animate"
                                                                    data-aos="zoom-in" data-aos-delay="150">&nbsp;
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </section>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-second" role="tabpanel"
                                    aria-labelledby="pills-second-tab">

                                    <div class="row justify-content-center">
                                        <h2 class="text-center" style="color: #077ec0;">REALISATIONS D’EAU 2017</h2>
                                        <p class="text-start">
                                            Les investissements de l’année 2017 ont atteint un montant de 9,35 Mdhs,
                                            soit un
                                            taux de réalisation de 48 %, réparti comme suit :
                                        <div class="text-center">
                                            <img src="img/EAU1.gif" alt="" class="img-fluid "
                                                style="margin:10px;">
                                            <img src="img/EAU2.gif" alt="" class="img-fluid ">
                                        </div>

                                        </p>
                                        <p class="text-start">Les principales réalisations de la RADEEL en matière de
                                            l’eau potable 2017 ont porté sur :</p>
                                        <ul>
                                            <section id="why-us" class="why-us ">
                                                <div class="container-fluid aos-init aos-animate" data-aos="fade-up">
                                                    <div class="row">
                                                        <div class=" justify-content-center align-items-stretch  ">
                                                            <div class="accordion-listP">
                                                                <ul>
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-10"
                                                                            aria-expanded="false">
                                                                            <span>01</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:#077ec0;"> <u>Au niveau
                                                                                de
                                                                                l’Infrastructure</u> </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>
                                                                        <div id="accordion-list-10" class="collapse"
                                                                            data-bs-parent=".accordion-listP"
                                                                            style="">
                                                                            <div class="container AuNiveauEau1">
                                                                                <ul>
                                                                                    <li class="text-reset"
                                                                                        style="color:gray; font-weight:bold; font-size:20px;">
                                                                                        a)
                                                                                        Etude du
                                                                                        schéma
                                                                                        directeur d’alimentation en eau
                                                                                        potable :</li>
                                                                                    <p>Cette étude consiste en la
                                                                                        réalisation d’une étude du
                                                                                        Schéma
                                                                                        Directeur
                                                                                        d’alimentation en eau potable
                                                                                        des villes de LARACHE et KSAR EL
                                                                                        KEBIR et
                                                                                        des
                                                                                        centres des Communes Sahel et
                                                                                        Aouamra via le marché n°
                                                                                        08/O/2015
                                                                                        d’un
                                                                                        montant de 2 389 320,00 DH TTC.
                                                                                    </p>
                                                                                    <li class="text-reset"
                                                                                        style="color:gray; font-weight:bold;font-size:20px;">
                                                                                        b)
                                                                                        Renforcement
                                                                                        de
                                                                                        l’alimentation en eau potable de
                                                                                        Khemis Sahel :</li>
                                                                                    <p>Le renforcement de l’alimentation
                                                                                        en eau potable de Khemis Sahel
                                                                                        dans le
                                                                                        cadre des marchés N°05/O/2016 et
                                                                                        N°08/O/2016 pour un montant de
                                                                                        3 448
                                                                                        035,34
                                                                                        DH TTC, les travaux sont
                                                                                        terminés et réceptionnés.</p>
                                                                                    <ul>
                                                                                        <p>Dans le cadre du marché n°
                                                                                            05/O/2016, ces travaux ont
                                                                                            consisté
                                                                                            globalement :</p>
                                                                                        <ul>
                                                                                            <p>-La pose d’environ 4 680
                                                                                                ml des conduites en PVC
                                                                                                DN 200
                                                                                                mm PN 25
                                                                                                bar à emboitement.</p>
                                                                                            <p>-Equipements complets de
                                                                                                cinq points bas en
                                                                                                vidanges DN
                                                                                                100 sur
                                                                                                conduites en PVC DN 200
                                                                                                PN 25 bar.</p>
                                                                                            <p> -Equipements complets de
                                                                                                cinq points hauts en
                                                                                                vidanges
                                                                                                DN 100
                                                                                                sur
                                                                                                conduites en PVC DN 200
                                                                                                PN 25 bar.</p>
                                                                                            <p>-stallation de robinet
                                                                                                vanne de sectionnement
                                                                                                DN 200 mm.
                                                                                            </p>
                                                                                            <div
                                                                                                class="text-center justifiy-centent-center">
                                                                                                <img src="img/EAU3.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt="">
                                                                                                <img src="img/EAU4.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt=""><br>
                                                                                                <img src="img/EAU5.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt="">
                                                                                                <img src="img/EAU6.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt="">
                                                                                            </div>
                                                                                        </ul>
                                                                                        <p> Dans le cadre du marché n°
                                                                                            08/O/2016, ces travaux ont
                                                                                            consisté
                                                                                            globalement :</p>
                                                                                        <ul>
                                                                                            <p>-La construction du génie
                                                                                                civil de la station de
                                                                                                pompage
                                                                                                au site
                                                                                                du réservoir de la zone
                                                                                                touristique.</p>
                                                                                            <p> -Equipement hydraulique
                                                                                                et électrique de la
                                                                                                station de
                                                                                                pompage.
                                                                                            </p>
                                                                                            <div
                                                                                                class="text-center justifiy-centent-center">
                                                                                                <img src="img/EAU7.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt="">
                                                                                                <img src="img/EAU8.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt=""><br>
                                                                                                <img src="img/EAU9.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt="">
                                                                                                <img src="img/EAU10.jpg"
                                                                                                    class="img-fluid"
                                                                                                    style="margin:5px;"
                                                                                                    alt="">

                                                                                            </div>
                                                                                        </ul>
                                                                                    </ul>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            data-bs-target="#accordion-list-12"
                                                                            class="collapsed"
                                                                            aria-expanded="false"><span>02</span> <h3 class=""
                                                                            style="display:inline-block; color:#077ec0;"> <u>Au
                                                                            niveau de la distribution</u></h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i></a>
                                                                        <div id="accordion-list-12" class="collapse"
                                                                            data-bs-parent=".accordion-listP"
                                                                            style="">
                                                                            <div class="container AuNiveauEau2">
                                                                                <ul>
                                                                                    <li class="text-reset"
                                                                                        style="color:gray; font-weight:bold;font-size:20px;">
                                                                                        a)
                                                                                        Réalisation
                                                                                        des travaux de renouvellement du
                                                                                        réseau de l’eau potable
                                                                                    </li>
                                                                                    <p>Le présent projet a pour objet le
                                                                                        renouvellement des réseaux
                                                                                        d’eau
                                                                                        potable
                                                                                        fuyards et vétustes sises dans
                                                                                        le périmètre de distribution de
                                                                                        la
                                                                                        RADEEL.
                                                                                    </p>
                                                                                    <p class="text-decoration-underline"
                                                                                        style="color:gray; padding:30px; font-weight:bold">
                                                                                        Pour la
                                                                                        ville de
                                                                                        Larache
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/EAU11.jpg"
                                                                                            class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                    </p>
                                                                                    <p class="text-decoration-underline"
                                                                                        style=" padding:30px;color:gray; font-weight:bold">
                                                                                        Linéaire du
                                                                                        réseau
                                                                                        par
                                                                                        diamètre
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/EAU12.jpg"
                                                                                            class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                    </p>
                                                                                    <li class="text-decoration-underline"
                                                                                        style="color:gray;font-weight:bold">
                                                                                        Liste des
                                                                                        Quartiers :
                                                                                    </li>
                                                                                    <ul> <div class="bd-callout bd-callout-info">
                                                                                        <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>-Lotissement Chaabane I</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>-Quartier El Ouafae</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>-Lotissement Kenza II</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>-Av. Omar Ibn Abdelaziz (rue
                                                                                            lycée My Mohamed ben
                                                                                            Abdellah)
                                                                                       
                                                                                    </ul>
                                                                                    <p>Les travaux de renouvellement de
                                                                                        réseau d’eau potable ont permis
                                                                                        l’amélioration de rendement en
                                                                                        termes de réduction des débits
                                                                                        nocturnes
                                                                                        (débits de fuites).
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/EAU13.jpg"
                                                                                            class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                    </p>
                                                                                    <p class="text-decoration-underline"
                                                                                        style="color:gray; padding:30px; font-weight:bold">
                                                                                        Pour la
                                                                                        ville de Ksar
                                                                                        El
                                                                                        Kébir
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/EAU14.jpg"
                                                                                            class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                    </p>
                                                                                    <p class="text-decoration-underline"
                                                                                        style="color:gray; padding:30px; font-weight:bold">
                                                                                        Linéaire du
                                                                                        réseau
                                                                                        par
                                                                                        diamètre :
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/EAU15.jpg"
                                                                                            class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                    </p>
                                                                                 
                                                                                    <div class="text-center">
                                                                                        <img src="img/EAU16.jpg"
                                                                                            class="img-fluid "
                                                                                            style="margin:5px;"
                                                                                            alt=""
                                                                                            alt="">
                                                                                        <img src="img/EAU17.jpg"
                                                                                            class="img-fluid"
                                                                                            style="margin:5px;"
                                                                                            alt=""
                                                                                            alt="">
                                                                                    </div>
                                                                                    <li class="text"
                                                                                        style="color:gray; padding:30px; font-weight:bold; font-size:20px;">
                                                                                        b)
                                                                                        Travaux
                                                                                        de réparation des fuites,
                                                                                        d’entretien du réseau et
                                                                                        ouvrages
                                                                                        d’eau
                                                                                        potable :</li>
                                                                                    <p>Afin d’assurer la continuité de
                                                                                        l’alimentation en eau potable en
                                                                                        terme de
                                                                                        débit et pression dans des
                                                                                        meilleures conditions et de
                                                                                        réduire
                                                                                        le temps
                                                                                        d’intervention de nos équipes,
                                                                                        la RADEEL a réalisé en 2017 de
                                                                                        multiples
                                                                                        travaux d’entretien et de
                                                                                        maintenance des réseaux et
                                                                                        ouvrages
                                                                                        d’eau
                                                                                        potable
                                                                                        :
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/EAU18.jpg"
                                                                                            class="img-fluid">
                                                                                    </div>
                                                                                    </p>
                                                                                    <li class=" text"
                                                                                        style="color:gray; padding:30px; font-weight:bold;font-size:20px;">
                                                                                        c)
                                                                                        Travaux
                                                                                        de réparation de fuites</li>
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/EAU19.jpg"
                                                                                            class="img-fluid "
                                                                                            style="margin:5px; ">
                                                                                        <img src="img/EAU20.gif"
                                                                                            class="img-fluid  "
                                                                                            style="margin:5px; height:430px; ">
                                                                                    </div>
                                                                                    <li class="text"
                                                                                        style="color:gray;  font-weight:bold; font-size:20px;">
                                                                                        d)
                                                                                        Travaux
                                                                                        d’entretien :</li>
                                                                                    <p>
                                                                                        Les travaux d’entretien
                                                                                        consistent à :
                                                                                    <ul>
                                                                                        <p> -Travaux de réhabilitation
                                                                                            et pose de 2936 mètres
                                                                                            linéaires
                                                                                            de
                                                                                            conduites
                                                                                            en PVC de DN 160, 110 et 63
                                                                                            mm.</p>
                                                                                        <p>Travaux de normalisation
                                                                                            d’environ 299 branchements
                                                                                            et
                                                                                            niches ;
                                                                                        </p>
                                                                                        <p> -Les travaux de remise en
                                                                                            état (nettoyage et
                                                                                            réfections des
                                                                                            chantiers...) ;</p>
                                                                                        <p> -Les travaux d’entretien et
                                                                                            mise à niveau de 24 regards
                                                                                            et
                                                                                            construction
                                                                                            de 68 nouveaux regards pour
                                                                                            vanne et pièces spéciales
                                                                                            (nettoyage,
                                                                                            scellement des tampons, mise
                                                                                            à niveau...) ;</p>
                                                                                        <p> -Les travaux de mise à
                                                                                            niveau d’environ 674 bouches
                                                                                            à clé ;
                                                                                        </p>
                                                                                        <p>
                                                                                            - Les travaux d’entretien
                                                                                            concernent l’ensemble des
                                                                                            ouvrages
                                                                                            d’eau :
                                                                                            <ul>
                                                                                                <p>-Rinçage et
                                                                                                    désinfection des
                                                                                                    réservoirs et
                                                                                                    château
                                                                                                    d’eau,
                                                                                                </p>
                                                                                                <p> -Entretien de
                                                                                                    l’entourage des
                                                                                                    réservoirs, station
                                                                                                    de
                                                                                                    pompage,
                                                                                                    Sources et
                                                                                                    dés-sableur.</p>
                                                                                                <p>-Peinture et
                                                                                                    badigeonnage des
                                                                                                    ouvrages d’eau :
                                                                                                    Réservoirs,
                                                                                                    forages et stations
                                                                                                    de pompages. </p>
                                                                                                <div
                                                                                                    class="text-center">
                                                                                                    <img src="img/EAU21.jpg"
                                                                                                        class="img-fluid "
                                                                                                        style="margin:5px;"
                                                                                                        alt="">
                                                                                                    <img src="img/EAU22.gif"
                                                                                                        class="img-fluid "
                                                                                                        style="margin:5px;"
                                                                                                        alt="">
                                                                                                    <img src="img/EAU23.gif"
                                                                                                        class="img-fluid "
                                                                                                        style="margin:5px;"
                                                                                                        alt="">
                                                                                                </div>
                                                                                            </ul>
                                                                                        </li>

                                                                                    </ul>
                                                                                    </p>

                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            data-bs-target="#accordion-list-13"
                                                                            class="collapsed"
                                                                            aria-expanded="false"><span>03</span> <h3 class=""
                                                                            style="display:inline-block; color:#077ec0;"><u> Au
                                                                            niveau des travaux avec participation </u></h3> <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i></a>
                                                                        <div id="accordion-list-13" class="collapse"
                                                                            data-bs-parent=".accordion-listP" style="">
                                                                            <div class="container AuNiveauEau3">
                                                                                <p>Etudes et suivi des travaux
                                                                                    d’équipement d’AEP des lotissements
                                                                                    MANAR 1
                                                                                    extension
                                                                                    et MANAR III.
                                                                                    Le tableau ci-dessous récapitule le
                                                                                    linéaire du réseau posé par
                                                                                    diamètre de
                                                                                    conduite :</p>
                                                                                    <img src="img/EAU24.jpg"
                                                                                        class="img-fluid mx-auto d-block"
                                                                                        style="margin:5px;width:100%; height:400px;"></br>
                                                                                   <p >Le tableau ci-dessous récapitule ces
                                                                                    réalisations:</p>
                                                                                    <img src="img/EAU25.gif"
                                                                                        class="img-fluid mx-auto d-block"
                                                                                        style="margin:5px; width:100%; height:400px; "></br>
                                                                                   <p> Le volume total des investissements
                                                                                    en eau potable réalisé pour la
                                                                                    période de 2013 à 2017 est de 62,13
                                                                                    Mdhs réparti comme suit :</p>
                                                                                <div class="text-center">
                                                                                    <img src="img/EAU26.gif"
                                                                                        class="img-fluid mx-auto "
                                                                                        style="margin:5px; width:100%">
                                                                                    <img src="img/EAU27.gif"
                                                                                        class="img-fluid mx-auto "
                                                                                        style="margin:5px; width:100%">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img aos-init aos-animate"
                                                            data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                                                    </div>

                                                </div>
                                            </section>


                                        </ul>
                                    </div>


                                </div>
                                <div class="tab-pane fade " id="pills-third" role="tabpanel"
                                    aria-labelledby="pills-third-tab">
                                    <div class="row justify-content-center">
                                        <h2 class="text-center" style="color: rgb(155,187,89);">REALISATIONS D’ASSAINISSEMENT 2017</h2>
                                        <p>
                                            Les réalisations de l’année 2017 ont atteint un volume de 17,31 Mdhs,
                                            représentant
                                            40 % du budget de l’assainissement liquide qui est de 43,77 Mdhs. <br>
                                            Les investissements de l’assainissement liquide se présentent comme suit :
                                            <br>
                                        <div class="text-center py-4">
                                            <img src="img/A2.gif" class="img-fluid ">
                                        </div>
                                        <ul>

                                            <section id="why-us" class="why-us ">
                                                <div class="container-fluid aos-init aos-animate" data-aos="fade-up">
                                                    <div class="row">
                                                        <div class="justify-content-center align-items-stretch">
                                                            <div class="accordion-listPP">
                                                                <ul>
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-1"
                                                                            aria-expanded="false"><span>01</span> <h3 class=""
                                                                            style="display:inline-block; color:rgb(155,187,89);">  <u>Au
                                                                            niveau de la distribution</u> </h3><i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i></a>
                                                                        <div id="accordion-list-1" class="collapse"
                                                                            data-bs-parent=".accordion-listPP"
                                                                            style="">
                                                                            <p>Les études APD et DCE (Avant Projets
                                                                                Détaillés et Dossier de Consultation
                                                                                des
                                                                                Entreprises) des ouvrages
                                                                                d’assainissement liquide de la ville de
                                                                                Larache
                                                                                (Réseau d’interception et de transfert
                                                                                des eaux usées et la station
                                                                                d’épuration)
                                                                                : marché n° 01/A/2016 d’un montant de 1
                                                                                599 480,00 DH TTC.</p>
                                                                            <ol>
                                                                                <li style="color:gray;font-weight:bold;font-size:20px;">Pour la ville de LARACHE :</li>
                                                                                <p>
                                                                                    Les travaux de Réhabilitation et
                                                                                    renouvellement du réseau
                                                                                    d’assainissement
                                                                                    liquide à la ville de Larache : <br>
                                                                                    Dans le cadre des marchés
                                                                                    N°07/A/2016 et N°04/A/2017, la
                                                                                    RADEEL a
                                                                                    réalisé
                                                                                    les travaux de renouvellement du
                                                                                    réseau dans différentes zones de la
                                                                                    ville
                                                                                    de la Larache. Le montant des
                                                                                    travaux exécutés dans les deux
                                                                                    marchés
                                                                                    s’élève
                                                                                    à 7 711 214,04 DH TTC. La priorité a
                                                                                    été accordée aux zones prévues
                                                                                    par les
                                                                                    programmes de mise à niveau pilotée
                                                                                    par la province de Larache, de
                                                                                    l’INDH et
                                                                                    de revêtement de voiries par le
                                                                                    service municipal et la préfecture
                                                                                    de
                                                                                    Larache. <br>
                                                                                    Les travaux de ces deux marchés sont
                                                                                    illustrés dans le tableau
                                                                                    suivant :
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A3.png"
                                                                                        class="img-fluid"
                                                                                        style="width:100%"
                                                                                        alt="">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/A4.jpg"
                                                                                            alt="">
                                                                                        <img src="img/A5.jpg"
                                                                                            alt="">
                                                                                        <img src="img/A6.jpg"
                                                                                            alt="">
                                                                                        <img src="img/A7.gif"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>
                                                                                Linéaire du réseau in site par diamètre
                                                                                posé en 2017 :
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A8.png" class="img-fluid">
                                                                                </div>
                                                                                <h5
                                                                                    style="color:gray; padding:30px; font-weight:bold">
                                                                                    Liste des
                                                                                    quartiers
                                                                                    ciblés par le programme de
                                                                                    renouvellement :</h5>
                                                                                <ul>
                                                                                    <div class="bd-callout bd-callout-info">
                                                                                        <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>
                                                                                     Chaâbane.</br>
                                                                                     <i class="fa fa-check  me-3"
                                                                                     style="color:#285AEB;padding-left:20px;"></i> El Wafae.</br>
                                                                                     <i class="fa fa-check  me-3"
                                                                                     style="color:#285AEB;padding-left:20px;"></i> Rue de Fès.</br>
                                                                                     <i class="fa fa-check  me-3"
                                                                                     style="color:#285AEB;padding-left:20px;"></i> Place de libération.</br>
                                                                                     <i class="fa fa-check  me-3"
                                                                                     style="color:#285AEB;padding-left:20px;"></i>  Ancienne Médina.</br>
                                                                                     <i class="fa fa-check  me-3"
                                                                                     style="color:#285AEB;padding-left:20px;"></i>  Yaâkoub El Masour.</br>
                                                                                     <i class="fa fa-check  me-3"
                                                                                     style="color:#285AEB;padding-left:20px;"></i>   Zellaka.</br>
                                                                                     <i class="fa fa-check  me-3"
                                                                                     style="color:#285AEB;padding-left:20px;"></i>    Maghreb El Jadid.</p>
                                                                                </ul>
                                                                                <li style="color:gray; padding:10px; font-weight:bold;font-size:20px;"> Pour la ville de KSAR EL KEBIR</li>
                                                                                <p>En 2017, la RADEEL a continué la
                                                                                    réalisation, à la ville de Ksar El
                                                                                    Kebir,
                                                                                    des travaux d’équipement en réseau
                                                                                    d’assainissement des quartiers
                                                                                    non
                                                                                    assainis dans le cadre du programme
                                                                                    « Villes Sans Bidonvilles » et
                                                                                    les
                                                                                    travaux de renouvellement et
                                                                                    renforcement de réseau présentant
                                                                                    des
                                                                                    caractéristiques mécaniques et
                                                                                    hydrauliques médiocres.</p>
                                                                                <p>Suite aux réclamations des abonnés et
                                                                                    un diagnostic effectué par le
                                                                                    service
                                                                                    exploitation d’assainissement, la
                                                                                    RADEEL a procédé au renouvellement
                                                                                    de
                                                                                    certains collecteurs présentant des
                                                                                    caractéristiques mécaniques et
                                                                                    hydrauliques médiocres.</p>
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A9.png" class="img-fluid"
                                                                                        alt="">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/A10.gif "class="img-fluid"
                                                                                            alt="">
                                                                                        <img src="img/A11.png"class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <p style="color:gray;font-weight:bold">
                                                                                    LINEAIRE DU RESEAU IN SITE PAR
                                                                                    DIAMETRE :
                                                                                    <br>
                                                                                    <img src="img/A12.png"class="img-fluid"
                                                                                        alt="">
                                                                                <ul>
                                                                                    <h5>Liste des quartiers concernés :
                                                                                    </h5>
                                                                                    <div class="bd-callout bd-callout-info">
                                                                                        <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i> Hay Assalam,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Enasr,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Hay El Jadid,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Hay Lamnakib,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Lamrina,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Sellalin,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Ourouba,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Oulad Hmaid,</br>
                                                                                            <i class="fa fa-check  me-3"
                                                                                            style="color:#285AEB;padding-left:20px;"></i>Route de Larache (Hôpital
                                                                                        Poly-disciplinaire),</br>
                                                                                        <i class="fa fa-check  me-3"
                                                                                        style="color:#285AEB;padding-left:20px;"></i> Hay Enahda,</br>
                                                                                        <i class="fa fa-check  me-3"
                                                                                        style="color:#285AEB;padding-left:20px;"></i> Dar Doukhan,</br>
                                                                                        <i class="fa fa-check  me-3"
                                                                                        style="color:#285AEB;padding-left:20px;"></i>Gharssat Chaouche,</br>
                                                                                        <i class="fa fa-check  me-3"
                                                                                        style="color:#285AEB;padding-left:20px;"></i>Hay Al Massira Al Khadra,</br>
                                                                                        <i class="fa fa-check  me-3"
                                                                                        style="color:#285AEB;padding-left:20px;"></i>Jamae Assaida et Sadraoui.</br>
                                                                                </p>
                                                                                </ul>
                                                                               

                                                                                </p>
                                                                                <h5
                                                                                style="color:gray; padding:30px; font-weight:bold">
                                                                               Centre AOUAMRA :</h3>
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A13.jpg"
                                                                                        class="img-fluid mx-auto "
                                                                                        alt=""><img
                                                                                        src="img/A14.gif" class="img-fluid"
                                                                                        alt="">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/A15.png" class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <h5 style="color:gray; font-weight:bold">
                                                                                    LINEAIRE DU RESEAU IN SITE PAR
                                                                                    DIAMETRE
                                                                                    </h5>
                                                                                <div class="text-center ">
                                                                                    <img src="img/A16.gif"
                                                                                        class="img-fluid "
                                                                                        alt="">
                                                                                </div>
                                                                                <li style="color:gray; padding:10px; font-weight:bold;font-size:20px;"> Centre de KHMIS SAHEL :</li>
                                                                                <p>
                                                                                    Pour l’équipement de ce centre, la
                                                                                    RADEEL a posé un réseau
                                                                                    secondaire et
                                                                                    tertiaire qui se compose des
                                                                                    conduites de diamètres DN 500, DN
                                                                                    400,
                                                                                    DN 315.
                                                                                    <br>
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A17.png"
                                                                                        class="img-fluid "
                                                                                        alt="">
                                                                                </div>
                                                                                </p>
                                                                                <p
                                                                                    style="color:gray; font-weight:bold">
                                                                                    LINEAIRE DU RESEAU IN SITE PAR
                                                                                    DIAMETRE : <br>

                                                                                </p>
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A18.gif"
                                                                                        class="img-fluid "
                                                                                        style="width:30%"
                                                                                        alt="">
                                                                                    <img src="img/A19.jpg"
                                                                                        class="img-fluid "
                                                                                        style="width:30%"
                                                                                        alt="">
                                                                                </div>
                                                                            </ol>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            data-bs-target="#accordion-list-2"
                                                                            class="collapsed"
                                                                            aria-expanded="false"><span>02</span> <h3 class=""
                                                                            style="display:inline-block; color:rgb(155,187,89);"><u> Au
                                                                            niveau d’entretien et curage du réseau et
                                                                            ouvrages d’assainissement
                                                                            liquide </u></h3> <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i></a>
                                                                        <div id="accordion-list-2" class="collapse"
                                                                            data-bs-parent=".accordion-listPP"
                                                                            style="">
                                                                            <h5 style="color:gray; padding:20px; font-weight:bold">1-
                                                                                Travaux d’entretien des réseaux
                                                                                et
                                                                                ouvrages d’assainissement liquide </h5>
                                                                            <p>
                                                                                Dans le cadre du programme de traitement
                                                                                des réclamations et résolution
                                                                                des
                                                                                problèmes apparus sur le réseau et
                                                                                ouvrages d’assainissement liquide les
                                                                                équipes
                                                                                d’exploitation ont réalisé les travaux
                                                                                d’entretien suivants :
                                                                            <ul>
                                                                                <p> Pose du réseau d’assainissement de
                                                                                    DN 200 mm à DN 400 mm : 840 ml,
                                                                                </br>
                                                                               Construction des regards de visite
                                                                                    : 76 u,</br>
                                                                                 Construction des regards borgnes :
                                                                                    53 u</br>
                                                                                Mise à niveau des regards de visite
                                                                                    et bouches d’égout : 19 u,</br>
                                                                               Construction des bouches d’égout et
                                                                                    regard à grille : 43 u,</br>
                                                                                 Normalisation des branchements y
                                                                                    compris construction des regards
                                                                                    de façade
                                                                                    : 118 u</br>
                                                                                Traitement des affaissements :
                                                                                    environ 160 u.</br>

                                                                            </ul>
                                                                            <div>
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A21.jpg"
                                                                                        class="img-fluid "
                                                                                        style="width:30%"
                                                                                        alt="">
                                                                                    <img src="img/A22.jpg"
                                                                                        class="img-fluid "
                                                                                        style="width:30%"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            <h5 style="color:gray; padding:10px; font-weight:bold">
                                                                                2 Travaux de curage des réseaux
                                                                                d’assainissement liquide :</h5>
                                                                            <ul>
                                                                                <li>
                                                                                    <h6 style="color:gray; padding:5px; font-weight:bold"> Traitement des réclamations :
                                                                                    </h6>
                                                                                </li>
                                                                                <p>Les traitements réalisés par la
                                                                                    RADEEL ont engendré les travaux
                                                                                    suivants :
                                                                                </p>
                                                                                <ul>
                                                                                    <p> Vidange d’environ 150 fosses
                                                                                        septique,</br>
                                                                                   Débouchage hydraulique via les
                                                                                        hydro-cureuses : plus de 3 000
                                                                                        interventions</br>
                                                                                     Débouchage manuel via les
                                                                                        tringlettes : plus de 3 500 ml.
                                                                                   
                                                                                </ul>
                                                                                </p>
                                                                                <li style="color:gray; padding:5px; font-weight:bold"> Statistiques des travaux de curage
                                                                                    :</li>
                                                                                <p>Dans le cadre des travaux de
                                                                                    sous-traitance de curage des réseaux
                                                                                    d’assainissement liquide en 2017, la
                                                                                    RADEEL a réalisé :</p>

                                                                                <div>
                                                                                    <div class="text-center py-4">
                                                                                        <img src="img/A25.jpg" class="img-fluid"
                                                                                            alt="">
                                                                                        <img src="img/A26.gif" class="img-fluid"
                                                                                            style="height:300px; width:30% ; margin:5px;"
                                                                                            alt="">
                                                                                        <br>
                                                                                        <img src="img/A27.png" class="img-fluid"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>
                                                                            </ul>
                                                                            <p>
                                                                                En 2017, les travaux d’entretien et de
                                                                                curage préventif des réseaux et
                                                                                ouvrages
                                                                                d’assainissement liquide ont permet :

                                                                                · D’éviter les inondations (aux points
                                                                                noirs),
                                                                                · Faciliter l’écoulement des eaux usées,
                                                                                · Éliminer la pulvérisation des odeurs,
                                                                                · Traiter les réclamations avec
                                                                                efficacité,
                                                                                · Améliorer le service dédié aux
                                                                                clients.
                                                                            </p>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            data-bs-target="#accordion-list-3"
                                                                            class="collapsed"
                                                                            aria-expanded="false"><span>03</span>  <h3 class=""
                                                                            style="display:inline-block; color:rgb(155,187,89);"> <u>Au
                                                                            niveau des travaux avec participation</u> </h3><i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i></a>
                                                                        <div id="accordion-list-3" class="collapse"
                                                                            data-bs-parent=".accordion-listPP"
                                                                            style="">
                                                                            <ul>
                                                                                <p> Signature d’une convention de
                                                                                    financement entre la Régie et le
                                                                                    Ministère de
                                                                                    l’Intérieur pour l’équipement en
                                                                                    réseau d’assainissement liquide des
                                                                                    Quartiers Oulad Hmid et Blad Sarsri
                                                                                    à la ville de Ksar El Kébir.
                                                                                </p>
                                                                                <p>
                                                                                    La contribution en millions de
                                                                                    Dirhams des différents partenaires
                                                                                    est
                                                                                    détaillée comme suit : </p>
                                                                                <div class="text-center py-4">
                                                                                    <img src="img/A28.png" class="img-fluid"
                                                                                        alt="">
                                                                                </div>
                                                                               
                                                                                <p>Etudes et suivi des travaux
                                                                                    d’assainissement liquide des
                                                                                    lotissements MANAR
                                                                                    1 extension et MANAR III. Y compris
                                                                                    station de relevage des eaux
                                                                                    usées des
                                                                                    lotissements Manar 2 et Manar 3.
                                                                                </li>
                                                                            </ul>
                                                                            <p>
                                                                                Le tableau ci-dessous récapitule le
                                                                                linéaire du réseau posé par diamètre
                                                                                de
                                                                                conduite : <br>
                                                                            <div class="text-center py-4">
                                                                                <img src="img/A29.png" class="img-fluid" alt="">
                                                                            </div>
                                                                            <p>
                                                                            Le tableau ci-dessous récapitule ces
                                                                            réalisations :</p>
                                                                            <div class="text-center py-4">
                                                                                <img src="img/A30.png" class="img-fluid" alt="">
                                                                            </div>
                                                                        <p>Le volume total des investissements en
                                                                            assainissement réalisé pour la
                                                                            période de
                                                                            2013 à 2017 est de 72,39 Mdhs réparti comme
                                                                            suit :</p>
                                                                            <div class="text-center py-4">
                                                                                <img src="img/A31.gif" class="img-fluid" alt="">
                                                                            </div>
                                                                            </p>
                                                                </ul>
                                                            </div>
                                                            </li>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img aos-init aos-animate"
                                                        data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                                                </div>

                                    </div>
                                    </section>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

     {{-- footer --}}
     <div class="container-fluid footer wow fadeIn" data-wow-delay=".3s" style="background: #077ec0;">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="{{ url('../') }}" class="navbar-brand">
                        <img src="https://www.radeel.ma/images/radeel-logo-1x1.png"
                            style="height: 130px; width=90px;">
                    </a>
                    <p class="mt-4 text-light">
                        La régie autonome intercommunale de distribution d’eau et d’électricité de la Province de
                        Larache</p>
                    <div class="d-flex hightech-link">
                        <a href="https://www.facebook.com/RADEEL.Officiel/"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2">
                            <i class="fab fa-facebook-f " style="color:#077ec0;"></i></a>
                        <a href="https://twitter.com/RADEELOfficiel/status/1756352376523407617"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2">
                            <i class="fab fa-twitter " style="color:#077ec0;"></i></a>
                        <a href="https://www.instagram.com/p/CwSqgxHOC6d/"
                            class="btn-light nav-fill btn btn-square rounded-circle me-2">
                            <i class="fab fa-instagram " style="color:#077ec0;"></i></a>
                        <a href="https://ma.linkedin.com/company/radeelofficiel"
                            class="btn-light nav-fill btn btn-square rounded-circle me-0">
                            <i class="fab fa-linkedin-in " style="color:#077ec0;"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-white">Pages </a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="{{ url('../') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color: white;"></i>RADEEL</a>
                        <a href="{{ url('../') }}#contact" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color: white;"></i>Contact</a>
                        <a href="{{ url('../Abonnement') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color:white;"></i>Espaces
                            clients</a>
                        <a href="{{ url('../loi') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text- me-2" style="color: white;"></i>Espaces RH</a>
                        <a href="{{ url('../ResultatOffre') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color: white;"></i>Fournisseurs</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ url('../') }}" class="h3 text-white">Liens utiles</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="{{ url('../') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color:white;"></i>Mentions
                            légales</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="index.php #contactID" class="h3 text-white">Contacter nous</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="https://www.google.com/maps/dir/35.1801715,-6.1420956/radeel/@35.1734126,-6.150075,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0xd0bc947c5cd4efd:0x39b8205ae5d8018d!2m2!1d-6.141061!2d35.1677008?entry=ttu"
                            class="pb-3 text-light border-bottom border-white"><i
                                class="fas fa-map-marker-alt text me-2" style="background: #077ec0;"></i>N, BP:11,
                            1647 Lotisment larache</a>
                        <a href="tel:08 01 00 00 42" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-phone-alt text me-2" style="background: #077ec0;"></i>0801 000 042 </a>
                        <a href="tel:05 53 95 20 25" class="py-3 text-light border-bottom border-white">
                            <i class="fas fa-fax" class="fas fa-phone-alt text me-2"
                                style="background: #077ec0;"></i>
                            +212.539.52.03.25</a>
                        <a href="mailto:reclamation@radeel.com" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-envelope text me-2" style="background: #077ec0;"></i>
                            reclamation@radeel.com</a>
                        <a href="#" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-home text me-2" style="background: #077ec0;"></i>Lun-Ven 8:00 -
                            16:30</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-center"><i
                        class="fas fa-copyright ">
                        Copyright @2023</i></a>, All right reserved by Radeel</span>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!-- jQuery -->

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
        jQuery(document).ready(function() {
            $('#modalIndex').modal('show')
        });
    </script>

</body>

</html>
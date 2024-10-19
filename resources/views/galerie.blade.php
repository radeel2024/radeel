<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Radeel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .news,
        .related-news {
            background: var(--section-bg-color);
        }

        .news-thumb {
            position: relative;
        }

        .news-category {
            background: var(--white-color);
            position: absolute;
            z-index: 9;
            top: 0;
            left: 0;
            padding: 4px 12px;
            display: inline-block;
        }

        .news-text-info {
            margin: 0 20px;
        }

        .news-title {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .news-title-link {
            color: var(--title-color);
            display: inline-block;
        }

        .news-title-link:hover {
            color: var(--dark-color);
        }

        .portfolio-image,
        .news-image {
            display: block;
            transition: transform 0.6s ease-out;
        }

        .news-image-hover {
            display: inline-block;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all .3s cubic-bezier(.645, .045, .355, 1);
            padding-bottom: 4px;
            height: 100%;
            cursor: pointer;
        }

        .news-image-hover::after {
            content: "";
            width: 0;
            height: 4px;
            bottom: 0;
            position: absolute;
            left: auto;
            right: 0;
            z-index: -1;
            transition: width .6s cubic-bezier(.25, .8, .25, 1) 0s;
            background: #198754;

        }

        .news-image-hover-warning::after {
            background: rgb(155, 187, 89);
            ;
        }

        .news-image-hover-w::after {
            background: #D1801D;
        }

        .news-image-hover-primary::after {
            background: #0d6efd;
        }

        .news-image-hover-dangereux::after {
            background: red;
            color: red;
        }

        .news-image-hover:hover::after {
            width: 100%;
            left: 0;
            right: auto;
            z-index: 9;
        }

        .image-popup:hover .portfolio-image,
        .news-image-hover:hover .news-image {
            transform: scale(1.02);
        }

        .news-two-column {
            min-height: 199px;
            margin-bottom: 16px;
        }

        .news-two-column .news-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/cove4.png) center center no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
        }

        .nav-item.dropdown>a::after {
            display: none !important;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }



        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }


        .site-section {
            padding: 2.5em 0;
        }

        @media (min-width: 768px) {
            .site-section {
                padding: 5em 0;
            }
        }

        .site-section.site-section-sm {
            padding: 4em 0;
        }

        .site-section-heading {
            padding-bottom: 20px;
            margin-bottom: 0px;
            position: relative;
            font-size: 28px;
        }

        @media (min-width: 768px) {
            .site-section-heading {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid  py-2 d-none d-md-flex" style="background: #077ec0;">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div id="note" class="text-secondary d-none d-xl-flex text-white">
                    <small><a href="tel:0801000042" style="color:white;text-decoration: none;">NOUS SOMMES OUVERT DE
                            8:00 A 16:30 </a></small>
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
                        <i class="fab fa-instagram" style="color: #077ec0; font-weight: bold;"></i>
                    </a>&nbsp;&nbsp;
                    <a href="https://ma.linkedin.com/company/radeelofficiel"
                        class="bg-light nav-fill btn btn-sm-square rounded-circle me-0">
                        <i class="fab fa-linkedin-in" style="color: #077ec0;"></i></a>&nbsp;&nbsp;
                    <a href="tel:0801000042" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0">
                        <i class="fas fa-headset" style="color: #077ec0; font-weight: bold;"></i></a>
                </div>
            </div>
        </div>
    </div>

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
                    <img src="https://www.radeel.ma/images/radeel-logo-1x1.png" style="height: 130px;">
                </a>
            </div>
            <nav id="navbarNav navbar-expand-sm " class="navbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('../') }}">ACCUEIL</a></li>
                    <li class="dropdown"><a href="{{ url('../') }}"><span>RADEEL</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../Quisommenous') }}" class="dropdown-item">Qui sommes-nous</a></li>
                            <li><a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur
                                    Général</a></li>
                            <li><a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Organigramme de la
                                    RADEEL</a>
                            </li>
                            <li><a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités </a></li>
                            <li><a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>ESPACE CLIENT</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../paiement') }}" class="dropdown-item">Paiement en
                                    ligne</strong></a></li>
                            <li><a href="{{ url('../Abonnement') }}" class="dropdown-item">Particulier</a></li>
                            <li><a href="{{ url('../GrosAbonnee') }}" class="dropdown-item">Gros client </a></li>
                            <li><a href="{{ url('../reclamation') }}" class="dropdown-item">Réclamation</a></li>
                            <li><a href="{{ url('../Autre') }}" class="dropdown-item">Guide client </a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>ESPACE RH</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a></li>
                            <li><a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi
                                </a>
                            </li>
                            <li><a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages </a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>FOURNISSEURS</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li><a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </li>
                            <li><a href="{{ url('../Reglement') }}" class="dropdown-item"> Réglement des marchés
                                    publics </a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="active"><span>PRATIQUE</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a>
                            </li>
                            <li><a href="{{ url('../galerie') }}" class="dropdown-item">Galerie / Audiovisual</a>
                            </li>
                            <li><a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a></li>
                            <li><a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('../stress') }}#contact"> STRESS HYDRIQUE </a></li>
                    <li><a class="nav-link scrollto" href="{{ url('../') }}#contact"> CONTACT </a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;


                </ul>
            </nav>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Galerie
                R.A.D.E.E.L
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <style>
        .nav-item.active a {
            background-color: red
                /* Votre couleur préférée */
            ;
            border-color: red
                /* Couleur de la bordure */
            ;
            color: white
                /* Couleur du texte */
            ;
        }

        #nav-link-1 .active {
            color: #fff;
            background-color: #fbc02d;
            border-color: transparent;
            box-shadow: 0 1px 9px 0 rgb(251 192 45 / 50%);
        }

        #nav-link-2 .active {
            color: #fff;
            background-color: #004b82;
            box-shadow: 0 12px 5px -10px rgb(33 150 243 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }

        #nav-link-3 .active {
            color: #fff;
            background-color: #009331;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }

        #nav-link-3 a {
            color: #009331;
            background-color: #fff;
            padding: 30px;
            font-size: 19px;
            margin: 20px;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }

        #nav-link-2 a {
            color: #285AEB;
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
    </style>

    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item" id="nav-link-3">
                        <a class="d-flex mx-3 py-2   rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                            <span style="width: 150px;">Nos Evénement</span>
                        </a>
                    </li>
                    <li class="nav-item" id="nav-link-1">
                        <a class="d-flex py-2 mx-3     rounded-pill" data-bs-toggle="pill" href="#tab-2">
                            <span style="width: 150px;">Nos Formation</span>
                        </a>
                    </li>
                    <li class="nav-item" id="nav-link-2">
                        <a class="d-flex mx-3 py-2   rounded-pill" data-bs-toggle="pill" href="#tab-3">
                            <span style="width: 150px;">Nos Realisation</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div id="tab-1" class="tab-pane show p-0 active">
                        <div class="row g-4">

                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[1]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[1]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[2]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[2]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[3]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[3]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[4]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[4]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[5]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[5]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[6]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[6]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[7]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[7]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[8]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[8]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[9]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[9]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[10]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[10]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[11]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[11]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[12]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[12]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[13]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[13]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[14]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[14]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                        data-src="{{ asset('albume/' . $galerie[15]->image) }}">
                                        <img src="{{ asset('albume/' . $galerie[15]->image) }}" class="img-fluid"
                                            width="100%" style="height: 350px;">
                                    </a>
                                </div>
                            </div>
                            <!-- desplay the image that selected -->
                            <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="modalImage2" src="" class="img-fluid" alt="Selected Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- JavaScript to handle image click and modal display -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var imageModal = document.getElementById('imageModal2');
                                    imageModal.addEventListener('show.bs.modal', function (event) {
                                        var button = event.relatedTarget;
                                        var imageSrc = button.getAttribute('data-src');
                                        var modalImage = document.getElementById('modalImage2');
                                        modalImage.src = imageSrc;
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">

                            @foreach($galerie as $index => $album)
                                @if($index >= 16)
                                    <div class="col-md-6 col-lg-4 ">
                                        <div class="service-item rounded overflow-hidden">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                                                data-src="{{ asset('albume/' . $album->image) }}">
                                                <img src="{{ asset('albume/' . $album->image) }}" class="img-fluid" width="100%"
                                                    style="height: 400px;">
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <!-- desplay the image that selected -->
                            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="modalImage" src="" class="img-fluid" alt="Selected Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- JavaScript to handle image click and modal display -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var imageModal = document.getElementById('imageModal');
                                    imageModal.addEventListener('show.bs.modal', function (event) {
                                        var button = event.relatedTarget;
                                        var imageSrc = button.getAttribute('data-src');
                                        var modalImage = document.getElementById('modalImage');
                                        modalImage.src = imageSrc;
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/HDWeC-onfvk">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/Dds_t1rd_lw">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/ZBhxo76NDgw">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/GxkeZbX3xmc">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/IDfIr4jnP5s">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/NpXv5g4BMSI">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/iUs7NN9Qx4s">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/zLvQZ0MGPyw">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/YXJTb0oST_M">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/yDcXXlltvzw">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/E3nUr_5H2eo">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/R5Nv9G0Q86g">
                                    </iframe>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/BVfTACQBqIk">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/fPFAjpdyB_s">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/q7iODUb4ZTU">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/4hxZGWISi2w">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/QvrcPnfL82g">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/gBv0-oOa9tY">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded overflow-hidden">
                                    <iframe width="420" height="315" src="https://www.youtube.com/embed/h6tq0xp_ZBs">
                                    </iframe>
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
                        <img src="https://www.radeel.ma/images/radeel-logo-1x1.png" style="height: 130px; width=90px;">
                    </a>
                    <p class="mt-4 text-light">
                        La régie autonome intercommunale de distribution d’eau et d’électricité de la Province de
                        Larache</p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-white">Pages </a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="{{ url('../') }}" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="color: white;"></i>RADEEL</a>
                        <a href="{{ url('../') }}#contact" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color: white;"></i>Contact</a>
                        <a href="{{ url('../Abonnement') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color:white;"></i>Espaces
                            clients</a>
                        <a href="{{ url('../Avis recrutement') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text- me-2" style="color: white;"></i>Espaces RH</a>
                        <a href="{{ url('../programme') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color: white;"></i>Fournisseurs</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ url('../') }}" class="h3 text-white">Liens utiles</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="{{ url('../ActiviteRadeel') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color:white;"></i>
                            Activité RADEEL</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ url('../') }}#contact" class="h3 text-white">Contacter nous</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="https://www.google.com/maps/dir/35.1801715,-6.1420956/radeel/@35.1734126,-6.150075,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0xd0bc947c5cd4efd:0x39b8205ae5d8018d!2m2!1d-6.141061!2d35.1677008?entry=ttu"
                            class="pb-3 text-light border-bottom border-white"><i
                                class="fas fa-map-marker-alt text me-2"></i>1647, Lotissement Maghreb Al jadid B.P : 11; 92000 Larache                                </a>
                        <a href="tel:08 01 00 00 42" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-phone-alt text me-2"></i> 0801 000 042 </a>
                        <a href="tel:05 53 95 20 25" class="py-3 text-light border-bottom border-white">
                            <i class="fas fa-fax" class="fas fa-phone-alt text me-2"></i>
                            +212.539.52.09.25</a>
                        <a href="mailto:reclamation@radeel.com" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-envelope text me-2"></i>
                            reclamation@radeel.ma</a>
                        <a href="#" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-home text me-2"></i>Lun-Ven 8:00 -
                            16:30</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 ">
                    <a href="#" class="text-center   text-light"><i class="fas fa-copyright ">
                            Copyright @2024</i></a>,<SPAN class=" text-light"> All right reserved by Radeel</span>
                </div>
            </div>
        </div>
    </div>





    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66bdd8330cca4f8a7a765886/1i5ap9252';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


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
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



</body>

</html>
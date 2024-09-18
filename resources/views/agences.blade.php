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
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(https://i.ibb.co/PZjP8dD/head.png) center center no-repeat;
            background-size: cover;
            width: 100%;
        }

        .nav-item.dropdown>a::after {
            display: none;
        }

        .wrapper {
            height: 60px;
            width: 100%;
            background: #fff;
            line-height: 60px;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
        }

        .wrapper nav {
            position: relative;
            display: flex;
        }

        .wrapper nav label {
            flex: 1;
            width: 100%;
            z-index: 1;
            cursor: pointer;
        }

        .wrapper nav label a {
            position: relative;
            z-index: -1;
            color: #1d1f20;
            font-size: 20px;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.6s ease;
        }

        .wrapper nav #home:checked~label.home a,
        .wrapper nav #inbox:checked~label.inbox a,
        .wrapper nav #contact:checked~label.contact a,
        {
        color: #fff;
        }

        .wrapper nav label a i {
            font-size: 25px;
            margin: 0 7px;
        }

        .wrapper nav .tab {
            position: absolute;
            height: 100%;
            width: 20%;
            left: 0;
            bottom: 0;
            z-index: 0;
            border-radius: 50px;
            background: linear-gradient(45deg, #05abe0 0%, #8200f4 100%);
            transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper nav #inbox:checked~.tab {
            left: 30%;
        }

        .wrapper nav #contact:checked~.tab {
            left: 60%;
        }



        .wrapper nav input {
            display: none;
        }

        /*** Section Title Start ***/
    </style>
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

        .news-image-hover-open::after {
            background-color: #36F446;
            color: red;
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
</head>

<body>
    <div class="container-fluid  py-2 d-none d-md-flex" style="background: #077ec0;font-size:18px; font-family:'arial'">
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

        .navbar li {
            position: relative;
            color: black;
            font-size: 22;
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
                    <li class="dropdown"><a class="nav-link active"><span>RADEEL</span> <i
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
                            <!--  <li><a href="{{ url('../loi') }}" class="dropdown-item">Loi cadre</a></li> -->
                            <li><a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Avis de
                                    recrutement</a></li>
                            <li><a href="{{ url('../stage') }}" class="dropdown-item">Stages </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>FOURNISSEURS</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <!--  <li><a href=" {{ url('../AppelOffre') }}" class="dropdown-item">Avis des appels
                                    d'offres</a></li>
                            <li><a href="{{ url('../ResultatOffre') }}" class="dropdown-item">Résultat d'appels
                                    d'offres</a></li> -->
                            <li><a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </li>
                            <li><a href="{{ url('../Reglement') }}" class="dropdown-item"> Réglement des marchés
                                    publics </a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>PRATIQUE</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a>
                            </li>
                            <li><a href="{{ url('../galerie') }}" class="dropdown-item">Galerie / Audiovisual</a>
                            </li>
                            <li><a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a></li>
                            <li><a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a></li>

                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="{{ url('../') }}#contact">CONTACT</a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="dropdown">
                        <strong>Fr</strong>
                        <ul>
                            <li>
                                <a href="#" class="dropdown-item">
                                    Fr
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">
                                    Ar
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Nos Agences</h1>
        </div>
    </div>
    <!-- Agence LaakSAR KBIR -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="" style="color:#077ec0; ">Agences commerciales Larache : </h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+Centrale+RADEEL/@35.1949436,-6.1486976,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc8d6963947b3:0x31f7172908884126!8m2!3d35.1949392!4d-6.1465089"
                    data-bs-target="#mapsModel1">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-primary">
                        <div
                            style="position:absolute;top:0px; left:0px; color:white; padding:10px; border-radius: 10px 50px 30px 5px;height: 100px;">
                        </div>
                        <!--  <img class="img-fluid" src="https://i.ibb.co/PZjP8dD/head.png" style="height: 200px; margin-bottom:20px;"> -->
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color:#077ec0 ;">Agence centrale</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="COLOR: #077ec0;"></i>1, rue
                                oujda<br>
                                <i class="fas fa-clock" style="COLOR: #077ec0;"></i> Lun-Ven 8:00 - 16:30
                                <br>
                                <!--   <i class="fas fa-clock" style="COLOR:white"></i> <span style="font-weight: bold; color:#36F446;">Samedi 8:00 - 12:30</span> -->
                                <!-- <i class="fas fa-phone-alt text me-2" style="COLOR: #077ec0;"></i>0801 000 042 <br>
                                <i class="fas fa-envelope text me-2" style="COLOR: #077ec0;"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-bs-toggle="modal" data-src=""
                    data-bs-target="#mapsModel">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-primary">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color:#077ec0">Agence siége</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="COLOR: #077ec0;"></i>Agence
                                siége<br>
                                <i class="fas fa-clock" style="COLOR: #077ec0;"></i> Lun-Ven 8:00 -
                                16:30 <br>
                                <!-- <i class=
                                 <i
                                class="fas fa-home text me-2"></i>Lun-Ven 8:00 -
                            16:30"fas fa-phone-alt text me-2" style="COLOR: #077ec0;"></i>0801 000 042 <br>
                                <i class="fas fa-envelope text me-2" style="COLOR: #077ec0;"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel2">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-primary">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color:#077ec0">Agence Assalam</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="COLOR: #077ec0;"></i>Lotissement
                                Assalam<br>
                                <i class="fas fa-clock" style="COLOR: #077ec0;"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="COLOR: #077ec0;"></i>0801 000 042 <br>
                                <i class="fas fa-envelope text me-2" style="COLOR: #077ec0;"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel3">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-primary">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color:#077ec0">Agence smara</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="COLOR: #077ec0;"></i>Lotissement
                                smara<br>
                                <i class="fas fa-clock" style="COLOR: #077ec0;"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="COLOR: #077ec0;"></i>0801 000 042 <br>
                                <i class="fas fa-envelope text me-2" style="COLOR: #077ec0;"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

        </div>
    </div>
    <!-- Agence Ksar EL KEBIR -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="" style="color: rgb(155,187,89);  ">Agences commerciales Ksar EL KEBIR : </h1>

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel4">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-warning">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: rgb(155,187,89);">Agence centrale</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="color: rgb(155,187,89);"></i>Route
                                de
                                Rabat<br>
                                <i class="fas fa-clock" style="color: rgb(155,187,89);"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: rgb(155,187,89);"></i>0801 000 042
                                <br>
                                <i class="fas fa-envelope text me-2" style="color: rgb(155,187,89);"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel5">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-warning">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: rgb(155,187,89);">Agence Attallah</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2"
                                    style="color: rgb(155,187,89);"></i>Lotissement Attallah<br>
                                <i class="fas fa-clock" style="color: rgb(155,187,89);"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: rgb(155,187,89);"></i>0801 000 042
                                <br>
                                <i class="fas fa-envelope text me-2" style="color: rgb(155,187,89);"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel6">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-warning">
                        <!--    <div style="position:absolute;top:0px; left:0px; background-color:red; color:white; padding:10px; border-radius: 10px 50px 30px 5px;">  <span>Open</span></div> -->
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: rgb(155,187,89);">Agence Assalam</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2"
                                    style="color: rgb(155,187,89);"></i>Lotissement Bouchouika<br>
                                <i class="fas fa-clock" style="color: rgb(155,187,89);"></i> Lun-Ven 8:00 -
                                16:30 <br>
                                <i class="fas fa-clock" style="COLOR:white"></i>
                                <!-- <span style="font-weight: bold; color:red;">Samedi 8:00 - 12:30</span> -->
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: rgb(155,187,89);"></i>0801 000 042
                                <br>
                                <i class="fas fa-envelope text me-2" style="color: rgb(155,187,89);"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>



            </div>
            <br><br>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel7">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-warning">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: rgb(155,187,89);D1801D">Agence Oulad Hmaid </h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="color: rgb(155,187,89);"></i>Agence
                                Oulad
                                Hmaid <br>
                                <i class="fas fa-clock" style="color: rgb(155,187,89);"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: rgb(155,187,89);"></i>0801 000 042
                                <br>
                                <i class="fas fa-envelope text me-2" style="color: rgb(155,187,89);"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel8">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-warning">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: rgb(155,187,89);">Agence Ourouba </h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="color: rgb(155,187,89);"></i>Agence
                                Ourouba<br>
                                <i class="fas fa-clock" style="color: rgb(155,187,89);"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: rgb(155,187,89);"></i>0801 000 042
                                <br>
                                <i class="fas fa-envelope text me-2" style="color: rgb(155,187,89);"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- Agences commerciales centres ruraux:  -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="" style="color: #D1801D ">Agences commerciales centres ruraux: </h1>

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel9">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-w">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: #D1801D">Agence Khémis SAHEL</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="color: #D1801D"></i>Route nationale
                                vers Tanger-Tétouan<br>
                                <i class="fas fa-clock" style="color: #D1801D"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: #D1801D"></i>0801 000 042 <br>
                                <i class="fas fa-envelope text me-2" style="color: #D1801D"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel10">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-w">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: #D1801D">Agence Aouamra</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="color: #D1801D"></i>Route nationale
                                Larache vers Ksar EL KEBIR<br>
                                <i class="fas fa-clock" style="color: #D1801D"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: #D1801D"></i>0801 000 042 <br>
                                <i class="fas fa-envelope text me-2" style="color: #D1801D"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/place/Agence+RADEEL+Salam/@35.1798363,-6.1423173,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc93ace23d6cf:0x59c3e42c0a1f6194!8m2!3d35.1798319!4d-6.1401286"
                    data-bs-target="#mapsModel11">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-w">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color: #D1801D"> Ksar BJIR</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="color: #D1801D"></i> Ksar BJIR<br>
                                <i class="fas fa-clock" style="color: #D1801D"></i> Lun-Ven 8:00 -
                                16:30
                                <!-- <i class="fas fa-phone-alt text me-2" style="color: #D1801D"></i>0801 000 042 <br>
                                <i class="fas fa-envelope text me-2" style="color: #D1801D;"></i>
                                reclamation@radeel.com -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>

    {{-- model larache --}}
    <div class="modal mapsModel fade" id="mapsModel" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">
                        <iframe height="400px;" width="100%;" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=RADEEL,%20N,%20BP:11,%201647%20Lotissement,%20Larache+(larche%20radeel)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.maps.ie/population/">Population mapping</a></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal mapsModel fade" id="mapsModel1" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">

                        <iframe class="embed-responsive-item" width="100%" style="height: 100%"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.466584646334!2d-6.1490695237579!3d35.1948452565385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bc8d6963947b3%3A0x31f7172908884126!2sAgence%20Centrale%20RADEEL!5e0!3m2!1sfr!2sma!4v1708418667997!5m2!1sfr!2sma"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal mapsModel fade" id="mapsModel2" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">


                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.069033974693!2d-6.140128600000001!3d35.179831899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bc93ace23d6cf%3A0x59c3e42c0a1f6194!2sAgence%20RADEEL%20Salam!5e0!3m2!1sfr!2sma!4v1708419134742!5m2!1sfr!2sma"
                            style="border:0;" allowfullscreen="" loading="lazy" width="100%" style="height: 100%"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal mapsModel fade" id="mapsModel3" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.768189546942!2d-6.1528118!3d35.18732979999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bced4d166bced%3A0x6d750205333b0003!2sAgence%20RADEEL%20Smara!5e0!3m2!1sfr!2sma!4v1708418954159!5m2!1sfr!2sma"
                            width="100%" style="height: 100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- model laksar --}}
    <div class="modal mapsModel fade" id="mapsModel4" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">
                        <iframe width="100%" style="height: 100%"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3268.533980745791!2d-5.904061780426024!3d34.99333597926731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0a4df9de057b19%3A0x9561f12ef92b8cca!2sAgence%20Centrale%20RADEEL%20Ksar%20El%20K%C3%A9bir!5e0!3m2!1sfr!2sma!4v1708420046795!5m2!1sfr!2sma"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel5" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">
                        <h3 class="text-center">Lotissement Attallah </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel6" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">
                        <h3 class="text-center">Lotissement Bouchouika </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel7" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">

                        <h3 class="text-center">Oulad Hmaid </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel8" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">

                        <h3 class="text-center">Hay Ourouba</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- model rural --}}
    <div class="modal mapsModel fade" id="mapsModel9" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">
                        <h3 class="text-center">Agence Khémis SAHEL </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel10" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">
                        <h3 class="text-center">Agence Aouamra </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel11" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <div id="map" style="height: 400px; width: 100%;">
                        <h3 class="text-center">Ksar BJIR </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Footer Start -->
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
                        <a href="{{ url('../') }}" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="color: white;"></i>RADEEL</a>
                        <a href="{{ url('../') }}#contact" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color: white;"></i>Contact</a>
                        <a href="{{ url('../Abonnement') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text me-2" style="color:white;"></i>Espaces
                            clients</a>
                        <a href="{{ url('../loi') }}" class="mb-2 text-white"><i class="fas fa-angle-right text- me-2"
                                style="color: white;"></i>Espaces RH</a>
                        <a href="{{ url('../ResultatOffre') }}" class="mb-2 text-white"><i
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
                    <a href="index.php #contactID" class="h3 text-white">Contacter nous</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="https://www.google.com/maps/dir/35.1801715,-6.1420956/radeel/@35.1734126,-6.150075,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0xd0bc947c5cd4efd:0x39b8205ae5d8018d!2m2!1d-6.141061!2d35.1677008?entry=ttu"
                            class="pb-3 text-light border-bottom border-white"><i
                                class="fas fa-map-marker-alt text me-2"></i>N, BP:11,
                            1647 Lotisment larache</a>
                        <a href="tel:08 01 00 00 42" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-phone-alt text me-2"></i>0801 000 042 </a>
                        <a href="tel:05 53 95 20 25" class="py-3 text-light border-bottom border-white">
                            <i class="fas fa-fax" class="fas fa-phone-alt text me-2"></i>
                            +212.539.52.03.25</a>
                        <a href="mailto:reclamation@radeel.com" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-envelope text me-2"></i>
                            reclamation@radeel.com</a>
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
                            Copyright @2023</i></a>,<SPAN class=" text-light"> All right reserved by Radeel</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

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


    <script>
        jQuery(document).ready(function () {
            $('#modalIndex').modal('show')
        });
    </script> <!-- Footer End -->

</body>

</html>
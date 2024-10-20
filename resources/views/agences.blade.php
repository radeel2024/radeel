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
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/cover1.png) center center no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
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
            background: #077ec0;
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
    <!-- end Spinner Start -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">

                <a href="{{ url('../') }}" class="navbar-brand " id="logo">
                    <img src="img/logo2.png" style="height: 50px; width:50px;">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class=" navbar-nav  ms-auto">
                        <a href="{{ url('../') }}" class="nav-item ">ACCUEIL</a>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle active"
                                data-bs-toggle="dropdown">RADEEL</a>
                            <div class="dropdown-menu bg-white ">
                                <a href="{{ url('../Quisommenous') }}" class="dropdown-item">Qui sommes-nous</a>
                                <a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur</a>
                                <a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Organigramme de la
                                    RADEEL</a>
                                <a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités</a>
                                <a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">ESPACE
                                CLIENT</a>
                            <div class="dropdown-menu bg-white ">
                                <a href="{{ url('../paiement') }}" class="dropdown-item">Paiement en
                                    ligne</a>
                                <a href="{{ url('../Abonnement') }}" class="dropdown-item">Particulier</a>
                                <a href="{{ url('../GrosAbonnee') }}" class="dropdown-item">Grand client </a>
                                <a href="{{ url('../reclamation') }}" class="dropdown-item">Réclamation</a>
                                <a href="{{ url('../Autre') }}" class="dropdown-item">Guide client</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">ESPACE
                                RH</a>
                            <div class="dropdown-menu bg-white ">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle"
                                data-bs-toggle="dropdown">FOURNISSEURS</a>
                            <div class="dropdown-menu bg-white ">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle"
                                data-bs-toggle="dropdown">PRATIQUE</a>
                            <div class="dropdown-menu bg-white ">
                                <a href="{{ url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a>
                                <a href="{{ url('../stress') }}" class="dropdown-item">Stress Hydrique </a>
                                <a href="{{ url('../galerie') }}" class="dropdown-item">Galerie / Audiovisual</a>
                                <a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a>
                                <a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a>
                            </div>
                        </div>

                        <a href="{{ url('../') }}#contact" class="nav-item ">CONTACT</a>
                    </div>
                </div>
        </div>
        </nav>
    </div>
    </div>
    <!-- Navbar End -->


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
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color:#077ec0 ;">Agence centrale</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="COLOR: #077ec0;"></i>1, rue
                                oujda<br>
                                <i class="fas fa-clock" style="COLOR: #077ec0;"></i> Lun-Ven 8:00 - 16:30
                                <br>
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

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.1s"
                    data-bs-toggle="modal"
                    data-src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d709.4075679204839!2d-6.149121674453165!3d35.172302264813005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xd0bc9a222474085%3A0x6861ec4110526946!2sBahnini%20Larache%20Center!3m2!1d35.172473499999995!2d-6.149575!4m5!1s0xd0bc9a222474085%3A0x6861ec4110526946!2s5VC2%2BX56%20Bahnini%20Larache%20Center%2C%20Larache!3m2!1d35.172473499999995!2d-6.149575!5e1!3m2!1sen!2sma!4v1728996476425!5m2!1sen!2sma"
                    data-bs-target="#mapsModel2">
                    <div class="service-item rounded overflow-hidden news-image-hover news-image-hover-primary">
                        <div class="position-relative p-4 pt-0">
                            <h5 class="card-title" style="color:#077ec0">Agence Bahnini</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text me-2" style="COLOR: #077ec0;"></i>Lotissement
                                El wafa<br>
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
                <h1 class="" style="color: rgb(155,187,89);  ">Agences commerciales Ksar Kbir : </h1>

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
                            <h5 class="card-title" style="color: rgb(155,187,89);">Agence Oulad Hmaid </h5>
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
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=RADEEL,%20N,%20BP:11,%201647%20Lotissement,%20Larache+(larche%20radeel)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
             
            </div>
        </div>
    </div>

    <div class="modal mapsModel fade" id="mapsModel1" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.466584646334!2d-6.1490695237579!3d35.1948452565385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bc8d6963947b3%3A0x31f7172908884126!2sAgence%20Centrale%20RADEEL!5e0!3m2!1sfr!2sma!4v1708418667997!5m2!1sfr!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
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
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d709.4075679204839!2d-6.149121674453165!3d35.172302264813005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xd0bc9a222474085%3A0x6861ec4110526946!2sBahnini%20Larache%20Center!3m2!1d35.172473499999995!2d-6.149575!4m5!1s0xd0bc9a222474085%3A0x6861ec4110526946!2s5VC2%2BX56%20Bahnini%20Larache%20Center%2C%20Larache!3m2!1d35.172473499999995!2d-6.149575!5e1!3m2!1sen!2sma!4v1728996476425!5m2!1sen!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
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
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.768189546942!2d-6.1528118!3d35.18732979999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bced4d166bced%3A0x6d750205333b0003!2sAgence%20RADEEL%20Smara!5e0!3m2!1sfr!2sma!4v1708418954159!5m2!1sfr!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
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
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3268.533980745791!2d-5.904061780426024!3d34.99333597926731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0a4df9de057b19%3A0x9561f12ef92b8cca!2sAgence%20Centrale%20RADEEL%20Ksar%20El%20K%C3%A9bir!5e0!3m2!1sfr!2sma!4v1708420046795!5m2!1sfr!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
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
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1634.1697288451242!2d-5.893602780522328!3d34.99820672067712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzTCsDU5JzUzLjciTiA1wrA1MyczMy4xIlc!5e0!3m2!1sfr!2sma!4v1729332748241!5m2!1sfr!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel6" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3268.136901729213!2d-5.91312242424228!3d35.00327797281373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDAwJzExLjgiTiA1wrA1NCczOC4wIlc!5e0!3m2!1sfr!2sma!4v1729333252438!5m2!1sfr!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel7" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3267.650926885701!2d-5.913544324241716!3d35.01544237280949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDAwJzU1LjYiTiA1wrA1NCczOS41Ilc!5e0!3m2!1sfr!2sma!4v1729333329084!5m2!1sfr!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal mapsModel fade" id="mapsModel8" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3268.1632449275853!2d-5.899803724242317!3d35.00261847281378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDAwJzA5LjQiTiA1wrA1Myc1MC4wIlc!5e0!3m2!1sfr!2sma!4v1729333374987!5m2!1sfr!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13032.249223709656!2d-6.0803744!3d35.2547057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bc7edd9bd4fa7%3A0xa9149a1bffc736b2!2sAgence%20RADEEL%20Khemis%20Sahel!5e0!3m2!1sen!2sma!4v1729333477993!5m2!1sen!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal mapsModel fade" id="mapsModel10" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1689.3623857198297!2d-6.0924297100979485!3d35.07110991170299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bcac85765f97f%3A0xff2056996a5d34fa!2sAgence%20RADEEL%20Aouamra!5e1!3m2!1sen!2sma!4v1729333774237!5m2!1sen!2sma"
                            style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal mapsModel fade" id="mapsModel11" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="100%" height="500px"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3265.837406089072!2d-5.9369063242397635!3d35.060803972793856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDAzJzM4LjkiTiA1wrA1NicwMy42Ilc!5e0!3m2!1sfr!2sma!4v1729333593763!5m2!1sfr!2sma"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <img src="img/logo2.png" style="height: 130px; width=90px;">
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
                                class="fas fa-map-marker-alt text me-2"></i>1647, Lotissement Maghreb Al jadid B.P : 11;
                            92000 Larache </a>
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


    <script>
        jQuery(document).ready(function () {
            $('#modalIndex').modal('show')
        });
    </script> <!-- Footer End -->

</body>

</html>
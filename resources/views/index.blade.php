<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RADEEL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            background: #ffc107;
        }

        .news-image-hover-primary::after {
            background: #0d6efd;
        }

        .news-image-hover-success::after {
            background: #198754;
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

    <!-- Spinner Start -->
    <div class="container-fluid  py-2 d-none d-md-flex" style="background: #077ec0;">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white"><i class="fas fa-envelope text-white"></i><a
                            href="mailto:info@Radeel.com" style="color:white;  font-size:17px;">
                            reclamation@radeel.com</a></small>
                    <small class="me-3 text-white"><i class="fas fa-map-marker-alt text-white"></i>
                        <a style="color:white;text-decoration: none;text-decoration: none;  font-size:17px;"
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
            font-family: Arial;
            position: relative;
            color: #616A6B;
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

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
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
<!--                             <li><a href="{{ url('../loi') }}" class="dropdown-item">Loi cadre</a></li>
 -->                            <li><a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Avis de
                                    recrutement</a></li>
                            <li><a href="{{ url('../stage') }}" class="dropdown-item">Stages </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>FOURNISSEURS</span> <i
                                class="bi bi-chevron-down"></i></a>
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
                    <li class="dropdown"><a href="#"><span>PRATIQUE</span> <i
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

            </nav>



        </div>
    </header><!-- End Header -->

    <!-- Navbar End -->


    <!-- header -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($slider as $key => $slide)
                <button type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"
                    aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($slider as $key => $slide)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img src="{{ asset('articlescopie/' . $slide->image) }}" width="100%" style="height: 700px;"
                        class="img-fluid" alt="slide {{ $key + 1 }}">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h2 class="text-white animated slideInRight mb-3">{{ $slide->title }}</h2>
                                    <a href="{{ url('details/' . $slide->id) }}"
                                        class="btn btn py-3 text-white px-5 animated slideInRight"
                                        style="background-color:#077ec0;">PLUS INFO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- SLIDE END -->



    <!-- chiffre cle start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid"
                                src="https://www.radeel.ma/images/radeel-images/pratique/Galerie/7.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid"
                                src="https://www.maroc24.com/wp-content/uploads/2023/07/%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85%D9%8A%D9%86-%D8%A8%D9%88%D8%B9%D8%A7%D8%B5%D9%85-%D8%A7%D9%84%D9%82%D8%B5%D8%B1-%D8%A7%D9%84%D9%83%D8%A8%D9%8A%D8%B1.jpeg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid"
                                src="https://media.licdn.com/dms/image/sync/C5627AQG-_V0SlX6leQ/articleshare-shrink_800/0/1704019820704?e=2147483647&v=beta&t=J-GOYqlrpVcodkqM6cqc7_s6jIQb4QU9xHcnBpvEl3o">
                        </div>
                        <div class="col-6">
                            <div class=" w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center"
                                style="background-color: #A6CCDC;">

                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">28</h1>
                                <small class="fs-5 text-white">Année d'existence</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4" style='color:#077ec0;'>Qui sommes-nous ?</h1>
                    <p class="mb-4">RADEEL est La régie autonome intercommunale de distribution d'eau et
                        d'électricité
                        de la Province de Larache</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle ms-sm-auto"
                                style="background-color: #1481B8">
                                <p class="text-white mb-0">Nombre de clients </p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">185818</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle me-sm-auto"
                                style="background-color: #7DB41E;">
                                <p class="text-white mb-0"> Effectif de personnel</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">314</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle mx-sm-auto"
                                style="background-color: #95D9F4;">
                                <p class="text-white mb-0">Chiffre d'affaire</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">537</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chiffre cle END -->

    <!-- annance fix start-->
    <div class="container">
        @foreach($zone as $z)
        <img src="{{ asset('zone/' . $z->image) }}" width="100%" class="img-fluid">
        @endforeach
    </div>
    <!-- annance fix end-->


    <!-- Nos services   -->
    <div class="container-fluid services  py-5 mb-5" style=" background-color: #ffff;cursor: pointer;" id="serviceID"
        bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="text-center fh5co-recent-news mx-auto pb-5 wow fadeIn" data-wow-delay=".3s"
                style="max-width: 600px; color: #077ec0; background-color: #ffff;" bis_skin_checked="1">
                <h1 class="" style="color:#077ec0">Nos Services</h1>
                <hr class="mx-auto" />
            </div>
            <div class="row g-5 bg-white services-inner" bis_skin_checked="1">
                 <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s" bis_skin_checked="1">
                    <div class=" shadow services-item" style="background-color: #ffff;" bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <!-- <i class="fa fa-file" aria-hidden="true" style="font-size: 150px;padding: 20px; color: #077ec0;" ></i>-->
                                <a href="{{ route('bureau') }}">
                                    <img src="img/abonnement.png" alt="" height="100px"
                                        width="30%"><br><br>
                                    <h4 class="mb-3"> Bureau d'ordre</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s" bis_skin_checked="1">
                    <div class="shadow services-item " style="background-color: white;" bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/paiement') }}"
                                    bis_size="{&quot;x&quot;:327,&quot;y&quot;:1329,&quot;w&quot;:352,&quot;h&quot;:114,&quot;abs_x&quot;:327,&quot;abs_y&quot;:1329}">
                                    <img src="img/paiement-securise.png" alt="" height="100px"
                                        width="30%"
                                        bis_size="{&quot;x&quot;:433,&quot;y&quot;:1291,&quot;w&quot;:140,&quot;h&quot;:100,&quot;abs_x&quot;:433,&quot;abs_y&quot;:1291}"
                                        bis_id="bn_cxuqocn0vprovyus39cjmp"><br><br>
                                    <h4 class="mb-3">Paiement en ligne </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s" bis_skin_checked="1">
                    <div class=" shadow services-item " style="bacskground-color: #ffff;" bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/SMS') }}">
                                    <img src="img/messagerie.png" alt="" height="100px"
                                        width="30%"><br><br>
                                    <h4 class="mb-3">Service SMS</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s" bis_skin_checked="1">
                    <div class=" shadow services-item" style="background-color: #ffff; " bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/reclamation') }}">

                                    <img src="img/contrat.png" alt="" height="100px" width="30%"><br><br>
                                    <h4 class="mb-3">Réclamation </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s" bis_skin_checked="1">
                    <div class=" shadow services-item" style="background-color: #ffff; color:black; "
                        bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/Abonnement') }}">
                                    <img src="img/brancher.png" alt="" height="100px"
                                        width="30%"><br><br>
                                    <h4 class="mb-3"> Abonnement - Raccordement </h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s" bis_skin_checked="1">
                    <div class=" shadow services-item " style="background-color: #ffff; " bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/resiliation') }}">
                                    <img src="img/contracter.png" alt="" height="100px"
                                        width="30%"><br><br>
                                    <h4 class="mb-3"> Résiliation</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="news section-padding" id="news">
        <div class="container">
            <div class="row">
                <div class="text-center fh5co-recent-news wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"
                    bis_skin_checked="1">

                    <h1 class="" style="color:#077ec0; background : "> Actualité </h1>
                    <hr class="mx-auto" />
                    <br>
                </div>
                <div class="col-lg-6 col-12 mb-6 mb-lg-0">
                    <div class="news-thumb" data-aos="fade-up">
                        <a href="{{ route('details', $articles[5]->id) }}"
                            class="news-image-hover news-image-hover-warning">
                            <img src="{{ asset('articlescopie/' . $articles[5]->image) }}"
                                class="img-fluid large-news-image news-image" alt="">
                        </a>
                        
                        <div class="news-text-info">
                            <h5 class="news-title">
                                <a href="{{ route('details', $articles[5]->id) }}" class="news-title-link">
                                    {{ Illuminate\Support\Str::limit($articles[5]->title, $limit = 20, $end = '...') }}
                                </a>
                                <div class="news-category bg-warning text-white">Nouveau</div>

                            </h5>
                            <div class="d-flex flex-wrap">
                                <span class="text-muted">{{ $articles[5]->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-6 col-12">
                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100">
                            <a href="{{ route('details', $articles[4]->id) }}"
                                class="news-image-hover news-image-hover-primary">
                                <img src="{{ asset('articlescopie/' . $articles[4]->image) }}"
                                    class="img-fluid news-image" alt="">
                            </a>
                        </div>
                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="{{ route('details', $articles[4]->id) }}" class="news-title-link">
                                        {{ Illuminate\Support\Str::limit($articles[4]->title, $limit = 20, $end = '...') }}
                                    </a>
                                    </a>
                                    <div class="news-category bg-primary text-white">Nouveau</div>

                                </h5>
                                <div class="d-flex flex-wrap">
                                    <span class="text-muted">{{ $articles[4]->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100">

                            <a href="{{ route('details', $articles[1]->id) }}"
                                class="news-image-hover news-image-hover-primary">
                                <img src="{{ asset('articlescopie/' . $articles[1]->image) }}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-primary text-white">Nouveau</div>
                        </div>
                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="{{ route('details', $articles[1]->id) }}" class="news-title-link">
                                        {{ Illuminate\Support\Str::limit($articles[1]->title, $limit = 20, $end = '...') }}
                                    </a>

                                    </a>
                                    <div class="news-category bg-primary text-white">Nouveau</div>

                                </h5>

                                <div class="d-flex flex-wrap">
                                    <span class="text-muted">{{ $articles[1]->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #slideAvis::after {
                        background: rgba(0, 0, 0, 0);
                    }

                    #slideAvis1::after {
                        background: rgba(0, 0, 0, 0);
                    }
                </style>
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="news-thumb" data-aos="fade-up">
                        <a href="{{ route('coupure') }}" class="news-image-hover news-image-hover-warning">
                            <div id="test" class="carousel slide" data-bs-ride="carousel">

                                <!-- Indicators/dots -->
                                <div class="carousel-indicators">
                                    <button type="button" style="background:black;" data-bs-target="#test"
                                        data-bs-slide-to="0" class="active"></button>
                                    <button type="button" style="background:black;" data-bs-target="#test"
                                        data-bs-slide-to="1"></button>
                                </div>
                                <!-- The slideshow/carousel -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active" id="slideAvis">
                                        <img src="{{ asset('aviscoupure/' . $avis[0]->avis) }}"
                                            class="img-fluid large-news-image news-image" alt=""
                                            style="height:500px; Opacity:1;" width="900px">
                                    </div>
                                    <div class="carousel-item" id="slideAvis1">
                                        <img src="{{ asset('aviscoupure/' . $avis[1]->avis) }}"
                                            class="img-fluid large-news-image news-image" alt=""
                                            style="height:500px;" width="900px">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="news-category bg-warning text-white">Avis de copures</div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100">

                            <a href="{{ route('details', $articles[2]->id) }}"
                                class="news-image-hover news-image-hover-success">
                                <img src="{{ asset('articlescopie/' . $articles[2]->image) }}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-success text-white"></div>
                        </div>

                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="{{ route('details', $articles[2]->id) }}" class="news-title-link">
                                        {{ Illuminate\Support\Str::limit($articles[2]->title, $limit = 20, $end = '...') }}
                                    </a>
                                    </a>
                                    <div class="news-category bg-success text-white">Nouveau</div>

                                </h5>

                                <div class="d-flex flex-wrap">
                                    <span class="text-muted">{{ $articles[2]->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100">

                            <a href="{{ route('details', $articles[3]->id) }}"
                                class="news-image-hover news-image-hover-success">
                                <img src="{{ asset('articlescopie/' . $articles[3]->image) }}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-success text-white"></div>
                        </div>

                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="{{ route('details', $articles[3]->id) }}" class="news-title-link">
                                        {{ Illuminate\Support\Str::limit($articles[3]->title, $limit = 100, $end = '...') }}
                                    </a>
                                    </a>
                                    <div class="news-category bg-success text-white">Nouveau</div>

                                </h5>

                                <div class="d-flex flex-wrap">
                                    <span class="text-muted">{{ $articles[3]->created_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100" data-aos="fade-up">
                            <a href="{{ route('Actualite') }}">
                                <button class="w-100 btn form-control border py-3"
                                    style="background-color:#077ec0; color:#eeeee4; border: #077ec0; margin-top:12px;"
                                    type="submit">PLUS INFO </button></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <style>
        .btn-play {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: orange;
            color: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #G1 {
            background-image: url("img/VIDEO - 28-03-2024.png");
            background-size: cover;
        }

        #G2 {
            background-image: url("img/Capture d’écran 2024-06-25 134935.png");
            background-size: cover;
        }

        #G3 {
            background-image: url("img/VIDEO - 29-03-20241.3.png");
            background-size: cover;
        }
    </style>

    <!-- Actualite end -->

    <div class="media-block py-5"
        style="background: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, .8)),
            url('https://images.pexels.com/photos/7358746/pexels-photo-7358746.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center no-repeat;
        background-size: cover;"
        id="AudioVisual">
        <div class="container">
            <h4 class="text-white text-center mb-3">Audiovisuel</h4>
            <div class="row gx-md-5">
                <div class="col-12 col-md-4 mb-md-5">
                    <div class="ratio ratio-16x9" id="G1">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/zLvQZ0MGPyw" data-bs-target="#videoModal">
                            <i class="fas fa-play" style="color:white;"></i>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-md-5">
                    <div class="ratio ratio-16x9" id="G2">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/YXJTb0oST_M" data-bs-target="#videoModal">
                            <i class="fas fa-play" style="color:white;"></i>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-md-5">
                    <div class="ratio ratio-16x9" id="G3">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/NpXv5g4BMSI" data-bs-target="#videoModal">
                            <i class="fas fa-play" style="color:white;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoModal = document.getElementById('videoModal');
            videoModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const videoSrc = button.getAttribute('data-src');
                const videoFrame = videoModal.querySelector('#video');
                videoFrame.src = videoSrc;
            });

            videoModal.addEventListener('hide.bs.modal', function(event) {
                const videoFrame = videoModal.querySelector('#video');
                videoFrame.src = '';
            });
        });
    </script>
    <style>
        .container-service::before {
            position: absolute;
            background: #f1f9fe;
            content: "";
            width: 100%;
            height: 100%;
            left: 0px;
            clip-path: polygon(0 0, 100% 0, 100% 30%, 0 60%);
            z-index: -1;
        }
    </style>

    <!-- Contact  -->
    <div class="container-fluid container-service fh5co-recent-news contact " bis_skin_checked="1" id="contact"
        style="margin-top:-50px">
        <div class="container " bis_skin_checked="1">
            <div class="text-center mx-auto" style="max-width: 700px; padding-top:70px;" bis_skin_checked="1">
                <h1 class="text" style="color:#077ec0"><br>Contactez Nous</h1>
                <hr class="mx-auto" />
            </div>
            <br><br>
            <div class=" shadow-lg bg-white rounded " bis_skin_checked="1">
                <div class="p-5 row g-4" bis_skin_checked="1">

                    <div class="col-lg" bis_skin_checked="1">
                        <div class="d-flex p-2  rounded mb-2 bg-white" bis_skin_checked="1"
                            style="border: 1px solid #666;">
                            <i class="fas fa-map-marker-alt fa-2x text me-2" style="color:#077ec0 "></i>
                            <div bis_skin_checked="1">
                                <h5>Address</h5>
                                <p class="mb-2"> N, BP:11, 1647 Lotisment, larache </p>
                            </div>
                        </div>
                        <div class="d-flex p-2 rounded mb-2 bg-white" bis_skin_checked="1"
                            style="border: 1px solid #666;">
                            <i class="fas fa-envelope fa-2x text me-2" style="color:#077ec0"></i>
                            <div bis_skin_checked="1">
                                <h5>Email </h5>
                                <p class="mb-2">reclamation@radeel.ma</p>
                            </div>
                        </div>
                        <div class="d-flex p-2 rounded mb-2 bg-white" bis_skin_checked="1"
                            style="border: 1px solid #666;">
                            <i class="fa fa-phone-alt fa-2x text me-2" style="color:#077ec0"></i>
                            <div bis_skin_checked="1">
                                <h5>Téléphone</h5>
                                <p class="mb-2">0801 000 042</br>
                                    0539 520 848</br>
                                    0593 520 853</br>
                                    0593 520 925</br>
                                    0674 908 768
                                </p>
                            </div>
                        </div>
                        <div class="d-flex p-2 rounded mb-2 bg-white" bis_skin_checked="1"
                            style="border: 1px solid #666;">
                            <i class="fas fa-clock fa-2x text me-2" style="color:#077ec0"></i>
                            <div bis_skin_checked="1">
                                <h5>Heures d'ouverture</h5>
                                <p class="mb-2">Lun-Ven 8:00 - 16:30</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" bis_skin_checked="1">

                        <form action="{{ route('addcontact') }}" method="post" class="">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="w-30 form-control rounded py-3   "
                                    placeholder="Votre nom" name="name"
                                    style="border: 1px solid #666; margin-right:5px;">
                                <input type="text" class="w-30 form-control rounded py-3 "
                                    placeholder="Votre Prenom" name="prenom" style="border: 1px solid #666;">
                            </div>
                            <input type="text" class="w-100 form-control  py-3 mb-3" placeholder="Objet"
                                name="objet" style="border: 1px solid #666;">
                            <input type="email" class="w-100 form-control py-3 mb-3"
                                placeholder="Enter votre Email" name="email" style="border: 1px solid #666;">
                            <textarea class="w-100 form-control  mb-3" rows="6" cols="10" name="message" placeholder="Votre Message"
                                style="border: 1px solid #666;"></textarea>
                            <button class="w-100 btn form-control border-primary py-3 text "
                                style="background-color:#077ec0; color:#eeeee4; border: #077ec0; font-size:19px;"
                                type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>

      @foreach ($poup as $p)
        <div id="modalIndex" class="modal animated " style="cursor: pointer;">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        @if(isset($p->titre))
                            <h1 class="d-flex justify-content-start">{{ $p->titre }}</h1>
                        @endif
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if($p->des)
                            <p style="padding: 20px">{{ $p->des }}</p>
                        @endif
                        @if($p->imageannonce)
                        <a href="https://www.fatourati.ma/FatLite/ma/MTC/formulaire?fid=1040">
                        <img src="{{ asset('annonce/' . $p->imageannonce) }}" style="width: 100%;">
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach 

  <!--    <div id="modalIndex" class="modal animated" style="cursor: pointer;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                <a href="https://www.fatourati.ma/FatLite/ma/MTC/formulaire?fid=1040"><img
                        src="img/pai.png" style="width: 100%;">
                </a>
            </div>
        </div>
    </div> 
    <script>
        $(document).ready(function(){
            $('#modalIndex').modal('show');
        });
    </script> -->

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
                    <p><a href="https://www.facebook.com/RADEEL.Officiel/" style="color:white;">RADEELOfficiel</a></p>
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
                            style="color:white;">RADEELOfficiel</a></p>
                </div>
            </li>
    
                <div class="slider">
                    <p><a href="https://x.com/i/flow/login?redirect_after_login=%2Fi%2Fflow%2Flogin"
                            style="color:white;">RADEELOfficiel</a></p>
                </div>
            </li>

            <li class="instagram">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <div class="slider">
                    <p> <a href="https://www.instagram.com/radeelofficiel/" style="color:white;">RADEELOfficiel</a></p>
                </div>
            </li>

            <li class="linkdin">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                <div class="slider">
                    <p> <a href="https://ma.linkedin.com/company/radeelofficiel" style="color:white;">RADEELOfficiel</a></p>
                </div>
            </li>
            <li class="youtube">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <div class="slider">
                    <p> <a href="https://www.youtube.com/@RADEELOfficiel" style="color:white;">RADEELOfficiel</a></p>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://www.radeef.ma/assetsFront/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/teste.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('success'))
        <script>
            swal("Message", "{{ Session::get('success') }}", 'success', {
                button: true,
                button: "OK"
            });
        </script>
    @endif


</body>

</html>

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
    <div class="container-fluid  py-2 d-none d-md-flex"
        style="background: #077ec0; font-size:18px; font-family:'arial'">
        <div class="container">
            <div class="d-flex justify-content-between topbar">

                <div id="note" class="text-secondary d-none d-xl-flex text-white">
                    <small><a href="tel:0801000042" style="color:white;text-decoration: none;">NOUS SOMME OUVERT DE 8:00
                            A 16:30</a></small>
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
                        <div class="nav-item dropdown bg-white">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle active" data-bs-toggle="dropdown">RADEEL</a>
                            <div class="dropdown-menu bg-white">
                                <a href="{{ url('../Quisommenous') }}" class="dropdown-item">Qui sommes-nous</a>
                                <a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur</a>
                                <a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Organigramme de la
                                    RADEEL</a>
                                <a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités</a>
                                <a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">ESPACE CLIENT</a>
                            <div class="dropdown-menu bg-white">
                                <a href="{{ url('../paiement') }}" class="dropdown-item">Paiement en
                                    ligne</a>
                                <a href="{{ url('../Abonnement') }}" class="dropdown-item">Particulier</a>
                                <a href="{{ url('../GrosAbonnee') }}" class="dropdown-item">Grand client </a>
                                <a href="{{ url('../reclamation') }}" class="dropdown-item">Réclamation</a>
                                <a href="{{ url('../Autre') }}" class="dropdown-item">Guide client</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown bg-white">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">ESPACE RH</a>
                            <div class="dropdown-menu">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown bg-white">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">FOURNISSEURS</a>
                            <div class="dropdown-menu">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown bg-white">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">PRATIQUE</a>
                            <div class="dropdown-menu ">
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
     
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Nos Activités</h1>
        </div>
    </div>

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
                                {{-- electricite --}}
                                <div class="tab-pane fade active show" id="pills-first" role="tabpanel"
                                    aria-labelledby="pills-first-tab">
                                    <div class="row ">
                                        <ul class="text-start">
                                            <section id="why-us" class="why-us">
                                                <div class="container-fluid aos-init aos-animate" data-aos="fade-up">
                                                    <div class="row">
                                                        <div class=" justify-content-center align-items-stretch  ">
                                                            <div class="accordion-list">
                                                                <ul>
                                                                    <!-- zone d'action -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-1"
                                                                            aria-expanded="false">
                                                                            <span>01</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:#f89323;">
                                                                                <u> Zones d'actions </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>

                                                                        <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                                                            <p class="text-start fs-8">
                                                                                La RADEEL (Régie Autonome de
                                                                                Distribution d&#39;Eau et
                                                                                d&#39;Électricité de Larache) assure
                                                                                l&#39;alimentation en énergie
                                                                                électrique des villes de Larache, Ksar
                                                                                Kébir, et des communes rurales Aouamra, Khemis 
                                                                                Sahel, Zouada, Oulad Ouchih et Ksar
                                                                                Bjir soit une population totale
                                                                                desservie d’environ 416 800 habitants.
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                     <!--Nos indicateurs -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-2"
                                                                            aria-expanded="false">
                                                                            <span>02</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:#f89323;">
                                                                                <u> Nos indicateurs 2023 </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>
                                                                        <div id="accordion-list-2" class="collapse"
                                                                            data-bs-parent=".accordion-list">
                                                                            <div class="container mt-5">
                                                                                <div
                                                                                    class="row row-cols-1 row-cols-md-3 g-4 text-center">
                                                                                    <div class="col text-center">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div
                                                                                                class="card-body text-center">
                                                                                                <h5
                                                                                                    class="card-title text-white">
                                                                                                    2</h5>
                                                                                                <p
                                                                                                    class="card-text text-white  text-center">
                                                                                                    Poste Sources</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div
                                                                                                class="card-body text-center">
                                                                                                <h5
                                                                                                    class="card-title text-white  text-center">
                                                                                                    7</h5>
                                                                                                <p
                                                                                                    class="card-text text-white  text-center">
                                                                                                    Postes Répartiteurs
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div
                                                                                                class="card-body text-center">
                                                                                                <h5
                                                                                                    class="card-title text-white  text-center">
                                                                                                    180 MVA</h5>
                                                                                                <p
                                                                                                    class="card-text text-white  text-center">
                                                                                                    Puissance Installée
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title text-center text-white">
                                                                                                    180 MVA </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Puissance Totale
                                                                                                    grantie </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    63 MA </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Puissance Moyenne
                                                                                                    Appelée </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    90% </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Rendement</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    1853 KM</h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Longueur de Réseau
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    354 GWH</h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Energie Achetée </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    323 GWH</h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Energie Vendue </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    108 072 </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Clients</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                   354 GWH </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                            Energie Achetée</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#f89323;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    416 800
                                                                                                     </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Population Desservie
                                                                                                    </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                     <!-- Système d'alimentation électrique : -->
                                                                     <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-3"
                                                                            aria-expanded="false">
                                                                            <span>03</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:#f89323;">
                                                                                <u> Système d'alimentation électrique  </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>
                                                                        <div id="accordion-list-3" class="collapse"
                                                                            data-bs-parent=".accordion-list">
                                                                            <p class="text-start fs-8">
                                                                            L’alimentation en énergie électrique du réseau de la RADEEL est assurée par deux postes sources de la RADEEL et deux postes sources de L’ONEE, à travers un réseau Moyenne Tension totalement souterrain en milieu urbain et aérien en milieu rural.
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                <ul> 
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div> 
                                            </section> 
                                        </ul>
                                </div>
                                </div>
                                {{-- Eau --}}
                                <div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
                                    <div class="row ">
                                        <ul class="text-start">
                                            <section id="why-us" class="why-us">
                                                <div class="container-fluid aos-init aos-animate" data-aos="fade-up">
                                                    <div class="row">
                                                        <div class=" justify-content-center align-items-stretch  ">
                                                            <div class="accordion-listP">
                                                                <ul>
                                                                    <!-- zone d'action -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-5"
                                                                            aria-expanded="false">
                                                                            <span>01</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:#077ec0;">
                                                                                <u> Zone d'actions  </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>

                                                                        <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-listP">
                                                                            <p class="text-start fs-8">
                                                                            La RADEEL assure la distribution d’eau potable au niveau de la ville de Larache, Ksar El Kébir, et les centres ruraux de Sahel, Aouamra, et Zouada soit une population desservie d’environ 293 900 habitants.
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                     <!--Nos indicateurs -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-6"
                                                                            aria-expanded="false">
                                                                            <span>02</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:#077ec0;">
                                                                                <u> Nos indicateurs 2023 </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>
                                                                        <div id="accordion-list-6" class="collapse"
                                                                            data-bs-parent=".accordion-listP">
                                                                            <div class="row row-cols-1 row-cols-md-3 g-4"
                                                                style="margin-bottom: 20px;">
                                                                <div class="col">
                                                                    <div class="card  fs-5"
                                                                        style="background-color:#077ec0">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                55 100 m&sup3;</h5>
                                                                            <p class="card-text text-center text-white">
                                                                                Capacité de Stockage</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card fs-5"
                                                                        style="background-color:#077ec0">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                876 Km</h5>
                                                                            <p class="card-text text-center text-white">
                                                                                Longeurs Réseau</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card fs-5"
                                                                        style="background-color:#077ec0">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                15 </h5>
                                                                            <p class="card-text text-center text-white">
                                                                                Sources</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card fs-5"
                                                                        style="background-color: #077ec0;">
                                                                        <div class="card-body text-center">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                15 </h5>
                                                                            <p class="card-text text-center text-white">
                                                                                Réservoirs </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card fs-5"
                                                                        style="background-color: #077ec0;">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                31 </h5>
                                                                            <p class="card-text text-center text-white">
                                                                                Pheures Autonomie de Stockage</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card fs-5"
                                                                        style="background-color: #077ec0;">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                78 % </h5>
                                                                            <p
                                                                                class="card-text  text-center text-white">
                                                                                Rendement</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card"
                                                                        style="background-color: #077ec0;">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                15 Mm&sup3;</h5>
                                                                            <p class="card-text text-center text-white">
                                                                                Eau Mobilisé</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card"
                                                                        style="background-color: #077ec0;">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                12 Mm&sup3;</h5>
                                                                            <p
                                                                                class="card-text text-center  text-white">
                                                                                Eau Vendue </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="card"
                                                                        style="background-color: #077ec0;">
                                                                        <div class="card-body ">
                                                                            <h5
                                                                                class="card-title text-center text-white">
                                                                                77 846 </h5>
                                                                            <p class="card-text text-center text-white">
                                                                                Clients</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#077ec0;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                   15 Mm&sup3;</h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                            Eau Mobilisée</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:#077ec0;">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title  text-center text-white">
                                                                                                    293 900
                                                                                                     </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Population Desservie
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                         <!-- Système d'alimentation électrique : -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-31"
                                                                            aria-expanded="false">
                                                                            <span>03</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:#077ec0;">
                                                                                <u> Système d'alimentation en eau  </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>
                                                                        <div id="accordion-list-31" class="collapse"
                                                                            data-bs-parent=".accordion-listP">
                                                                            <p class="text-start fs-8">
                                                                                <h3 class="mb-0 text" style="color: #077ec0; padding-left:20px;" >La ville de Larache :</h3>
                                                                                <p style="margin-left:40px;">-L’alimentation en eau potable de la ville de Larache est assurée en totalité par les ouvrages de production de l’Office Nationale de l’Electricité et de l’Eau potable (ONEE-Branche Eau), à partir des forages et de la station de traitement de Loukkous sur le barrage Oued El Makhazine</p>
                                                                                <p style="margin-left:40px;">-La Capacité de stockage à Larache : 32 600 m³</p>
                                                                            </p>
                                                                            <p class="text-start fs-8">
                                                                                <h3 class="mb-0 text" style="color: #077ec0; padding-left:20px;" >Centre Rural Khemis Sahel :</h3>
                                                                                <p style="margin-left:40px;">- L’alimentation en eau potable du centre Khemis Sahel est assurée par :
                                                                                    <p style="margin-left:70px;">
                                                                                        - L’Exploitation de quatre forages de la RADEEL, d’un débit global de 7 l/s environ, situés au douar Krimda à 3 Km du centre vers Tanger.
                                                                                    </p>
                                                                                    <p style="margin-left:70px;">
                                                                                         - L’Alimentation à partir du réservoir semi-enterré (2 X 2300 m3) sis à la zone touristique via une station de pompage équipée de 3 groupes multicellulaires de 8 l/s, (soit un débit global de 24 l/s) ; et une conduite de refoulement en PVC Bi-orientée DN 200 mm de longueur 4 680 ml.
                                                                                    </p>
                                                                                </p>
                                                                                <p style="margin-left:40px;">- La Capacité de stockage à Larache : 500 m³</p>
                                                                            </p>
                                                                            <p class="text-start fs-8">
                                                                                <h3 class="mb-0 text" style="color: #077ec0; padding-left:20px;" >Ville de Ksar El Kébir :</h3>
                                                                                <p style="margin-left:40px;">- L’alimentation en eau potable de la ville de ksar el Kébir est assurée par :
                                                                                    <p style="margin-left:70px;">
                                                                                        - L’exploitation de Onze (11) forages RADEEL situés au territoire de la commune l’Aoumara.
                                                                                    </p>
                                                                                    <p style="margin-left:70px;">
                                                                                   - Le système de production de l'ONEE
                                                                                    </p>
                                                                                </p>
                                                                                <p style="margin-left:40px;">-La Capacité de stockage est de : 22 000 m³</p>
                                                                            </p>
                                                                            <p class="text-start fs-8">
                                                                                <h3 class="mb-0 text" style="color: #077ec0; padding-left:20px;" >Centre Rural Aouamra :</h3>
                                                                                <p style="margin-left:40px;">- L’Alimentation est assurée par l’exploitation d’un forage RADEEL et un By-Pass pour garantir une alimentation continue en cas de coupure d'électricité
                                                                                   
                                                                                </p>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                <ul> 
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div> 
                                            </section> 
                                        </ul>
                                </div>
                                </div>

                                {{-- Assainaissement --}}
                                <div class="tab-pane fade" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                                <div class="row ">
                                        <ul class="text-start">
                                            <section id="why-us" class="why-us">
                                                <div class="container-fluid aos-init aos-animate" data-aos="fade-up">
                                                    <div class="row">
                                                        <div class=" justify-content-center align-items-stretch  ">
                                                            <div class="accordion-listPP">
                                                                <ul>
                                                                    <!-- zone d'action -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-7"
                                                                            aria-expanded="false">
                                                                            <span>01</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:rgb(155,187,89);">
                                                                                <u> Zonne d'action  </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>

                                                                        <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-listPP">
                                                                            <p class="text-start fs-7">
                                                                            La RADEEL a pris en charge la gestion de l’assainissement liquide de la ville de Larache en 2004.  Puis elle a été chargée d’assurer ce service aux communes rurales d’Aouamra et Khmis Sahel et à la ville de Ksar Kébir en 2013 et 2014 respectivement.  <br>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                     <!--Nos indicateurs -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-2"
                                                                            aria-expanded="false">
                                                                            <span>02</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:rgb(155,187,89);">
                                                                                <u> Nos indicateurs 2023 </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>
                                                                        <div id="accordion-list-2" class="collapse"
                                                                            data-bs-parent=".accordion-listPP">
                                                                            <div class="container mt-5">
                                                                                <div
                                                                                    class="row row-cols-1 row-cols-md-3 g-4 text-center">
                                                                                    <div class="col text-center">
                                                                                        <div class="card"
                                                                                            style="background-color:rgb(155,187,89);">
                                                                                            <div
                                                                                                class="card-body text-center">
                                                                                                <h5
                                                                                                    class="card-title text-white">
                                                                                                    6 </h5>
                                                                                                <p
                                                                                                    class="card-text text-white  text-center">
                                                                                                    Stations de Pompage</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:rgb(155,187,89);">
                                                                                            <div
                                                                                                class="card-body text-center">
                                                                                                <h5
                                                                                                    class="card-title text-white  text-center">
                                                                                                    815 km </h5>
                                                                                                <p
                                                                                                    class="card-text text-white  text-center">
                                                                                                    Longueur réseau 
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:rgb(155,187,89);">
                                                                                            <div
                                                                                                class="card-body text-center">
                                                                                                <h5
                                                                                                    class="card-title text-white  text-center">
                                                                                                    77 841 </h5>
                                                                                                <p
                                                                                                    class="card-text text-white  text-center">
                                                                                                    Clients
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="card"
                                                                                            style="background-color:rgb(155,187,89);">
                                                                                            <div class="card-body">
                                                                                                <h5
                                                                                                    class="card-title text-center text-white">
                                                                                                    286 800 </h5>
                                                                                                <p
                                                                                                    class="card-text  text-center text-white">
                                                                                                    Population Desservie  </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                         <!-- Système d'alimentation électrique : -->
                                                                    <li>
                                                                        <a data-bs-toggle="collapse"
                                                                            class="collapse collapsed"
                                                                            data-bs-target="#accordion-list-30"
                                                                            aria-expanded="false">
                                                                            <span>03</span>
                                                                            <h3 class=""
                                                                                style="display:inline-block; color:rgb(155,187,89);">
                                                                                <u> Système d'assainissement liquide  </u>
                                                                            </h3>
                                                                            <i
                                                                                class="bx bx-chevron-down icon-show"></i><i
                                                                                class="bx bx-chevron-up icon-close"></i>
                                                                        </a>
                                                                        <div id="accordion-list-30" class="collapse"
                                                                            data-bs-parent=".accordion-listPP">
                                                                            <p class="text-start fs-8">
                                                                            La RADEEL dispose d’un système d’assainissement de type unitaire. La topographie du terrain est telle que l’écoulement est gravitaire. <br>
                                                                            Le linéaire total du réseau est de 815 kilomètres. La majeure partie du réseau sont des canalisations circulaires de diamètre inférieur ou égal à 800 mm, la plupart des collecteurs tertiaires étant de 400 mm.
                                                                
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    
                                                                <ul> 
                                                            </div> 
                                                        </div>
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
                                class="fas fa-map-marker-alt text me-2"></i>1647, Lotissement Maghreb Al jadid B.P : 11; 92000 Larache                                </a>
                        <a href="tel:08 01 00 00 42" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-phone-alt text me-2"></i> 0801 000 042 </a>
                        <a href="tel:05 53 95 20 25" class="py-3 text-light border-bottom border-white">
                            <i class="fas fa-fax" class="fas fa-phone-alt text me-2"></i>
                            +212.539.52.09.25</a>
                        <a href="mailto:reclamation@radeel.ma" class="py-3 text-light border-bottom border-white"><i
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
    <!-- jQuery -->

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    <script>
        jQuery(document).ready(function () {
            $('#modalIndex').modal('show')
        });
    </script>

</body>

</html>
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/cover2.png) center center no-repeat;
            background-size: cover;
        }

        .nav-item.dropdown>a::after {
            display: none !important;
        }

        #container {
            max-width: 550px;
        }

        .step-container {
            position: relative;
            text-align: center;
            transform: translateY(-43%);
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
            border: 2px solid #007bff;
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer;
            /* Added cursor pointer */
        }

        .step-line {
            position: absolute;
            top: 16px;
            left: 50px;
            width: calc(100% - 100px);
            height: 2px;
            background-color: #007bff;
            z-index: -1;
        }

        #multi-step-form {
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <style>
        .wrapper {
            position: fixed;
            top: 400px;
            left: 0%;
            transform: translate(-50%, -50%);
        }

        .wrapper ul {
            list-style: none;
        }

        .wrapper ul li {
            width: 50px;
            height: 50px;
            position: relative;
            background: #e59500;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 3px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .wrapper ul li .fab {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            color: #fff;
        }

        .wrapper ul li.facebook {
            background: #39569C;
        }

        .wrapper ul li.twitter {
            background: #14171A;
        }

        .wrapper ul li.instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .wrapper ul li.linkdin {
            background: #39569C;
        }

        .wrapper ul li.youtube {
            background-color: red;
        }

        .wrapper ul li.facebook div.slider {
            background: #627aac;
        }

        .wrapper ul li.twitter div.slider {
            background: #14171A;
        }

        .wrapper ul li.instagram div.slider {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .wrapper ul li.linkdin div.slider {
            background: #39569C;
        }

        .wrapper ul li.youtube div.slider {
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

        .wrapper ul li:hover .slider {
            width: 180px;
            transition: all 0.5s ease;
        }

        .wrapper ul li:hover .slider p {
            opacity: 1;
            transition: all 1s 0.2s ease;
        }
    </style>

  

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
                    <li class="dropdown"><a href="#" class="nav-link active"><span>ESPACE CLIENT</span> <i class="bi bi-chevron-down"></i></a>
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
                                    publics </a>
                            </li>
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
                    <li><a class="nav-link scrollto" href="{{ url('../stress') }}#contact"> STRESS HYDRIQUE </a></li>
                    <li><a class="nav-link scrollto" href="{{ url('../') }}#contact"> CONTACT </a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                 

                </ul>

            </nav>


        </div>
    </header>

    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                Grand Clients
            </h1>
        </div>
    </div>

    <!-- contente  -->
    <style>
        .bd-callout {
            padding: 1.25rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #e9ecef;
            border-left-width: 0.25rem;
            border-radius: 0.25rem;
            border-left-color: red;
            font-size: 20px;
            line-height: 30px;
        }

        /* Custom CSS for vertical tabs */
        .vertical-tabs .nav-link {
            text-align: left;
            padding: 1.25rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #e9ecef;
            border-left-width: 0.25rem;
            border-radius: 0.25rem;
            border-left-color: #077ec0;
        }

        .vertical-tabs .nav-link.active {
            background-color: lightgrey;
            color: gray;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            position: relative;
            vertical-align: middle;
            width: 93%;
            /* Change background color of active tab */
        }

        .vertical-tabs .nav-link {
            border-radius: 0;
            /* Optional: Remove rounded corners from tabs */

            font-size: 20px;
            width: 93%;
            color: #077ec0;
            font-size: 19px;
            /* Optional: Adjust margin between tabs */
        }

        .card-header {
            color: #007bff;
            color: white;
            text-align: center;
            font-size: 20px;
            line-height: 30px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-4 py-5">
                <div class="nav flex-column nav-pills vertical-tabs" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <button class="nav-link active justifay-content-center" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Raccordement</button>
                    <button class="nav-link justiy-content-center" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Résiliation</button>
                    <button class="nav-link justify-content-center" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Factures</button>
                </div>
            </div>
            <div class="col-md-8 py-5">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="container mt-3">
                            <div id="accordion">
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Raccordement au réseau d'eau potable
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse " data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-start">
                                                Vous avez un projet (unité industrielle, hôtel, bain ou douche
                                                ….), vous souhaitez vous raccorder au réseau d’eau potable.
                                               
                                            <p class="text-start">
                                                La première démarche à faire est de vous rendre aux agences de
                                                la RADEEL muni des pièces suivantes :
                                            </p>
                                            <div class="bd-callout bd-callout-info">
                                                <p>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Demande de
                                                    branchement
                                                    au réseau d’eau potable dans laquelle
                                                    vous précisez la nature de votre activité, l’adresse et le
                                                    calibre du compteur</br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Plan de situation
                                                    du
                                                    site à alimenter (unité industrielle,
                                                    hôtel, fabrique, ….etc.)</br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Copie légalisée du
                                                    statut s’il s’agit d’une société</br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Copie légalisée du
                                                    registre de commerce</br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Copie de la C.I.N
                                                    du
                                                    signataire</br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Délégation de
                                                    signature
                                                    si le signataire est autre que le
                                                    gérant de la société</br>
                                                </p>
                                            </div>
                                            </p>

                                            <div class="container mt-5 mb-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 style="color:#7DB41E">Les étapes de branchement
                                                            et d’abonnement au réseau d’eau potable :</h5>
                                                        <ul class="timeline">
                                                            <li>
                                                                <p
                                                                    style="font-size:18px; font-weight:border; color:gray; text-decoration: underline;">
                                                                    Etape 1 :</p>
                                                                <p> Le service étude de la RADEEL se rend sur place et
                                                                    établit un
                                                                    devis de branchement du site.
                                                                    Ce devis est subordonné à :</p>

                                                                <ul class="text-start">
                                                                    <p> <i class="fa fa-check  me-3"
                                                                            style="color:orange;padding-left:20px;"></i>Calibre
                                                                        du compteur eau</br>
                                                                        <i class="fa fa-check  me-3"
                                                                            style="color:orange;padding-left:20px;"></i>L’éloignement
                                                                        du local par rapport au réseau d’eau potable
                                                                        existant</br>
                                                                        <i class="fa fa-check  me-3"
                                                                            style="color:orange;padding-left:20px;"></i>Frais
                                                                        de participation</br>
                                                                    </p>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <p
                                                                    style="font-size:18px; font-weight:border; color:gray; text-decoration: underline;">
                                                                    Etape 2 :</p>
                                                                <p>Quand le client paye les frais de branchement et du
                                                                    contrat
                                                                    d’abonnement (la caution d’abonnement est
                                                                    proportionnelle au
                                                                    calibre du compteur), la RADEEL procède au
                                                                    raccordement et la
                                                                    pose du compteur.</p>

                                                                <p class="text-start">La pose du compteur est
                                                                    subordonnée à la
                                                                    normalité de l’installation du site du client.</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Raccordement au réseau moyenne tension

                                        </div>
                                    </a>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">

                                            <p class="text-start"
                                                style="color: #D1801D; Font-size:19px; text-decoration: underline;">
                                                Procédure du
                                                raccordement </p>
                                            
                                            <p class="text-start">Si votre site a besoin de s’approvisionner en
                                                moyenne tension, veuillez vous rendre aux agences de la RADEEL
                                                muni des pièces suivantes :</p>
                                            <div class="bd-callout bd-callout-info">
                                                <p>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Demande de
                                                    branchement au réseau moyenne tension
                                                    </br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Plan de situation
                                                    du site à alimenter (administration,
                                                    hôtel, fabrique, ….etc.)La puissance installée du poste</br>
                                                    <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Copie des status et
                                                extrait de registre de commerce, ICE et CIN de gérant pour les personnes morales
                                            </br>
                                            <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Copie des plans de
                                                construction approuvés par les autorités compétentes</br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Copie de la C.I.N
                                                    du signataire
                                                    </br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Délégation de
                                                    signature si le signataire est autre que le
                                                    gérant de la société
                                                    </br>
                                                </p>
                                            </div>
                                            <h4 class="mb-0 text-start" style="color: #D1801D;">Les étapes de
                                                branchement et d'abonnement au réseau moyen tension</h4>
                                            <div class="container mt-5 mb-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="timeline">
                                                            <li>
                                                                <p class="text-start"
                                                                    style="color:gray; Font-size:20px; text-decoration: underline;">
                                                                    Etape 1 :</p>
                                                                <p class="text-start">
                                                                    Le service étude de la RADEEL se rend sur place et
                                                                    établit un
                                                                    devis de branchement du poste.
                                                                    <span class="text-start">Ce devis est subordonné à
                                                                        :</span>
                                                                <ul class="text-start">
                                                                    <p>
                                                                        <i class="fa fa-check  me-3"
                                                                            style="color:orange;padding-left:20px;"></i>La
                                                                        puissance installée du poste
                                                                        </br>
                                                                        <i class="fa fa-check  me-3"
                                                                            style="color:orange;padding-left:20px;"></i>L’éloignement
                                                                        du poste par rapport au réseau
                                                                        moyenne tension
                                                                        existant</br>
                                                                        <i class="fa fa-check  me-3"
                                                                            style="color:orange;padding-left:20px;"></i>Travaux
                                                                        de réalisation du poste (*)
                                                                        </br>
                                                                        <i class="fa fa-check  me-3"
                                                                            style="color:orange;padding-left:20px;"></i>Peines
                                                                        et soins sur travaux
                                                                    </p>
                                                                </ul>
                                                                <p class="text-start"> (*) Les travaux de réalisation ne
                                                                    sont pas facturés si le client réalise les travaux pour lui même.
                                                                </p>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="text-start"
                                                                    style="color: gray; Font-size:20px; text-decoration: underline;">
                                                                    Etape 2 :</p>
                                                                <p class="text-start">
                                                                    Dans le cas ou le client a désigné la RADEEL pour
                                                                    les travaux de
                                                                    réalisation du poste, et après règlement du devis,
                                                                    la Régie
                                                                    procède aux travaux de réalisation du poste. <br>
                                                                    Une fois, ces travaux sont terminés. Le client
                                                                    souscrit un
                                                                    contrat d’abonnement dont la caution est
                                                                    proportionnelle à la
                                                                    puissance souscrite. Frais d’abonnement réglés, la
                                                                    RADEEL
                                                                    procède au raccordement et à la pose du comptage
                                                                    moyenne tension
                                                                    dans un délai de xx jours.<br>
                                                                    Dans le cas ou le client a désigné une entreprise
                                                                    privée de son
                                                                    choix pour réaliser le nouveau poste, et après
                                                                    règlement du
                                                                    devis branchement. Cette entreprise communique à la
                                                                    RADEEL le
                                                                    plan d’équipement du poste pour approbation. <br>
                                                                    La RADEEL retourne à l’entreprise le plan du poste
                                                                    approuvé ou
                                                                    réclame des corrections avant son approbation. <br>
                                                                    Après approbation des plans, l’entreprise réalise
                                                                    les travaux du
                                                                    nouveau poste. <br>
                                                                    Une fois, les travaux sont achevés, l’entreprise
                                                                    invite la
                                                                    RADEEL en présence du client à la réception du
                                                                    poste. La
                                                                    réception n’a lieu qu’après règlement des frais de
                                                                    la réception.
                                                                    <br>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p class="text-start"
                                                                    style="color:gray; Font-size:20px; text-decoration: underline;">
                                                                    Etape 3 :</p>
                                                                <p class="text-start">
                                                                    Après la réception du poste, le client souscrit un
                                                                    contrat
                                                                    d’abonnement dont la caution est proportionnelle à
                                                                    la puissance
                                                                    souscrite. <br>
                                                                    Frais d’abonnement réglés, la RADEEL procède au
                                                                    raccordement et
                                                                    à la pose du comptage moyenne tension dans un délai
                                                                    de xx jours.
                                                                    <br>
                                                                    L’opération de la mise sous tension du poste se
                                                                    déroule en
                                                                    présence de l’entreprise, du client et la RADEEL. Le
                                                                    client est
                                                                    appelé à utiliser l’énergie électrique dans la
                                                                    limite de sa
                                                                    puissance souscrite et conformément aux conditions
                                                                    du contrat.
                                                                    <br>
                                                                </p>
                                                            </li>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a class="collapsed btn" data-bs-toggle="modal" href="#exampleModalCenter1">
                                    <div class="card-header" style="background-color:#077ec0; color:white;">
                                        Demande en ligne
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="container mt-3">
                            <div id="accordion">
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Résiliation
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse " data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p class="text-start">
                                                Si vous voulez résilier votre contrat d’abonnement moyenne
                                                tension ou eau usage gros abonné, veuillez adresser une demande
                                                écrite à la Direction Générale de la RADEEL et joindre les
                                                pièces suivantes :
                                            <ul class="text-start">
                                                <p>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Original du contrat
                                                    d’abonnement</br>
                                                </p>
                                            </ul>
                                            </p>
                                            <p class="text-start">Dès réception de votre demande, un agent de la
                                                RADEEL se rendra sur
                                                place pour noter l’index d’arrêt. <br>
                                                Ensuite, la régie établit une facture d’arrêt qui tient compte
                                                de la
                                                caution déposée le jour de signature du contrat.<br>
                                                Dans le cas ou votre solde est créditeur, la RADEEL procède à
                                                votre
                                                remboursement par chèque. <br>
                                                Dans le cas ou votre solde est débiteur, vous êtes appelé à le
                                                régler pour que la résiliation soit effective.<br>
                                            </p><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="container mt-3">
                            <div id="accordion22">
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            La relevé de votre consommation
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse " data-bs-parent="#accordion22">
                                        <div class="accordion-body">
                                            <p class="text-start">
                                                Si vous voulez résilier votre contrat d’abonnement moyenne
                                                tension ou eau usage gros abonné, veuillez adresser une demande
                                                écrite à la Direction Générale de la RADEEL et joindre les
                                                pièces suivantes :
                                            <ul class="text-start">
                                                <p>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Dernière facture
                                                    payée</br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:orange;padding-left:20px;"></i>Original du contrat
                                                    d’abonnement</br>
                                                </p>
                                            </ul>
                                            </p>
                                            <p class="text-start">Dès réception de votre demande, un agent de la
                                                RADEEL se rendra sur
                                                place pour noter l’index d’arrêt. <br>
                                                Ensuite, la régie établit une facture d’arrêt qui tient compte
                                                de la
                                                caution déposée le jour de signature du contrat.<br>
                                                Dans le cas ou votre solde est créditeur, la RADEEL procède à
                                                votre
                                                remboursement par chèque. <br>
                                                Dans le cas ou votre solde est débiteur, vous êtes appelé à le
                                                régler pour que la résiliation soit effective.<br>
                                            </p><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOnez">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Réglement de vos factures
                                        </div>
                                    </a>
                                    <div id="collapseOnez" class="collapse " data-bs-parent="#accordion22">
                                        <div class="accordion-body">
                                            <div class="accordion-body">
                                            <p class="text-start">
                                                Vous pouvez régler vos factures de consommation :
                                                </p>
                                                <h4 class="Comptage moyenne tension text-start"
                                                    style="color: rgb(155,187,89);">Au niveau de nos agence    </h4>
                                                <p class="text-start">
                                                    <h5>Agence Maghreb jadid à larache </h5>
                                                    <h5>Agence Centrales à Ksar kbir </h5>
                                                </p>
                                                                                               <h4 class="Comptage moyenne tension text-start"
                                                    style="color: rgb(155,187,89);">Par virement bancaire au compte RADEEL  </h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <!-- prompt formulaire Raccordement -->
    <div class="modal fade" id="exampleModalCenter1" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-image: url(img/202.png);">

                <div id="container" class="container mt-5">
                    <div class="progress px-1" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="step-container d-flex justify-content-between">
                        <div class="step-circle" >1</div>
                        <div class="step-circle" >2</div>
                        <div class="step-circle" >3</div>
                    </div>

                    <form method="POST" action="{{ route('addraccoredement') }}" enctype="multipart/form-data"
                        id="multi-step-form1" style="Padding:30px;">
                        @csrf
                        @if (Session::has('success'))
                            <script>
                                swal("Message", "{{ Session::get('success') }}", 'success', {
                                    button: true,
                                    button: "OK"
                                });
                            </script>
                        @endif
                        @if (Session::has('fail'))
                            <script>
                                swal("Error", "{{ Session::get('fail') }}", 'error', {
                                    button: "OK"
                                });
                            </script>
                        @endif
                        <div class="step step-1">
                            <!-- Step 1 form fields here -->
                            <h3>Les informations de la demande de raccordement : </h3>
                            <div class="mb-3">
                                <label class="form-label">Gérance <span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="gerance">
                                    <option value="eau" selected>Eau</option>
                                    <option value="électricité">électricité</option>
                                    <option value="Eau et électricité">Eau et électricité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Type de Raccordement<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="type-abonRacc"
                                    name="typeraccordement">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="nouvelleRac">Branchement neuf
                                    </option>
                                    <option value="AugmentationRac">Augmentation de puissance(Ajouter un
                                        Compteur)
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse d'abonnement demandé <span style="color:red;">*</span>
                                </label>
                                <input type="text" class="form-control" name="adressabonnement"><br>
                                <select class="form-select" aria-label="Default select example" name="province">
                                    <option selected>Larache
                                    </option>
                                    <option value="khmis Sahel">khmis Sahel</option>
                                    <option value="Aouamra">Aouamra</option>
                                    <option value=">Ksar El Kébir">Ksar El Kébir</option>
                                </select>
                            </div>
                            <h3>Information du bénéficiare : </h3>
                            <div class="mb-3">
                                <label class="form-label">Client<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="client">
                                    <option selected disabled>Sélectionner une valeur
                                    </option>
                                    <option value="Particuliers">Particuliers
                                    </option>
                                    <option value="Professionnels et commerçants">Professionnels et commerçants
                                    </option>
                                    <option value="Gros Abonnés">Gros Abonnés </option>
                                    <option value="Administrations et offices">Administrations et offices
                                    </option>
                                    <option value="Promoteurs et lotisseurs">Promoteurs et lotisseurs </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statut<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="personne2"
                                    name="status">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="PersonnePhysiqueRac">Personne Physique
                                    </option>
                                    <option value="PersonneMoraleRac">Personne morale</option>
                                </select>
                            </div>
                            <div class="mb-3" id="physique1">
                                <label class="form-label">Nature demandeur<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="phy"
                                    name="naturedemandeur">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="propietaireRac">Propriétaire
                                    </option>
                                    <option value="LocataireRac">Locataire</option>
                                    <option value="MunicipaliteRac">Propiété de la municipalité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Nom et Prénom <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="Nom & prénom"
                                    name="namecomplete"><br>
                            </div>
                            <div class="mb-3" id="RacMorale5">
                                <label class="form-label">Raison Sociale </label><span style="color:red;">*</span>
                                <input class="form-control form-control" type="text" name="raisonsociale">
                            </div>
                            <div class="mb-3" id="Racmorale">
                                <label class="form-label">Numéro registre de commerce </label><span
                                    style="color:red;">*</span>
                                <input class="form-control form-control" type="text" name="numeroregister">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" name="cin">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro Téléphone<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="tel" name="tele">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Email<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="email" name="email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Addresse de correspondance<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="addresse"
                                    name="adresscorresp"><br>
                                <input class="form-control form-control" type="text" placeholder="ville" name="ville">
                            </div>
                            <!-- recaptcha -->
                            <!-- <div class="mb-3">

                                <div class="g-recaptcha" data-sitekey="6LdVbykpAAAAAHkzC8BgWCLQ9p3ghZiZnKxRKck0"></div>
                            </div> -->

                            <div class="mb-3">
                                <button type="button" class="btn btn-primary next-step">Continuer</button>

                            </div>
                        </div>
                        <div class="step step-2">
                            <h3>les pièces à joindre : </h3>
                            <p style="color:red; text-align:center;">
                                (si vous ne diposer pas de ces piéces en format électronique veuillez les
                                présenter au
                                siege de la RADEEL)
                                <br>
                                les extensions autorisés : png, jpg, pdf <br>
                                Taille maximale de fichier : 3MB
                            </p>
                            <div class="mb-3" id="cinRac">
                                <label class="form-label">CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" name="cinfile">
                            </div>
                            <div class="mb-3" id="cinGRac">
                                <label class="form-label">CIN de Gérant <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="cingerantfile">
                            </div>

                            <div class="mb-3" id="recuRac">
                                <label class="form-label">Reçu de devis initial <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="recudevisfile">
                            </div>
                            <div class="mb-3" id="AttesRac">
                                <label class="form-label">Attestation de construction <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    aria-multiselectable="" name="Attestationconstruction">
                            </div>
                            <div class="mb-3" id="AttesMulRac">
                                <label class="form-label">Attestation auprés de la municipalité <span
                                        style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="Attestationmunicipalité">
                            </div>
                            <div class="mb-3" id="croquisRac">
                                <label class="form-label">Croquis <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" name="croquisfile">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Justification d'occupation du local<span
                                        style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="justificationoccupationfile">
                            </div>
                            <div class="mb-3" id="RacMorale2">
                                <label class="form-label"> Autorisation de construction
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="autorisationlegaliseefile">
                            </div>
                            <div class="mb-3" id="RacMorale1">
                                <label class="form-label">Plan approuvé
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="planapprouvefile">
                            </div>

                            <div class="mb-3" id="RacMorale3">
                                <label class="form-label"> Statut d'entité
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="statusentitefile">
                            </div>
                            <div class="mb-3" id="RacMorale4">
                                <label class="form-label"> Registre de commerce
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="registercommercefile">
                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2"> je confirme ma
                                    demande
                                    d'abonnement et que les rensignements fournis sont exacts .
                                </label>

                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2"> J'ai lu et
                                    j'accepte les
                                    conditions générales d'utilisation
                                </label>

                            </div>
                            <div class="mb-3">

                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2"> Je donne mon
                                    accord au
                                    traitement de mes données personnelles
                                </label>
                                <p>Conformément à la loi N°09-08,vous bénéficiez d'une droit d'accès , de
                                    rectification
                                    et d'opposition aux traitement de vos données personnelles à la RADEEL .</p>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary next-step">Continuer</button>
                            </div>
                        </div>
                        <div class="step step-3">
                            {{-- <div class="mb-3">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>&nbsp;&nbsp;
                                    <button class="btn btn-danger reload" type="button" id="reload">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="captcha" placeholder="Entrer le captcha">
                                @if ($errors->has('captcha'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('captcha') }}
                                </div>
                                @endif
                            </div> --}}
                            <br>
                            <div class="step step-3">
                                <button type="submit" class="btn "
                                    style="background-color:#077ec0;color:white; margin-left: 200px">Envoyé</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha)
                }
            });
        });
    </script>


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
                        <a href="{{ url('../Avis recrutement') }}" class="mb-2 text-white"><i class="fas fa-angle-right text- me-2"
                                style="color: white;"></i>Espaces RH</a>
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
                    <a href="index.php #contactID" class="h3 text-white">Contacter nous</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="https://www.google.com/maps/dir/35.1801715,-6.1420956/radeel/@35.1734126,-6.150075,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0xd0bc947c5cd4efd:0x39b8205ae5d8018d!2m2!1d-6.141061!2d35.1677008?entry=ttu"
                            class="pb-3 text-light border-bottom border-white"><i
                                class="fas fa-map-marker-alt text me-2"></i>1647,lot Maghreb Jadid </a>
                        <a href="tel:08 01 00 00 42" class="py-3 text-light border-bottom border-white"><i
                                class="fas fa-phone-alt text me-2"></i> 0801 000 042 </a>
                        <a href="tel:05 53 95 20 25" class="py-3 text-light border-bottom border-white">
                            <i class="fas fa-fax" class="fas fa-phone-alt text me-2"></i>
                            +212.539.52.03.25</a>
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
        $("#type-abonRacc").change(function () {
            if ($(this).val() === "AugmentationRac") {
                $("#recuRac").show();
            } else {
                $("#recuRac").hide();
            }
        });
        $("#phy").change(function () {
            if ($(this).val() === "LocataireRac") {
                $("#AttesRac").show();
                $("#RacMorale1").show();
                $("#RacMorale2").show();
                $("#croquisRac").hide();
                $("#AttesMulRac").hide();

            }
            if ($(this).val() === "MunicipaliteRac") {
                $("#croquisRac").show();
                $("#AttesMulRac").show();
                $("#AttesRac").hide();
                $("#RacMorale1").hide();
                $("#RacMorale2").hide();
            }
            if ($(this).val() === "propietaireRac") {
                $("#croquisRac").show();
                $("#AttesMulRac").show();
                $("#AttesRac").show();
                $("#RacMorale1").show();
                $("#RacMorale2").show();
            }

        });
        $("#personne2").change(function () {
            if ($(this).val() === "PersonnePhysiqueRac") {
                $("#cinGRac").hide();
                $("#cinRac").show();
                $("#physique1").show();
                $("#RacMorale1").hide();
                $("#RacMorale2").hide();
                $("#RacMorale3").hide();
                $("#RacMorale4").hide();
                $("#RacMorale5").hide();
                $("#RacMorale").hide();

            } else {
                $("#cinGRac").show();
                $("#cinRac").hide();
                $("#physique1").hide();
                $("#RacMorale1").show();
                $("#RacMorale2").show();
                $("#RacMorale3").show();
                $("#RacMorale4").show();
                $("#RacMorale5").show();
                $("#Racmorale").show();
            }
        });

        var currentStep = 1;
        var updateProgressBar;

        function displayStep(stepNumber) {
            if (stepNumber >= 1 && stepNumber <= 3) {
                $(".step-" + currentStep).hide();
                $(".step-" + stepNumber).show();
                currentStep = stepNumber;
                updateProgressBar();
            }
        }

        $(document).ready(function () {
            $("#croquisRac").hide();
            $("#AttesMulRac").hide();
            $("#AttesRac").hide();
            $("#RacMorale1").hide();
            $("#recuRac").hide();
            $("#Racmorale").hide();
            $("#physique1").hide();
            $("#RacMorale1").hide();
            $("#RacMorale2").hide();
            $("#RacMorale3").hide();
            $("#RacMorale4").hide();
            $("#RacMorale5").hide();
            $("#RacMorale").hide();
            $('#multi-step-form1').find('.step').slice(1).hide();

            $(".next-step").click(function () {
                if (currentStep < 3) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                    currentStep++;
                    setTimeout(function () {
                        $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInRight");
                        updateProgressBar();
                    }, 500);
                }
            });

            $(".prev-step").click(function () {
                if (currentStep > 1) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                    currentStep--;
                    setTimeout(function () {
                        $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInLeft");
                        updateProgressBar();
                    }, 500);
                }
            });

            updateProgressBar = function () {
                var progressPercentage = ((currentStep - 1) / 2) * 100;
                $(".progress-bar").css("width", progressPercentage + "%");
            }
        });
    </script>
</body>

</html>
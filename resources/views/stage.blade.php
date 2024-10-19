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
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/cov3.png) center center no-repeat;
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

                    <li class="dropdown"><a href="#" class="active"><span>ESPACE RH</span> <i
                                class="bi bi-chevron-down"></i></a>
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
                    <li><a class="nav-link scrollto" href="{{ url('../stress') }}"> STRESS HYDRIQUE </a></li>
                    <li><a class="nav-link scrollto" href="{{ url('../') }}#contact"> CONTACT </a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </ul>
            </nav>
        </div>
    </header>

    </header><!-- End Header -->
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                Stage
            </h1>
        </div>
    </div>


    <div class="container-xxl py-5" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row g-5 align-items-center" bis_skin_checked="1">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;
                        animation-name: fadeInUp;" bis_skin_checked="1">
                    <br>
                    <h1 class="mb-4" style="color:#058dd4">Stages étudiants </h1>
                    <p class="mb-4">Chaque année la RADEEL accueille de
                        nombreux stagiaires des différents établissements de
                        formation et d’enseignement public ou privé qui sont
                        encadrés par des responsables de la régie. Ces
                        stages permettent à l’étudiant de découvrir la vie
                        professionnelle et d’acquérir une expérience dans
                        son domaine d’études.
                    </p>
                    <p><i class="fa fa-check  me-3" style="color:orange;padding-left:20px;"></i>
                        <span style="font-weight:200; "> Une Demande de Stage</span>
                    </p>
                    <p><i class="fa fa-check  me-3" style="color:orange;padding-left:20px;"></i>
                        <span style="font-weight:200; "> CV </span>
                    </p>
              

                    </p>
                    <p class="mb-4"> Si vous etes intéresser de faire chez nous un stage merci de vous deposer votre
                        dossier et remplir le formulaire.
                        <br><br>
                        <button type="button"
                            style="background-color:#7DB41E; color:white ; font-size:18px; padding:20px;"
                            class="btn btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <i class="fab fa-wpforms"></i> Cliquer pour remplir le formulaire
                        </button>
                    </p>
                </div>
                <br>
                <div class="col-lg-6" bis_skin_checked="1">
                    <div class="rounded overflow-hidden" bis_skin_checked="1">

                        <div><img
                                src="img/stage.png"
                                style="background-size:
                                    cover;background-repeat:
                                    no-repeat;background-position: right;" width="100%">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- prompt formulaire -->
    <div class="modal fade" id="exampleModalCenter" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-image: url('img/test.png')">
                <!-- end -->
                <!-- <form method="POST" action="manupilation.php" onsubmit="" style="bagroundcolor:white;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="mb-3">

                                        <div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nom
                                                </label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Prenom
                                                </label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="numD"
                                                    placeholder="name@example.com" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Num Telephone
                                                </label>
                                                <input type="number" name="tele" class="form-control" id="numTel"
                                                    placeholder="0600000000" maxlength="10"
                                                    oninput="validatePhoneNumber()" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Services
                                                </label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Sélectionner votre services
                                                    </option>
                                                    <option value="1">Services Informatique</option>
                                                    <option value="2">Service Comptabilité</option>
                                                    <option value="3">Services Achat et logistique</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">CV
                                                </label>
                                                <input class="form-control form-control" id="formFileLg" type="file" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Une Demande de Stage
                                                </label>
                                                <input class="form-control form-control" id="formFileLg" type="file" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label"> Une assurance couvrant la période de stage
                                                </label>
                                                <input class="form-control form-control" id="formFileLg" type="file" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Une copie de la carte nationale d'identité (CIN)
                                                </label>
                                                <input class="form-control form-control-lg" id="formFileLg" type="file" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">  Pass sanitaire
                                                </label>
                                                <input class="form-control form-control" id="formFileLg" type="file" required>
                                            </div>

                                            <div class="">

                                                <div class="mb-3">
                                                    <input type="submit" class="form-control"
                                                        style="background-color:#077ec0;color: white;" id="numD"
                                                        name="ok" value="Validé">
                                                </div>
                                            </div>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> -->

                @if (Session::has('success'))
                    <script>
                        swal("Message", "{{ Session::get('success') }}", 'success', {
                            button: true,
                            button: "OK"
                        });
                    </script>
                @endif

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

                    <form method="POST" action="{{ route('addstage') }}" id="multi-step-form" style="Padding:30px;"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="step step-1">
                            <!-- Step 1 form fields here -->
                            <h3>Information Personnel : </h3>
                            <div class="mb-3">
                                <label class="form-label">Nom &nbsp;<span style="color:red">*</span>
                                </label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prénom&nbsp;<span style="color:red">*</span>
                                </label>
                                <input type="text" name="prenom" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email&nbsp;<span style="color:red">*</span></label>
                                <input type="email" name="email" class="form-control" id="numD"
                                    placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro de téléphone&nbsp;<span style="color:red">*</span>
                                </label>
                                <input type="tel" name="tele" class="form-control" id="numTel" placeholder="0600000000"
                                    maxlength="10" oninput="" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">&nbsp;Services<span style="color:red">*</span>
                                </label>
                                <select class="form-select" name="service" aria-label="Default select example" required>
                                    <option selected disabled>Sélectionner votre service</option>
                                    <!-- Division: Ingénierie & Investissements -->
                                    <optgroup label="Ingénierie & Investissements">
                                        <option value="Service Etude et Planification">Service Etude et Planification
                                        </option>
                                        <option value="Service Equipement en Réseau">Service Equipement en Réseau
                                        </option>
                                        <option value="Service Grands Travaux">Service Grands Travaux</option>
                                        <option value="Service S.I.G & Patrimoine">Service S.I.G & Patrimoine</option>
                                    </optgroup>
                                    <!-- Division: Exploitation Électricité -->
                                    <optgroup label="Exploitation Électricité">
                                        <option value="Service Exploitation Électricité Larache">Service Exploitation
                                            Électricité Larache</option>
                                        <option value="Service Exploitation Électricité Ksar El Kébir">Service
                                            Exploitation Électricité Ksar El Kébir</option>
                                        <option value="Service Mesures et Protection">Service Mesures et Protection
                                        </option>
                                    </optgroup>
                                    <!-- Division: Exploitation Eau et Assainissement -->
                                    <optgroup label="Exploitation Eau et Assainissement">
                                        <option value="Service Exploitation Eau et Assainissement Larache">Service
                                            Exploitation Eau et Assainissement Larache</option>
                                        <option value="Service Exploitation Eau et Assainissement Ksar El Kébir">Service
                                            Exploitation Eau et Assainissement Ksar El Kébir</option>
                                        <option value="Service Production Eau">Service Production Eau</option>
                                        <option value="Service Rendement">Service Rendement</option>
                                        <option value="Service Dépollution et Grands Ouvrages">Service Dépollution et
                                            Grands Ouvrages</option>
                                    </optgroup>
                                    <!-- Division: Commerciale & Clientèle -->
                                    <optgroup label="Commerciale & Clientèle">
                                        <option value="Service Développement Clientèle">Service Développement Clientèle
                                        </option>
                                        <option value="Service Facturation">Service Facturation</option>
                                        <option value="Service Recouvrement">Service Recouvrement</option>
                                        <option value="Service Comptage">Service Comptage</option>
                                    </optgroup>
                                    <!-- Division: Support -->
                                    <optgroup label="Support">
                                        <option value="Service Achat et Logistique">Service Achat et Logistique</option>
                                        <option value="Service Comptabilité & Finances">Service Comptabilité & Finances
                                        </option>
                                    </optgroup>
                                    <!-- Services Généraux -->
                                    <optgroup label="Services Généraux">
                                        <option value="Service Système d’Information">Service Système d’Information
                                        </option>
                                        <option value="Service Gestion des Ressources Humaines">Service Gestion des
                                            Ressources Humaines</option>
                                        <option value="Service Audit Interne">Service Audit Interne</option>
                                        <option value="Service Communication">Service Communication</option>
                                        <option value="Service Contrôle de Gestion">Service Contrôle de Gestion</option>
                                        <option value="Service Qualité Sécurité et Environnement">Service Qualité
                                            Sécurité et Environnement</option>
                                        <option value="Service Juridique et Assurances">Service Juridique et Assurances
                                        </option>
                                    </optgroup>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary next-step">Suivre</button>

                        </div>

                        <div class="step step-2">
                            <!-- Step 2 form fields here -->
                            <h3>les pièces joint : </h3>
                            <div class="mb-3">
                                <label class="form-label">CV
                                </label>
                                <input class="form-control form-control" name="cv" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Demande de Stage
                                </label>
                                <input class="form-control form-control" name="demande" id="formFileLg" type="file"
                                    required>
                            </div>
                            <!-- <div class="mb-3">
                                <label class="form-label"> Une assurance couvrant la période de stage
                                </label>
                                <input class="form-control form-control" name="assurance" id="formFileLg" type="file"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Une copie de la carte nationale
                                    d'identité
                                    (CIN)
                                </label>
                                <input class="form-control form-control" name="cin" id="formFileLg" type="file"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Pass sanitaire	

                                </label>
                                <input class="form-control form-control" id="formFileLg" name="passsanitaire"
                                    type="file" required>
                            </div> -->
                            <!-- recaptcha -->
                            <!-- 
                            <div class="mb-3">

                                <div class="g-recaptcha" data-sitekey="6LdVbykpAAAAAHkzC8BgWCLQ9p3ghZiZnKxRKck0"></div>
                            </div>
                             -->
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary next-step">Suivre</button>
                            </div>
                        </div>

                        <div class="step step-3">
                            <!-- Step 3 form fields here -->
                            <div class="thanks-message text-center" id="text-message">
                                <button type="submit" class="btn btn-primary">Envoyé</button>
                            </div>
                        </div>
                    </form>
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
        // Fonction pour afficher une étape spécifique
        function displayStep(stepNumber) {
            document.querySelectorAll('.step').forEach((step) => {
                step.style.display = 'none';
            });
            document.querySelector('.step-' + stepNumber).style.display = 'block';
        }

        // Fonction pour valider la première étape
        function validateStep1() {
            let valid = true;

            // Récupérer les champs du formulaire de la première étape
            const name = document.querySelector('input[name="name"]');
            const prenom = document.querySelector('input[name="prenom"]');
            const email = document.querySelector('input[name="email"]');
            const tele = document.querySelector('input[name="tele"]');
            const service = document.querySelector('select[name="service"]');

            // Vérification des champs obligatoires
            if (name.value.trim() === "") {
                valid = false;
                alert('le Nom est requis');
            }
            if (prenom.value.trim() === "") {
                valid = false;
                alert('le Prénom est requis');
            }
            if (email.value.trim() === "") {
                valid = false;
                alert('le Email est requis');
            }
            if (tele.value.trim() === "" || tele.value.length !== 10) {
                valid = false;
                alert('Le numéro de téléphone doit contenir 10 chiffres');
            }
            if (service.value === "Sélectionner votre service") {
                valid = false;
                alert('Veuillez sélectionner un service');
            }

            // Si tous les champs sont valides, on passe à l'étape suivante
            if (valid) {
                displayStep(2);
                updateProgressBar(2);
            }
        }

        // Fonction pour valider la deuxième étape
        function validateStep2() {
            let valid = true;

            // Récupérer les champs de fichiers de la deuxième étape
            const cv = document.querySelector('input[name="cv"]');
            const demande = document.querySelector('input[name="demande"]');
            const assurance = document.querySelector('input[name="assurance"]');
            const cin = document.querySelector('input[name="cin"]');
            const passsanitaire = document.querySelector('input[name="passsanitaire"]');

            // Vérification des fichiers obligatoires
            if (cv.files.length === 0) {
                valid = false;
                alert('Le CV est requis');
            }
            if (demande.files.length === 0) {
                valid = false;
                alert('La demande de stage est requise');
            }
            /* if (assurance.files.length === 0) {
                valid = false;
                alert('L\'assurance est requise');
            }
            if (cin.files.length === 0) {
                valid = false;
                alert('La copie de la CIN est requise');
            }
            if (passsanitaire.files.length === 0) {
                valid = false;
                alert('Le pass sanitaire est requis');
            } */

            // Si tous les fichiers sont fournis, on passe à l'étape suivante
            if (valid) {
                displayStep(3);
                updateProgressBar(3);
            }
        }

        // Mettre à jour la barre de progression
        function updateProgressBar(stepNumber) {
            const progressBar = document.querySelector('.progress-bar');
            let progressPercentage = (stepNumber - 1) * 50; // 0% for step 1, 50% for step 2, 100% for step 3
            progressBar.style.width = progressPercentage + '%';
            progressBar.setAttribute('aria-valuenow', progressPercentage);
        }

        // Script pour gérer la navigation entre les étapes
        document.addEventListener('DOMContentLoaded', function () {
            // Afficher la première étape par défaut
            displayStep(1);

            // Écouteur pour le bouton "Suivre" de la première étape
            document.querySelector('.step-1 .next-step').addEventListener('click', function (e) {
                e.preventDefault();
                validateStep1(); // Valider et aller à l'étape 2 si validé
            });

            // Écouteur pour le bouton "Suivre" de la deuxième étape
            document.querySelector('.step-2 .next-step').addEventListener('click', function (e) {
                e.preventDefault();
                validateStep2(); // Valider et aller à l'étape 3 si validé
            });
        });
    </script>


    <!--   <script>
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
            $('#multi-step-form').find('.step').slice(1).hide();

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
    -->




</body>

</html>
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
    <style>
        body {
            font-family: Arial;
            font-size: 22px;
        }

        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(https://www.orientation.com/articles/wp-content/uploads/2020/07/trouver-un-stage-8-etapes.jpg) center center no-repeat;
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
    <!-- Spinner Start -->
    <div class="container-fluid  py-2 d-none d-md-flex" style="background: #077ec0;">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white"><i class="fas fa-envelope text-white"></i><a
                            href="mailto:info@Radeel.com" style="color:white">info@Radeel.com</a></small>
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
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle">
                        <i class="fab fa-facebook-f" style="color: #077ec0;"></i></a>&nbsp;&nbsp;
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle">
                        <i class="fab fa-twitter" style="color: #077ec0;"></i></a>&nbsp;&nbsp;
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle">
                        <i class="fab fa-instagram" style="color: #077ec0;font-weight: 900;"></i>
                    </a>&nbsp;&nbsp;
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0">
                        <i class="fab fa-linkedin-in" style="color: #077ec0;"></i></a>&nbsp;&nbsp;
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0">
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
            font-size: 30px;
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
            font-family: Arial, Helvetica, sans-serif;
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
            font-size: 28px;
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
                <a href="index.php" class="navbar-brand">
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
                    <li><a class="nav-link scrollto active"href="index.php">Acceuil</a></li>
                    <li class="dropdown"><a href="#"><span>RADEEL</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="MotDirecteur.php" class="dropdown-item">Mots du Directeur Général</a></li>
                            <li><a href="StructureRadeel.php" class="dropdown-item">Structure RADEEL</a></li>
                            <li><a href="Activite.php" class="dropdown-item">Activité </a></li>
                            <li><a href="agences.php" class="dropdown-item">Nos Agences </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>ESPACE CLIENT</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="paiement.php" class="dropdown-item">Paiement en ligne</strong></a></li>
                            <li><a href="Abonnement.php" class="dropdown-item">Particulier</a></li>
                            <li><a href="reclamation.php" class="dropdown-item">Reclamation</a></li>
                            <li><a href="GrosAbonnee.php" class="dropdown-item">Gros abonnnees </a></li>
                            <li><a href="Autre.php" class="dropdown-item">Guide client </a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>ESPACE RH</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="loi.php" class="dropdown-item">Loi cadre</a></li>
                            <li><a href="avis.php" class="dropdown-item">Avis de recrutement</a></li>
                            <li><a href="stage.php" class="dropdown-item">Stages </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Fournisseurs</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="AppelOffre.php" class="dropdown-item">Appel d'offre</a></li>
                            <li><a href="Reglement.php" class="dropdown-item">Regelement</a></li>
                            <li><a href="ResultatOffre.php" class="dropdown-item">Resultat d'offre</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>PRATIQUE</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="galerie.php" class="dropdown-item">Galerie</a></li>
                            <li><a href="bureau.php" class="dropdown-item">Bureau digitale</a></li>
                            <li><a href="couper.php" class="dropdown-item">Avis d'interruption </a></li>
                            <li><a href="actualité.php" class="dropdown-item">Actualite</a></li>
                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="index.php #contact">Contact</a></li>
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

    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                Abonnement et Raccordement
            </h1>
        </div>
    </div>

    <!-- contente  -->

    <div class="container-fluid gallery py-5 my-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h1 class="mb-4">Info Abonnement et Raccordement</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti
                eum cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1"
                        style=" background-color: #077ec0;">
                        <span class="" style="width: 150px; color:white;">Abonnement</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border  rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2"
                        style=" background-color: #077ec0;">
                        <span class="" style="width: 150px; color:white">Raccordement</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">

                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Branchement Neuf
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <h2 class="mb-0 text" style="color: #077ec0;">Branchement Neuf
                                                    </h2>
                                                    <p class="text-start">
                                                        Si votre habitation n’a jamais été branchée aux réseaux d’eau
                                                        potable,
                                                        d’assainissement liquide et d’électricité, veuillez vous rendre
                                                        aux agences
                                                        de la RADEEL muni des pièces suivantes :
                                                    <ul class="text-start">
                                                        <li>Demande de branchement</li>
                                                        <li>Copie de la carte d’identité nationale( C.I.N)</li>
                                                        <li>Copie du plan approuvée par les autorités compétentes de
                                                            l’habitation à
                                                            raccorder</li>
                                                        <li>Copie légalisée de l’acte de propriété</li>
                                                        <li>Autorisation du propriétaire signée et légalisée</li>
                                                        <li>Copie légalisée de l’autorisation de construire</li>
                                                        <li>Copie légalisée du permis d’habiter et un certificat du
                                                            disjoncteur
                                                            différentiel dans le cas d’un branchement en électricité
                                                        </li>
                                                    </ul>
                                                    </p>
                                                    <h3 class=" text" style="color: #077ec0;">Procédure:</h3>
                                                    <p class="text-start">
                                                        A la suite du dépôt de votre dossier, un agent de la RADEEL se
                                                        rendra sur
                                                        lieu pour faire l’étude et établir un devis. Après paiement du
                                                        devis, la
                                                        RADEEL procède à la satisfaction de votre demande.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Branchement Provisoire
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <h2 class="mb-0 text" style="color: #077ec0;"> Branchement
                                                        Provisoire</h2>
                                                    <p class="text-start">
                                                        Pour brancher provisoirement votre habitation en électricité
                                                        afin
                                                        d’effectuer des travaux de finition, veuillez vous rendre aux
                                                        agences de la
                                                        RADEEL muni des pièces suivantes :
                                                    <ul class="text-start">
                                                        <li>Une demande de branchement provisoire dans laquelle vous
                                                            précisez la
                                                            nature des travaux à effectuer, l’adresse et la durée du
                                                            branchement
                                                        </li>
                                                        <li>Autorisation du Propriétaire signée et légalisée</li>
                                                        <li>Copie de la carte d’identité(C.I.N)</li>
                                                        <li>Copie légalisée de l’acte de propriété</li>
                                                    </ul>
                                                    </p><br>
                                                    <h3 class=" text" style="color: #077ec0;">Procédure:</h3>
                                                    <p class="text-start">
                                                        A la suite du dépôt de votre dossier, un agent de la RADEEL se
                                                        rendra sur
                                                        lieu pour faire l’étude et établir un devis. </p>
                                                    <p class="text-start">Après paiement du devis, la RADEEL procède à
                                                        la satisfaction de
                                                        votre
                                                        demande.</p>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Déplacement de compteur
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <h2 class="mb-0 text" style="color: #077ec0;">Déplacement de
                                                        compteur</h2>
                                                    <p class="text-start">
                                                        Pièces à fournir :
                                                    <ul class="text-start">
                                                        <li>Demande de déplacement</li>
                                                        <li>Facture d’eau pour le déplacement du compteur eau</li>
                                                        <li>Facture d’électricité pour le déplacement du compteur
                                                            électricité</li>
                                                        <li>Copie de la carte d’identité nationale(C.I.N)</li>
                                                    </ul>
                                                    </p><br>
                                                    <h3 class=" text" style="color: #077ec0;">Procédure:</h3>
                                                    <p class="text-start">
                                                        A la suite du dépôt de votre dossier, un agent de la RADEEL se
                                                        rendra sur
                                                        lieu pour faire l’étude et établir un devis.</p>
                                                    <p class="text-start">Après paiement du devis, la RADEEL procède à
                                                        la satisfaction de
                                                        votre
                                                        demande..</p>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="true" aria-controls="collapseFour">
                                                    La demande en ligne
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <button type="button"
                                                        style="background-color:#077ec0; color:white" class="btn btn"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                        Saisie votre La demande
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQs Start -->
                </div>
                <div id="GalleryTab-2" class="tab-pane fade show p-0">

                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Abonnement suite à un nouveau branchement
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <h2 class="mb-0 text" style="color: #077ec0;">Abonnement suite à
                                                        un
                                                        nouveau branchement:</h2>
                                                    <p class="text-start">
                                                        Après paiement du branchement définitif de votre habitation,
                                                        vous avez le
                                                        droit de souscrire un contrat
                                                        d’abonnement
                                                    </p><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Abonnement suite à un contrat résilié
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <h2 class="mb-0 text" style="color: #077ec0;">Abonnement suite à
                                                        un
                                                        contrat
                                                        résilié:</h2>
                                                    <p class="text-start">
                                                        Vous venez d’occuper une habitation qui est déjà branchée aux
                                                        réseaux d’eau
                                                        potable, d’assainissement
                                                        liquide et d’électricité mais les contrats d’abonnement sont
                                                        résiliés,
                                                        veuillez vous rendre aux agences de
                                                        la RADEEL muni des pièces suivantes :
                                                    <ul class="text-start">
                                                        <li>Copie de la carte d’identité nationale(C.I.N)</li>
                                                        <li>Copie de l’acte de propriété</li>
                                                        <li>Autorisation du propriétaire signée et légalisée</li>
                                                        <li>Justificatif du contrat résilié</li>
                                                    </ul>
                                                    </p><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Changement de nom
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <h2 class=" text" style="color: #077ec0;">Changement de nom</h2>
                                                    <p class="text-start">
                                                        Vous venez d’occuper une habitation qui est déjà branchée aux
                                                        réseaux d’eau
                                                        potable, d’assainissement
                                                        liquide et d’électricité et les contrats d’abonnement sont
                                                        toujours
                                                        courants. Pour changer le contrat
                                                        d’abonnement en votre nom, veuillez vous rendre aux agences de
                                                        la RADEEL
                                                        muni des pièces suivantes :
                                                    <ul class="text-start">
                                                        <li>Copie de la carte d’identité nationale(C.I.N)</li>
                                                        <li>Copie de l’acte de propriété</li>
                                                        <li>Autorisation du propriétaire signée et légalisée</li>
                                                        <li>Facture d’eau et(ou) d’électricité</li>
                                                    </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="true" aria-controls="collapseFour">
                                                    Demande de raccordement
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <button type="button"
                                                        style="background-color:#077ec0; color:white" class="btn btn"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">
                                                        Saisie votre demande
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQs Start -->

                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->



    <!-- prompt -->

    <!-- prompt formulaire Branchement -->
    <div class="modal fade" id="exampleModalCenter" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div id="container" class="container mt-5">
                    <div class="progress px-1" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="step-container d-flex justify-content-between">
                        <div class="step-circle" onclick="displayStep(1)">1</div>
                        <div class="step-circle" onclick="displayStep(2)">2</div>
                        <div class="step-circle" onclick="displayStep(3)">3</div>
                    </div>

                    <form method="POST" action="manupilation.php" onsubmit="return validateForm()"
                        id="multi-step-form" style="Padding:30px;">
                        <div class="step step-1">
                            <!-- Step 1 form fields here -->
                            <h3>Les informations de la demande d'abonnement : </h3>
                            <div class="mb-3">
                                <label class="form-label">Gérance <span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1" selected>Eau</option>
                                    <option value="2">électricité</option>
                                    <option value="3">Eau et électricité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Type abonnement<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="type-abon">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Suite à un nouveau branchement
                                    </option>
                                    <option value="2">Suite à un contrat résilié </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse d'abonnement demandé <span
                                        style="color:red;">*</span>
                                </label>
                                <input type="text" class="form-control" required><br>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected>Larache
                                    </option>
                                    <option value="1">khmis Sahel</option>
                                    <option value="2">Aouamra</option>
                                    <option value="3">Ksar El Kébir</option>
                                </select>
                            </div>
                            <h3>Information du bénéficiare : </h3>
                            <div class="mb-3">
                                <label class="form-label">Client<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Particuliers
                                    </option>
                                    <option value="2">Professionnels et commerçants </option>
                                    <option value="3">Gros Abonnés </option>
                                    <option value="4">Administrations et offices</option>
                                    <option value="5">Promoteurs et lotisseurs </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statut<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="personne">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Personne Physique
                                    </option>
                                    <option value="2">Personne morale</option>
                                </select>
                            </div>
                            <div class="mb-3" id="physique">
                                <label class="form-label">Nature demandeur<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Propriétaire
                                    </option>
                                    <option value="2">Locataire</option>
                                    <option value="3">Propiété de la municipalité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Nom et Prénom <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="Nom & prénom"
                                    required><br>
                            </div>
                            <div class="mb-3" id="morale">
                                <label class="form-label">Raison Sociale </label><span style="color:red;">*</span>
                                <input class="form-control form-control" type="text" required>
                            </div>
                            <div class="mb-3" id="morale1">
                                <label class="form-label">Numéro registre de commerce </label><span
                                    style="color:red;">*</span>
                                <input class="form-control form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro CIN du gérant<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro Téléphone<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" type="tel" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Email<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Addresse de correspondance<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="addresse"
                                    required><br>
                                <input class="form-control form-control" type="text" placeholder="ville" required>
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
                                (si vous ne diposer pas de ces piéces en format électronique veuillez les présenter au
                                siege de la RADEEL)
                                <br>
                                les extensions autorisés : png, jpg, pdf <br>
                                Taille maximale de fichier : 3MB
                            </p>
                            <div class="mb-3">
                                <label class="form-label">CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Justification d'occupation du local<span
                                        style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="branchement">
                                <label class="form-label"> Reçu de devis branchement
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="branchement1">
                                <label class="form-label"> Permis d'habiter
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="contract">
                                <label class="form-label">Quittance de résiliation
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="morale2">
                                <label class="form-label"> Statut d'entité
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="morale3">
                                <label class="form-label"> Registre de commerce
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2" required> je confirme ma
                                    demande
                                    d'abonnement et que les rensignements fournis sont exacts .
                                </label>

                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2" required> J'ai lu et
                                    j'accepte les
                                    conditions générales d'utilisation
                                </label>

                            </div>
                            <div class="mb-3">

                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2" required> Je donne mon
                                    accord au
                                    traitement de mes données personnelles
                                </label>
                                <p>Conformément à la loi N°09-08,vous bénéficiez d'une droit d'accès , de rectification
                                    et d'opposition aux traitement de vos données personnelles à la RADEEL .</p>
                            </div>
                            <!-- recaptcha -->
                            <!-- <div class="mb-3">

                                <div class="g-recaptcha" data-sitekey="6LdVbykpAAAAAHkzC8BgWCLQ9p3ghZiZnKxRKck0"></div>
                            </div> -->
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary prev-step">Retour</button>
                                <button type="submit" class="btn btn-primary "
                                    data-dismiss="modal">Terminer</button>
                            </div>
                        </div>

                        <div class="step step-3">
                            <h2>votre demande est bien reçu .</h2>
                            <p>l'équipe de la Radeel va traiter votre demande le plus vite possible.</p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- prompt formulaire Raccordement -->
    <div class="modal fade" id="exampleModalCenter1" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div id="container" class="container mt-5">
                    <div class="progress px-1" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="step-container d-flex justify-content-between">
                        <div class="step-circle" onclick="displayStep(1)">1</div>
                        <div class="step-circle" onclick="displayStep(2)">2</div>
                        <div class="step-circle" onclick="displayStep(3)">3</div>
                    </div>

                    <form method="POST" action="" onsubmit="" id="multi-step-form1" style="Padding:30px;">
                        <div class="step step-1">
                            <!-- Step 1 form fields here -->
                            <h3>Les informations de la demande de raccordement : </h3>
                            <div class="mb-3">
                                <label class="form-label">Gérance <span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1" selected>Eau</option>
                                    <option value="2">électricité</option>
                                    <option value="3">Eau et électricité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Type de Raccordement<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="type-abon">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Branchement neuf
                                    </option>
                                    <option value="2">Augmentation de puissance(Ajouter un Compteur)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse d'abonnement demandé <span
                                        style="color:red;">*</span>
                                </label>
                                <input type="text" class="form-control" required><br>
                                <select class="form-select" aria-label="Default select example" required>
                                    <option selected>Larache
                                    </option>
                                    <option value="1">khmis Sahel</option>
                                    <option value="2">Aouamra</option>
                                    <option value="3">Ksar El Kébir</option>
                                </select>
                            </div>
                            <h3>Information du bénéficiare : </h3>
                            <div class="mb-3">
                                <label class="form-label">Client<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Particuliers
                                    </option>
                                    <option value="2">Professionnels et commerçants </option>
                                    <option value="3">Gros Abonnés </option>
                                    <option value="4">Administrations et offices</option>
                                    <option value="5">Promoteurs et lotisseurs </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statut<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="personne2">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Personne Physique
                                    </option>
                                    <option value="2">Personne morale</option>
                                </select>
                            </div>
                            <div class="mb-3" id="physique1">
                                <label class="form-label">Nature demandeur<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="1">Propriétaire
                                    </option>
                                    <option value="2">Locataire</option>
                                    <option value="3">Propiété de la municipalité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Nom et Prénom <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="Nom & prénom"
                                    required><br>
                            </div>
                            <div class="mb-3" id="RacMorale5">
                                <label class="form-label">Raison Sociale </label><span style="color:red;">*</span>
                                <input class="form-control form-control" type="text" required>
                            </div>
                            <div class="mb-3" id="Racmorale">
                                <label class="form-label">Numéro registre de commerce </label><span
                                    style="color:red;">*</span>
                                <input class="form-control form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro CIN du gérant<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro Téléphone<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" type="tel" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Email<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> Addresse de correspondance<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="addresse"
                                    required><br>
                                <input class="form-control form-control" type="text" placeholder="ville" required>
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
                                (si vous ne diposer pas de ces piéces en format électronique veuillez les présenter au
                                siege de la RADEEL)
                                <br>
                                les extensions autorisés : png, jpg, pdf <br>
                                Taille maximale de fichier : 3MB
                            </p>
                            <div class="mb-3">
                                <label class="form-label">CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Justification d'occupation du local<span
                                        style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="RacMorale2">
                                <label class="form-label"> Autorisation de construction
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="RacMorale1">
                                <label class="form-label">Plan approuvé
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>

                            <div class="mb-3" id="RacMorale3">
                                <label class="form-label"> Statut d'entité
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3" id="RacMorale4">
                                <label class="form-label"> Registre de commerce
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" required>
                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2" required> je confirme ma
                                    demande
                                    d'abonnement et que les rensignements fournis sont exacts .
                                </label>

                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2" required> J'ai lu et
                                    j'accepte les
                                    conditions générales d'utilisation
                                </label>

                            </div>
                            <div class="mb-3">

                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2" required> Je donne mon
                                    accord au
                                    traitement de mes données personnelles
                                </label>
                                <p>Conformément à la loi N°09-08,vous bénéficiez d'une droit d'accès , de rectification
                                    et d'opposition aux traitement de vos données personnelles à la RADEEL .</p>
                            </div>
                            <!-- recaptcha -->
                            <!-- <div class="mb-3">

                                <div class="g-recaptcha" data-sitekey="6LdVbykpAAAAAHkzC8BgWCLQ9p3ghZiZnKxRKck0"></div>
                            </div> -->
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary prev-step">Retour</button>
                                <button type="submit" class="btn btn-primary "
                                    data-dismiss="modal">Terminer</button>
                            </div>
                        </div>

                        <div class="step step-3">
                            <h2>votre demande est bien reçu .</h2>
                            <p>l'équipe de la Radeel va traiter votre demande le plus vite possible.</p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid footer wow fadeIn" data-wow-delay=".3s" style="background: #077ec0;">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.php">
                        <h1 class="text-white fw-bold d-white">RADEEL </h1>
                    </a>
                    <p class="mt-4 text-light">
                        La régie autonome intercommunale de distribution d’eau et d’électricité de la Province de
                        Larache</p>
                    <div class="d-flex hightech-link">
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2">
                            <i class="fab fa-facebook-f " style="color:#077ec0;"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2">
                            <i class="fab fa-twitter " style="color:#077ec0;"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2">
                            <i class="fab fa-instagram " style="color:#077ec0;"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0">
                            <i class="fab fa-linkedin-in " style="color:#077ec0;"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-white">Pages </a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="index.php" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="background: #077ec0;"></i>RADEEL</a>
                        <a href="#contactID" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="background: #077ec0;"></i>Contact</a>
                        <a href="Abonnee.php" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="background: #077ec0;"></i>Espaces clients</a>
                        <a href="loi.php" class="mb-2 text-white"><i class="fas fa-angle-right text- me-2"
                                style="background: #077ec0;"></i>Espaces RH</a>
                        <a href="Reglement.php" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="background: #077ec0;"></i>Fournisseurs</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="index.php" class="h3 text-white">Liens utiles</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="background: #077ec0;"></i>Mentions légales</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="index.php #contactID" class="h3 text-white">Contacter nous</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="https://www.google.com/maps/dir/35.1801715,-6.1420956/radeel/@35.1734126,-6.150075,16z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0xd0bc947c5cd4efd:0x39b8205ae5d8018d!2m2!1d-6.141061!2d35.1677008?entry=ttu"
                            class="pb-3 text-light border-bottom border-primary"><i
                                class="fas fa-map-marker-alt text me-2" style="background: #077ec0;"></i>N, BP:11,
                            1647 Lotisment larache</a>
                        <a href="tel:08 01 00 00 42" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-phone-alt text me-2" style="background: #077ec0;"></i>0801 000 042</a>
                        <a href="mailto:radeel@radeel.com" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-envelope text me-2" style="background: #077ec0;"></i>
                            info@radeel.com</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-home text me-2" style="background: #077ec0;"></i>Lun-Ven 8:00 -
                            16:30</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light text-center"><a href="#" class="text-center"><i
                                class="fas fa-copyright "> Copyright @2023</i></a>, All right reserved by Radeel</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

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
        jQuery(document).ready(function() {
            $('#modalIndex').modal('show')
        });
    </script>
    <script>
        $("#type-abon").change(function() {
            if ($(this).val() === "1") {
                $("#branchement").show();
                $("#branchement1").show();
                $("#contrat").hide();

            } else {
                $("#branchement").hide();
                $("#branchement1").hide();
                $("#contrat").show();
            }
        });
        $("#personne").change(function() {
            if ($(this).val() === "1") {
                $("#physique").show();
                $("#contrat").show();
                $("#morale").hide();
                $("#morale1").hide();
                $("#morale2").hide();
                $("#morale3").hide();

            } else {
                $("#physique").hide();
                $("#contrat").hide();
                $("#morale").show();
                $("#morale1").show();
                $("#morale2").show();
                $("#morale3").show();
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

        $(document).ready(function() {
            $("#branchement").hide();
            $("#branchement1").hide();
            $("#contrat").hide();
            $("#physique").hide();
            $("#contrat").hide();
            $("#morale").hide();
            $("#morale1").hide();
            $("#morale2").hide();
            $("#morale3").hide();
            $('#multi-step-form').find('.step').slice(1).hide();

            $(".next-step").click(function() {
                if (currentStep < 3) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                    currentStep++;
                    setTimeout(function() {
                        $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInRight");
                        updateProgressBar();
                    }, 500);
                }
            });

            $(".prev-step").click(function() {
                if (currentStep > 1) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                    currentStep--;
                    setTimeout(function() {
                        $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInLeft");
                        updateProgressBar();
                    }, 500);
                }
            });

            updateProgressBar = function() {
                var progressPercentage = ((currentStep - 1) / 2) * 100;
                $(".progress-bar").css("width", progressPercentage + "%");
            }
        });
    </script>
    <script>
        $("#personne2").change(function() {
            if ($(this).val() === "1") {
                $("#physique1").show();
                $("#RacMorale1").hide();
                $("#RacMorale2").hide();
                $("#RacMorale3").hide();
                $("#RacMorale4").hide();
                $("#RacMorale5").hide();
                $("#RacMorale").hide();

            } else {
                $("#physique1").hide();
                $("#RacMorale1").show();
                $("#RacMorale2").show();
                $("#RacMorale3").show();
                $("#RacMorale4").show();
                $("#RacMorale5").show();
                $("#RacMorale").show();
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

        $(document).ready(function() {
            $("#physique1").hide();
            $("#RacMorale1").hide();
            $("#RacMorale2").hide();
            $("#RacMorale3").hide();
            $("#RacMorale4").hide();
            $("#RacMorale5").hide();
            $("#RacMorale").hide();
            $('#multi-step-form1').find('.step').slice(1).hide();

            $(".next-step").click(function() {
                if (currentStep < 3) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                    currentStep++;
                    setTimeout(function() {
                        $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInRight");
                        updateProgressBar();
                    }, 500);
                }
            });

            $(".prev-step").click(function() {
                if (currentStep > 1) {
                    $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                    currentStep--;
                    setTimeout(function() {
                        $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                        $(".step-" + currentStep).show().addClass(
                            "animate__animated animate__fadeInLeft");
                        updateProgressBar();
                    }, 500);
                }
            });

            updateProgressBar = function() {
                var progressPercentage = ((currentStep - 1) / 2) * 100;
                $(".progress-bar").css("width", progressPercentage + "%");
            }
        });
    </script>

</body>

</html>

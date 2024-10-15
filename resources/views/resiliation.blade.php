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
 {{-- Alert --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
 integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(https://cdn.centre-inffo.fr/content/uploads/2021/05/reclamation.jpg) center center no-repeat;
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
                    <li><a class="nav-link scrollto " href="{{ url('../') }}">ACCUEIL</a></li>
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
                    <li class="dropdown "><a href="#" class="active"><span>ESPACE CLIENT</span> <i class="bi bi-chevron-down"></i></a>
                        <ul >
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Résiliation </h1>
        </div>
    </div>
    <div class="container " bis_skin_checked="1">
        <div class="container " bis_skin_checked="1" style="background-color:#ffff">
            <div class="row">
                <div class="col">
                <br><br>
            <h1 style="color:#077ec0">Dépôt de résiliation </h1>
            <p>
                Vous venez de vendre votre habitation ou de changer votre location, il est dans votre intérêt de résilier votre contrat d’abonnement. Pour procéder à la résiliation, veuillez vous rendre aux agences de la RADEEL muni des pièces suivantes :</p>
            <ul style="margin: 20px; font-size: 20px; line-height:30px; color:#4D4D4D; font-family: 'Arial';">
                <i class="fa fa-check  me-3" style="color:#077ec0;padding-left:20px;"></i>Demande de résiliation <a href="./img/Demande-de-Resiliation.pdf">(télécharger)</a></br>
                 <i class="fa fa-check  me-3" style="color:#077ec0;padding-left:20px;"></i>Dernière facture d’eau et(ou)d’électricité</br>
                <i class="fa fa-check  me-3" style="color:#077ec0;padding-left:20px;"></i>Contrat d’abonnement</br>
                 <i class="fa fa-check  me-3" style="color:#077ec0;padding-left:20px;"></i>Copie de la carte d’identité nationale(C.I.N)</br>
                 <i class="fa fa-check  me-3" style="color:#077ec0;padding-left:20px;"></i>Résiliation d'abonnement par la régie</br>
            </ul>
            <p>
                Si la situation d’un client enregistre un nombre de trois quittances non payées, la RADEEL procède à la coupure d’eau et(ou)d’électricité. Dans un délai de 15 jours, si le client ne réagit pas, la régie dépose le compteur. 15 jours après, si le client ne régularise pas sa situation, la régie procède à la résiliation du contrat d’abonnement.
            </p>
            <button type="button" style="background-color:#7DB41E; color: white;padding:15px;font-size:20px;" class="btn btn"
                data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                <i class="fab fa-wpforms" ></i> Saisie votre demande de résiliation
            </button>
                </div>
                <div class="col">
                    <br>
                <img
                                src="img/resiliation2.png"
                                style="background-size:
                                    cover;background-repeat:
                                    no-repeat;background-position: right;" width="100%">
                </div>
           
            </div>
        </div>
        <br><br>
    </div>
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

    <!-- prompt formulaire -->
    <div class="modal fade" id="exampleModalCenter" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-image: url(img/202.png);">
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

                    <form method="post" action="{{ route('addresul') }}" id="multi-step-form" style="Padding:30px;"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="step step-1">
                            <!-- Step 1 form fields here -->
                            <h3>Les informations de la demande de résiliation : </h3>
                            <div class="mb-3">
                                <label class="form-label">Gérance <span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="gerance">
                                    <option selected>selectionner votre gérance
                                    </option>
                                    <option value="eau">Eau</option>
                                    <option value="électricité">électricité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">N° Police <span style="color:red;">*</span>
                                </label>
                                <input type="text" class="form-control" name="numPolice">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse de résiliation demandé <span
                                        style="color:red;">*</span>
                                </label>
                                <input type="text" class="form-control" name="addressRD"><br>
                                <select class="form-select" aria-label="Default select example" name="province">
                                    <option selected value="Larache">
                                        Larache
                                    </option>
                                    <option value="khmis sahel">khmis Sahel</option>
                                    <option value="Aouamra">Aouamra</option>
                                    <option value="Ksar El Kébir">Ksar El Kébir</option>
                                </select>
                            </div>
                            <h3>Information du bénéficiare : </h3>
                            <div class="mb-3">
                                <label class="form-label">Statut<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="personne"
                                    name="status">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="physique">Personne physique
                                    </option>
                                    <option value="morale">Personne morale </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Nom et Prénom <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="Nom & prénom"
                                    name="namecomplete"><br>
                            </div>
                            <div class="mb-3" id="morale">
                                <label class="form-label">Raison Sociale </label><span style="color:red;">*</span>
                                <input class="form-control form-control" type="text" name="raison">
                            </div>
                            <div class="mb-3" id="moralee">
                                <label class="form-label">Numéro CIN du gérant<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" name="cingerant" type="text">
                            </div>
                            <div class="mb-3" id="physiqueCIN">
                                <label class="form-label">Numéro CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" name="cingerant" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro Téléphone<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" type="tel" name="tele">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Email<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Numéro de compte Bancaire </label><span
                                    style="color:red;">*</span>
                                <input class="form-control form-control" type="text" name="numCB">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Addresse de correspondance<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="addresse"
                                    name="adressCorres"><br>
                                <input class="form-control form-control" type="text" placeholder="ville"
                                    name="ville">
                            </div>
                            <!-- recaptcha -->
                            <!-- <div class="mb-3">

                                <div class="g-recaptcha" data-sitekey="6LdVbykpAAAAAHkzC8BgWCLQ9p3ghZiZnKxRKck0"></div>
                            </div> -->

                            <button type="button" class="btn btn-primary next-step">Continuer</button>

                        </div>

                        <div class="step step-2">
                            <!-- Step 2 form fields here -->
                            <h3>les pièces à joindre : </h3>
                            <p style="color:red; text-align:center;">
                                (si vous ne diposer pas de ces piéces en format électronique veuillez les présenter au
                                siege de la RADEEL)
                                <br>
                                les extensions autorisés : png, jpg, pdf <br>
                                Taille maximale de fichier : 3MB
                            </p>
                            <div class="mb-3" id="physiquecin">
                                <label class="form-label">CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="cin">
                            </div>
                            <div class="mb-3" id="morale22">
                                <label class="form-label">CIN de gérant<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="cin">
                            </div>
                            <div class="mb-3" id="morale2">
                                <label class="form-label">Demande de résiliation cachetée<span
                                        style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="Dresiliation">
                            </div>
                            <div class="mb-3" id="Contratfile">
                                <label class="form-label"> Contrat
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="Contrat">
                            </div>
                            <div class="mb-3" id="RIBfile">
                                <label class="form-label">Attestation de RIB
                                </label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file"
                                    name="RIB">
                            </div>
                            <div class="mb-3" >
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2" > Je confirme que je suis
                                    autorisé
                                    à faire cette demande de Résiliation et que les reseignements fournis sont exacts.
                                </label>

                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2"> J'ai lu et j'accepte les
                                    conditions générales d'utilisation
                                </label>

                            </div>
                            <div class="mb-3">
                                <label for="checkbox1">
                                    <input type="checkbox" id="ch2" name="ch2"> Je donne mon accord au
                                    traitement de mes données personnelles
                                </label>
                            </div>
                            <!-- recaptcha -->
                            <!-- <div class="mb-3">

                                <div class="g-recaptcha" data-sitekey="6LdVbykpAAAAAHkzC8BgWCLQ9p3ghZiZnKxRKck0"></div>
                            </div> -->

                            <div class="mb-3">
                                <button type="button" class="btn btn-primary prev-step">Retour</button>
                                <button type="button" class="btn btn-primary next-step">Continuer</button>

                            </div>
                        </div>
                        <div class="step step-3">
                            <button type="submit" class="btn "
                                style="background-color:#077ec0;color:white; margin-left: 200px">Envoyé</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contenu -->
        <!-- Footer End -->
    
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
        jQuery(document).ready(function() {
            $('#modalIndex').modal('show')
        });
    </script> <!-- Footer End -->
    <script>
        $("#personne").change(function() {
            if ($(this).val() === "morale") {
                $("#morale").show();
                $("#moralee").show();
                $("#morale2").show();
                $("#morale22").show();
                $("#physiquecin").hide();

            } else {
                $("#morale").hide();
                $("#moralee").hide();
                $("#morale2").hide();
                $("#morale22").hide();
                $("#physiquecin").show();

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
            $("#morale").hide();
            $("#morale2").hide();
            $("#morale22").hide();
             $("#physiquecin").hide();
             $("#moralee").hide();
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
    <!-- Footer End -->
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
</body>

</html>
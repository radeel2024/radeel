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

    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>


    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/Cover2.png) center center no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
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

        .mb-3 {
            color: ;
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


    <!-- Navbar Start -->

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
                            <a href="{{ url('../') }}" class="nav-item  dropdown-toggle"
                                data-bs-toggle="dropdown">RADEEL</a>
                            <div class="dropdown-menu ">
                                <a href="{{ url('../Quisommenous') }}" class="dropdown-item">Qui sommes-nous</a>
                                <a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur</a>
                                <a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Organigramme de la
                                    RADEEL</a>
                                <a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités</a>
                                <a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle active"
                                data-bs-toggle="dropdown">ESPACE CLIENT</a>
                            <div class="dropdown-menu">
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
                            <div class="dropdown-menu ">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class=" dropdown-toggle nav-item "
                                data-bs-toggle="dropdown">FOURNISSEURS</a>
                            <div class="dropdown-menu ">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item  dropdown-toggle"
                                data-bs-toggle="dropdown">PRATIQUE</a>
                            <div class="dropdown-menu">
                                <a href="{{ url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a>
                                <a href="{{ url('../stress') }}" class="dropdown-item">Stress Hydrique </a>
                                <a href="{{ url('../galerie') }}" class="dropdown-item">Galerie / Audiovisual</a>
                                <a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a>
                                <a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a>
                            </div>
                        </div>

                        <a href="{{ url('../') }}#contact" class="nav-item nav-link">CONTACT</a>
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                Particuliers
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
            border-left-color: rgb(155, 187, 89);
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
            color: white;
            text-align: center;
            font-size: 20px;
            line-height: 30px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 py-4">
                <div class="nav flex-column nav-pills vertical-tabs" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <button class="nav-link active text-center" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Raccordement</button>
                    <button class="nav-link text-center" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Abonnement</button>
                    <button class="nav-link text-center" id="v-pills-resiliation-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-resiliation" type="button" role="tab"
                        aria-controls="v-pills-resiliation" aria-selected="false">Résiliation</button>
                    <button class="nav-link text-center" id="v-pills-message-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-message" type="button" role="tab" aria-controls="v-pills-message"
                        aria-selected="false">Factures</button>
                </div>
            </div>

            <div class="col-md-9 py-3">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Raccordement -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="container mt-3">
                            <div id="accordion">
                                <!-- branchement neuf -->
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne1">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Branchement neuf
                                        </div>
                                    </a>
                                    <div id="collapseOne1" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-start">
                                                Pour toute nouvelle demande de branchement
                                                d’eau, d’assainissement liquide et d’électricité, veuillez vous
                                                présenter
                                                aux agences de la RADEEL muni des pièces suivantes :
                                            </p>
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Formulaire de
                                                branchement rempli <a href="./img/Demande-de-Branchement.pdf"
                                                target="_blank">(télécharger)</a><br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie de la carte
                                                d’identité (C.I.N, Carte de séjour ou passeport pour les personnes
                                                physiques)<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie des statuts
                                                et extrait de registre de commerce, ICE et CIN du gérant pour les
                                                personnes morales<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie de titre de
                                                propriété ou tout document justifiant la propriété<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie des plans de
                                                construction approuvés par les autorités compétentes<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie de
                                                l'autorisation de construction<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie
                                                d'autorisation spéciale délivrée par l'autorité compétente si le
                                                demandeur ne dispose pas de l'autorisation de construction et des
                                                plans.<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- branchement provisoire -->
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo1">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Branchement provisoire
                                        </div>
                                    </a>
                                    <div id="collapseTwo1" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p class="text-start">
                                                Pour brancher provisoirement votre habitation en électricité afin
                                                d’effectuer des travaux de finition, veuillez vous rendre aux agences de
                                                la RADEEL muni des pièces suivantes :
                                            </p>
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Une demande de
                                                branchement provisoire dans laquelle vous précisez la nature des travaux
                                                à effectuer, l’adresse et la durée du branchement<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Autorisation du
                                                Propriétaire signée et légalisée <a
                                                    href="./img/Demande-de-Branchement.pdf"
                                                    target="_blank">(télécharger)</a><br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie de la carte
                                                d’identité (C.I.N)<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie légalisée de
                                                l’acte de propriété<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ajouter un compteur -->
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree1">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Ajout un compteur
                                        </div>
                                    </a>
                                    <div id="collapseThree1" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Pièces à fournir :
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie de la carte
                                                d’identité nationale (C.I.N)<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie de titre de
                                                propriété<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Copie des plans
                                                modificatifs approuvés<br>
                                                <i class="fa fa-check me-3" style="color:orange;"></i>Reçu de paiement
                                                de devis initial<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Demande en ligne -->
                                <div class="card">
                                    <a class="collapsed btn card-header" href="#exampleModalCenter1"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"
                                        style="background-color:#077ec0; color:white;width:98%; margin: 10px;">
                                        Demande en ligne
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Abonnement -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel1"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="container mt-3">
                            <div id="accordion1">
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Abonnement
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse " data-bs-parent="#accordion1">
                                        <div class="card-body">
                                            <p class="text-start">
                                                Pièces à fournir :
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Demande d'abonnement
                                                complétée et signée <a href="./img/Demande_Abonnement.pdf"
                                                    target="_blank">(télécharger)</a></br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Copie de la carte
                                                d’identité (C.I.N, Carte de séjour ou passeport)</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>En cas de personne
                                                morale (Copie d'identité du gérant, copie des status sociaux, copie de
                                                registre de commerce et attestation de l'I.C.E et autorisation d'exercer
                                                délivrée par les autorités compétentes).</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Procuration légalisée ou
                                                notaire en cas des héritiers ou des copropriétaires </br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Justificatif du droit de
                                                jouissance: Copie de titre propriété, Copie de contrat de bail ou
                                                autorisation de proprietaire signée et légalisée (en cas de locataire
                                                ).</br>
                                            </div>
                                            En plus, Pour un abonnement suite à un nouveau branchement :
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Copie de permis
                                                d'habiter
                                                </br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Certificat de garantie
                                                de disjoucteur (éléctricité).</br>
                                            </div>

                                            </p><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="collapsed btn card-header" data-bs-toggle="modal"
                                        href="#exampleModalCenter" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter" aria-expanded="false"
                                        aria-controls="collapseFour"
                                        style="background-color:#077ec0; color:white; width:98%; margin: 10px;">
                                        Demande en ligne
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- resiliation -->
                    <div class="tab-pane fade" id="v-pills-resiliation" role="tabpanel1"
                        aria-labelledby="v-pills-resiliation-tab">
                        <div class="container mt-3">
                            <div id="accordion1">
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOnee">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Résiliation
                                        </div>
                                    </a>
                                    <div id="collapseOnee" class="collapse " data-bs-parent="#accordion1">
                                        <div class="card-body">
                                            <p class="text-start">
                                                Pièces à fournir :
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Demande de résiliation
                                                <a href="./img/resiliation.pdf" target="_blank">(télécharger)</a></br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Dernière facture d’eau
                                                et(ou)d’électricité</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Contrat
                                                d’abonnement</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Copie de la carte
                                                d’identité nationale(C.I.N)</br>

                                            </div>
                                            </p><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="btn"  href="{{ url('/resiliation') }}">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Demande Résiliation
                                        </div>
                                    </a>
                                </div>
                                    <div id="collapseOneee" class="collapse " data-bs-parent="#accordion1">
                                        <div class="card-body">
                                            <p class="text-start">
                                                Pièces à fournir :
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Demande de résiliation
                                                <a href="./img/resiliation.pdf" target="_blank">(télécharger)</a></br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Dernière facture d’eau
                                                et(ou)d’électricité</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Contrat
                                                d’abonnement</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;"></i>Copie de la carte
                                                d’identité nationale(C.I.N)</br>

                                            </div>
                                            </p><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Facture -->
                    <div class="tab-pane fade" id="v-pills-message" role="tabpanel1"
                        aria-labelledby="v-pills-message-tab">
                        <div class="container mt-3">
                            <div id="accordion2">
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Le relevé de votre Consommation
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse " data-bs-parent="#accordion2">
                                        <div class="card-body">
                                            <p
                                                style="font-size:20px; font-weight:border; color:#7DB41E; text-decoration: underline;padding-left:30px;">
                                                Le relevé de votre Consommation</p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray; text-decoration: underline;padding-left:40px;">
                                                Compteur:</p>
                                            <p>
                                                Votre compteur est l’instrument de mesure qui vous permet de gérer et de
                                                surveiller votre consommation d’eau et d’électricité.
                                                Chaque fois qu’on ouvre un robinet, on consomme de l’eau et chaque fois
                                                qu’on fait fonctionner un appareil électrique, on consomme du courant.
                                                Les quantités d’eau et d’électricité ainsi consommées sont calculées.
                                                La relève est très simple, il suffit de lire le nombre qui s’affiche sur
                                                le compteur.
                                            </p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray; text-decoration: underline;padding-left:40px;">
                                                Consommation</p>
                                            <p>
                                                <span>Comment la RADEEL calcule-t-elle votre consommation d’eau et
                                                    d’électricité ?</span><br>
                                                La RADEEL calcule votre consommation d’eau et d’électricité en faisant
                                                la différence entre le dernier relevé de votre compteur et le relevé
                                                précédent.</br>
                                            <div class="bd-callout bd-callout-info">
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Le compteur doit être
                                                accessible à notre releveur.<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>S’il est inaccessible,
                                                votre consommation sera estimée sur la base de votre historique de
                                                consommation et sera régularisée dès communication de l’index réel.</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Votre consommation
                                                s’exprime en m3 (mètre cube) pour l’eau et en KWH
                                                (kilowattheure) pour l’électricité.</br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:orange;padding-left:20px;"></i>Si vous remarquez que
                                                votre consommation est excessive, alors que vos habitudes de
                                                consommation n’ont pas changé, vous pouvez demander la vérification de
                                                votre compteur en appelant notre centre de relation client (AlloRadeel)
                                                ou en contactant votre agence commerciale la plus proche. </br>


                                            </div>
                                            <p> Pour procéder à l’étalonnage du compteur, adressez nous une demande
                                                légalisée. Les frais de l’étalonnage seront à votre charge, si le
                                                fonctionnement normal du compteur est confirmé.
                                            </p>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            Réglement de vos factures
                                        </div>
                                    </a>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion2">
                                        <div class="card-body">
                                            <p class="text-start">
                                            <p
                                                style="font-size:20px; padding-left:20px;font-weight:border; color:#7DB41E; text-decoration: underline;">
                                                En agence </p>
                                            <p>
                                                Vous pouvez regler vos factures de consommation dans n'importe quelle
                                                agence commerciale parmi les 11 agences de la RADEEL situées à Larache,
                                                Ksar kebir, Aouamra et Khemiss Sahel.
                                            <p
                                                style="font-size:20px; padding-left:20px;font-weight:border; color:#7DB41E; text-decoration: underline;">
                                                Aux points de vente </p>
                                            <p>
                                                Vous pouvez régler vos factures de consommation en toute sécurité au
                                                niveau du point de vente le plus proche de vous. Veillez à prendre
                                                votre reçu de paiement.
                                            </p>

                                            <p
                                                style="font-size:20px; padding-left:20px;font-weight:border; color:#7DB41E; text-decoration: underline;">
                                                En ligne </p>
                                            <p>
                                                RADEEL met à votre disposition un service de paiment en ligne gratuit
                                                et sécurisé via notre <a href=""></a>site </a>, via le siteweb ou
                                                l'application mobile de votre banque.
                                                Payer en ligne vos factures sur le site web <a
                                                    href="https://www.fatourati.ma/FatLite/ma/MTC/formulaire?fid=1040">Fatourati</a>
                                            </p>
                                            <p
                                                style="font-size:20px;padding-left:20px; font-weight:border; color:#7DB41E; text-decoration: underline;">
                                                Par prélevement automatique sur votre compte </p>
                                            <p>
                                                RADEEL peut suite à votre demande procéder au prélévement automatique du
                                                montant de votre facture de consomation sur votre compte bancaire.
                                            </p>
                                            <p
                                                style="font-size:20px;padding-left:20px; font-weight:border; color:#7DB41E; text-decoration: underline;">
                                                Par avence / consommation </p>
                                            <p>
                                                Si vous maîtriser votre consommation mensuelle,vous pouvez déposer une
                                                somme d'argent comme avance. RADEEL déduit le montant de facture
                                                mensuelle de la somme déposée. Cette solution est plus adaptée aux
                                                clients résidents à l'étranger.

                                            </p>
                                            </p>
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
    <style>
        label {
            font-size: 18px;
        }

        input {
            font-size: 18px;
        }
    </style>

    <!-- prompt formulaire Branchement -->
    <div class="modal fade " id="exampleModalCenter" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-image: url(img/202.png);">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="container" class="container mt-5">
                    <div class="progress px-1" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="step-container d-flex justify-content-between">
                        <div class="step-circle">1</div>
                        <div class="step-circle">2</div>
                        <div class="step-circle">3</div>
                    </div>

                    <form method="POST" action="{{ route('addabonnement') }}" enctype="multipart/form-data"
                        id="multi-step-form" style="Padding:30px;">
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
                            <h3>Les informations de la demande d'abonnement : </h3>
                            <div class="mb-3">
                                <label class="form-label">Gérance <span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="gerance" required
                                    id="geranceAbon">
                                    <option value="eau" selected>Eau</option>
                                    <option value="électricité">électricité</option>
                                    <option value="Eau et électricité">Eau et électricité</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Type abonnement<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="type-abon" required
                                    name="typeabonnement">
                                    <option selected disabled>Sélectionner une valeur
                                    </option>
                                    <option value="nouvelle">Suite à un nouveau branchement
                                    </option>
                                    <option value="Contrat résilié">Suite à un contrat résilié </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse d'abonnement demandé <span style="color:red;">*</span>
                                </label>
                                <input type="text" class="form-control" name="adressabonnement" required><br>
                                <select class="form-select" aria-label="Default select example" name="province">
                                    <option selected value="Larach">Larache
                                    </option>
                                    <option value="khmis sahel">khmis Sahel</option>
                                    <option value="Aouamra">Aouamra</option>
                                    <option value="Ksar El Kébir">Ksar El Kébir</option>
                                </select>
                            </div>
                            <h3>Information du bénéficiare : </h3>
                            <div class="mb-3">
                                <label class="form-label">Client<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="client"
                                    name="client">
                                    <option selected disabled>Sélectionner une valeur
                                    </option>
                                    <option value="particuliers">Particuliers
                                    </option>
                                    <option value="profesionnel">Professionnels et commerçants </option>
                                    <option value="GrosAbonnee">Gros Abonnés </option>
                                    <option value="administration">Administrations et offices</option>
                                    <option value="promoteurs">Promoteurs et lotisseurs </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Statut<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="personne"
                                    name="status">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="personnePhysique">Personne Physique
                                    </option>
                                    <option value="personneMorale">Personne morale</option>
                                </select>
                            </div>
                            <div class="mb-3" id="physique">
                                <label class="form-label">Nature demandeur<span style="color:red;">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example" id="Nature"
                                    name="naturedemandeur">
                                    <option selected>Sélectionner une valeur
                                    </option>
                                    <option value="proprietaire">Propriétaire
                                    </option>
                                    <option value="locataire">Locataire</option>
                                    <option value="municipalite">Propiété de la municipalité</option>
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
                                <input class="form-control form-control" type="text" name="raisonsociale">
                            </div>
                            <div class="mb-3" id="morale1">
                                <label class="form-label">Numéro registre de commerce </label><span
                                    style="color:red;">*</span>
                                <input class="form-control form-control" type="text" name="numeroregister">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control-lg" type="text" name="cin">
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
                                <label class="form-label"> Addresse de correspondance<span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" type="text" placeholder="addresse"
                                    name="adresscorresp"><br>
                                <input class="form-control form-control" type="text" placeholder="ville" name="ville">
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn next-step"
                                    style="background-color:#077ec0;color:white; ">Continuer</button>

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
                            <div class="mb-3" id="cinP">
                                <label class="form-label">CIN <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file" name="cinfile">
                            </div>
                            <div class="mb-3" id="cinG">
                                <label class="form-label">CIN de gérant <span style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="cingerantfile">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Justification d'occupation du local<span
                                        style="color:red;">*</span>
                                </label>
                                <input class="form-control form-control" id="formFileLg"
                                    name="justificationoccupationfile" type="file">
                            </div>
                            <div class="mb-3" id="branchement">
                                <label class="form-label"> Reçu de devis branchement
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="recudevisfile">
                            </div>
                            <div class="mb-3" id="branchement1">
                                <label class="form-label"> Permis d'habiter
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="permihabiterfile">
                            </div>
                            <div class="mb-3" id="contrat">
                                <label class="form-label">Quittance de résiliation
                                </label>
                                <input class="form-control form-control" id="formFileLg" name="Quittancepolicefile"
                                    type="file">
                            </div>
                            <div class="mb-3" id="morale2">
                                <label class="form-label"> Statut d'entité
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="statusentitefile">
                            </div>
                            <div class="mb-3" id="Autorisation1">
                                <label class="form-label"> Autorisation de propiétaire signée et légalisée

                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file">
                            </div>
                            <div class="mb-3" id="Autorisation2">
                                <label class="form-label"> Autorisation de propiétaire signée et légalisée
                                </label>
                                <input class="form-control form-control" id="formFileLg" type="file"
                                    name="autorisationlegaliseefile">
                            </div>
                            <div class="mb-3" id="morale3">
                                <label class="form-label"> Registre de commerce
                                </label>
                                <input class="form-control form-control" name="registercommercefile" id="formFileLg"
                                    type="file">
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
                                    accord au traitement de mes données personnelles
                                </label>
                                Conformément à la loi N°09-08,vous bénéficiez d'une droit d'accès , de rectification
                                et d'opposition aux traitement de vos données personnelles à la RADEEL .
                            </div>

                            <div class="mb-3">
                                <button type="button" style="background-color:#077ec0;color:white; "
                                    class="btn prev-step">Retour</button>
                                <button type="button" style="background-color:#077ec0;color:white; "
                                    class="btn next-step">Continuer</button>

                            </div>
                        </div>

                        <div class="step step-3 ">
                            
                            <button type="submit" class="btn  d-flex justify-content-center"
                                style="background-color:#077ec0;color:white;">Envoyé</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- prompt formulaire Raccordement -->
    <div class="modal fade" id="exampleModalCenter1" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-image: url(img/202.png);">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="container" class="container mt-5">

                    <div class="progress px-1" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="step-container d-flex justify-content-between">
                        <div class="step-circle">1</div>
                        <div class="step-circle">2</div>
                        <div class="step-circle">3</div>
                    </div>

                    <form method="POST" action="{{ route('addraccoredement') }}" enctype="multipart/form-data"
                        id="multi-step-forme" style="Padding:30px;">
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
                                    <option value="Branchement neuf">Branchement neuf
                                    </option>
                                    <option value="Augmentation de puissance">Augmentation de puissance(Ajouter un
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
                                    <option value="Administrations et offices">Administrations et offices</option>
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
                                (si vous ne diposer pas de ces piéces en format électronique veuillez les présenter au
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
                                <p>Conformément à la loi N°09-08,vous bénéficiez d'une droit d'accès , de rectification
                                    et d'opposition aux traitement de vos données personnelles à la RADEEL .</p>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary prev-step">Retour</button>
                                <button type="button" class="btn btn-primary next-step">Continuer</button>
                            </div>
                        </div>

                        <div class="step step-3">
                            <button type="submit" class="btn d-flex justify-content-center"
                                style="background-color:#077ec0;color:white; ">Envoyé</button>
                        </div>
                    </form>

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





    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

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
        $("#type-abonRacc").change(function () {
            if ($(this).val() === "Augmentation de puissance") {
                $("#recuRac").show();
            } else {
                $("#recuRac").hide();
            }
        });
        $("#geranceAbon").change(function () {
            if ($(this).val() === "Eau") {
                $("#permihabiterfile").hide();
            } else {
                $("#permihabiterfile").show();

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
        $("#type-abon").change(function () {
            if ($(this).val() === "nouvelle") {
                $("#branchement").show();
                $("#branchement1").show();
                $("#contrat").hide();

            } else {
                if ($(this).val() === "Contrat résilié")
                    $("#branchement").hide();
                $("#branchement1").hide();
                $("#contrat").show();
            }
        });
        $("#Nature").change(function () {
            if ($(this).val() === "proprietaire") {
                $("#Autorisation1").hide();
                $("#Autorisation2").hide();

            } else {
                if ($(this).val() === "locataire") {
                    $("#Autorisation1").show();
                    $("#Autorisation2").hide();
                } else {
                    if ($(this).val() === "municipalite") {
                        $("#Autorisation1").hide();
                        $("#Autorisation2").show();
                    }
                }
            }
        });
        $("#client").change(function () {
            if ($(this).val() === "particuliers") {
                $("#branchement").show();

            } else {
                $("#branchement").hide();
            }
        });
        $("#personne").change(function () {
            if ($(this).val() === "personnePhysique") {
                $("#cinG").hide();
                $("#cinP").show();
                $("#physique").show();
                $("#morale").hide();
                $("#morale1").hide();
                $("#morale2").hide();
                $("#morale3").hide();
            } else {
                $("#cinG").show();
                $("#cinP").hide();
                $("#physique").hide();
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

        $(document).ready(function () {
            $("#cinG").hide();
            $("#permihabiterfile").hide();
            $("#cinP").hide();
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
            $('#multi-step-forme').find('.step').slice(1).hide();
            $("#Autorisation1").hide();
            $("#Autorisation2").hide();
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
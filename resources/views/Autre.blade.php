<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RADEEL</title>
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
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/Cover2.png) center center no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
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
                        <a href="{{ url('../') }}" class="nav-item  ">ACCUEIL</a>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">RADEEL</a>
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
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle active" data-bs-toggle="dropdown">ESPACE CLIENT</a>
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
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">ESPACE RH</a>
                            <div class="dropdown-menu bg-white ">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">FOURNISSEURS</a>
                            <div class="dropdown-menu bg-white ">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item   dropdown-toggle" data-bs-toggle="dropdown">PRATIQUE</a>
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
    <!-- Navbar End -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Conseils Client</h1>
        </div>
    </div>
    <br><br>
    <!-- Page Header Start end -->
    <style>
        <style>.bd-callout {
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
            border-left-color: #7DB41E;
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
            height: 50px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-5">
                <div class="nav flex-column nav-pills vertical-tabs" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <button class="nav-link active justifay-content-center" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Nos conseils pratiques</button>
                    <button class="nav-link justify-content-center" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Tarifs en vigueur</button>
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
                                            <i class="fas fa-tint"></i> Surveillez votre compteur<i
                                                class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse " data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>Pour éviter les mauvaises surprises, regardez régulièrement votre
                                                compteur
                                                une fois par mois
                                                est la meilleure façon de se rendre compte d’une consommation excessive
                                                et
                                                tant qu’il est encoretemps.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        <div class="card-header"
                                            style="background-color:#077ec0; color:white; text-align:center;">
                                            <i class="fas fa-tint"></i>  fuites installation<i
                                                class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                Un robinet qui coule, une chasse d’eau défectueuse, un tuyau cassé
                                                peuvent
                                                entrainer une
                                                perte de plusieurs m3 par mois, ce qui peut couter cher.Pour vérifier,
                                                voici
                                                comment procéder :
                                            </p>
                                            <div class="bd-callout bd-callout-info">
                                                <p>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:#077ec0;padding-left:20px;"></i> Notez l’index le
                                                    soir
                                                    <br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:#077ec0;padding-left:20px;"></i> Ne consommez pas
                                                    d’eau
                                                    pendant la nuit <br>
                                                    <i class="fa fa-check  me-3"
                                                        style="color:#077ec0;padding-left:20px;"></i>Renotez l’index le
                                                    matin. La différence, c’est une fuite. 1 m3 par nuit, c’est
                                                    déjà 30 m3 par
                                                    mois
                                                </p>
                                            </div>
                                            <p>Une chasse d’eau qui fuit représente un gaspillage de 600 litres d’eau
                                                par jour.
                                                Les grosses fuites peuvent couter des centaines de Dirhams.
                                                Si vous constatez une consommation anormale, appelez vite un plombier.
                                                Préférez la douche au bain
                                                Une douche = 20 à 60 litres
                                                Un bain = 150 à 200 litres
                                                La différence est claire.
                                                Stoppez l’eau lorsque vous vous savonnez, vous lavez les dents ou vous
                                                rasez au
                                                lavabo.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            <i class="fas fa-tint"></i>  les robinets économes<i
                                                class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>Les robinets mitigeurs permettent de limiter la consommation d’eau.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThre">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            <i class="fas fa-tint"></i> chasse d’eau<i
                                                class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapseThre" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">

                                            <p>Plus de 40 litres par personne et par jour. Une quantité que vous pouvez
                                                réduire de la manière suivante :<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#285AEB;padding-left:20px;"></i> Posez une bouteille
                                                fermée et pleine d’eau dans le réservoir de la chasse.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapsefoure">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            <i class="fas fa-tint"></i> voiture<i
                                                class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapsefoure" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p> un seau et une éponge au lieu d’un tuyau d’arrosage.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapsesix">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            <i class="fas fa-tint"></i> La vaisselle et le linge<i
                                                class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapsesix" class="collapse " data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorsque vous faites la vaisselle à la main, une vaisselle complète en une
                                                fois consomme moins que rincer les verres et tasses au fur et à mesure.
                                                <br>Si vous disposez de machines à laver la vaisselle et le linge, ne
                                                les
                                                lancez que lorsqu’elles sont pleines. <br>
                                                <i class="fa fa-check  me-3"
                                                style="color:#285AEB;padding-left:20px;"></i> Un lave-linge = 225 litres <br>
                                                <i class="fa fa-check  me-3"
                                                style="color:#285AEB;padding-left:20px;"></i> Un lave-vaisselle = 40 litres <br>
                                                La quantité d’eau consommée est la même quel que soit le remplissage.
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapsesept">
                                        <div class="card-header" style="background-color:#077ec0; color:white;">
                                            <i class="fas fa-tint" style=" font-size:20px;"></i>  votre
                                            jardin<i class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapsesept" class="collapse " data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;font-size:20px;"></i>Arrosez
                                                votre jardin ou vos
                                                plantes de terrasse une fois par semaine<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#077ec0;padding-left:20px;font-size:20px;"></i>Arrosez
                                                après le coucher du
                                                soleil, pour éviter l’évaporation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- electricite --}}
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseELEOne">
                                        <div class="card-header" style="background-color:#fbc02d; color:white;">
                                            <i class="fas fa-bolt"></i> Le chauffage<i class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapseELEOne" class="collapse " data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Maintenez une
                                                température maximale de 19 à 20°C
                                                19 et 20°C est une température ambiante tout à fait suffisante pour
                                                assurer
                                                votre confort. <br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i>Diminuez la température
                                                d’un degré représente une réduction de votre facture
                                                de 6 à 7%. <br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i>Purgez vos radiateurs
                                                <br>
                                                Si la partie inférieure de votre radiateur est chaude alors que la
                                                partie
                                                supérieure est froide, c’est qu’il a besoin d’être purgé.<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Ne couvrez jamais un
                                                radiateur
                                                La climatisation <br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Pour être efficace, la
                                                climatisation doit fonctionner fenêtres fermées <br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> N’abusez pas de la
                                                climatisation<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a class="btn" data-bs-toggle="collapse" href="#collapseELETwo">
                                        <div class="card-header" style="background-color:#fbc02d; color:white;">
                                            <i class="fas fa-bolt"></i> L’électroménager<i class="fas fa-question"></i>
                                        </div>
                                    </a>
                                    <div id="collapseELETwo" class="collapse " data-bs-parent="#accordion">
                                        <div class="card-body">

                                            <p
                                                style="font-size:20px; font-weight:border; color:gray; text-decoration: underline;">
                                                Four</p>
                                            <p> <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> N’ouvrez pas
                                                continuellement votre four<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Préférez le four à
                                                micro-ondes<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Sortez les aliments
                                                surgelés plus tôt
                                            </p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray; text-decoration: underline;">
                                                Réfrigérateur et congélateur</p>
                                            <p>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Evitez de placer votre
                                                réfrigérateur et votre congélateur dans une
                                                pièce chaude ou à proximité d’une source de chaleur<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Laisser refroidir les
                                                aliments avant de les ranger au frais<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Dégivrez régulièrement
                                                votre congélateur<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Fermez rapidement les
                                                portes<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Occupez correctement
                                                les espaces<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Dépoussiérez
                                                régulièrement l’arrière du frigo et du congélateur<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Maintenez la
                                                température de votre réfrigérateur entre 4 et 6°C et
                                                celle de votre congélateur à 18°C<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Si nécessaire,
                                                remplacez les joints du réfrigérateur
                                            </p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray;text-decoration: underline;">
                                                Lave-vaisselle</p>
                                            <p> <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Ne lancez votre
                                                lave-vaisselle que lorsqu’il est plein<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Sélectionnez les
                                                programmes à basse température<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Nettoyez régulièrement
                                                le filtre
                                            </p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray;text-decoration: underline;">
                                                Lave-linge</p>
                                            <p> <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i>
                                                Lavez à basse température<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Nettoyez régulièrement
                                                le filtre
                                            </p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray;text-decoration: underline;">
                                                Petit Electro</p>
                                            <p>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Evitez le mode veille
                                                et éteignez complètement vos appareils comme
                                                téléviseur, ordinateur, décodeur…<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Débranchez les
                                                chargeurs de piles, GSM, appareils photo, etc.<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Achetez des
                                                multiprises à interrupteur
                                            </p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray;text-decoration: underline;">
                                                L’éclairage</p>
                                            <p> <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Profitez de
                                                l’éclairage naturel<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Eteignez les lumières
                                                inutiles<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Remplacez les lampes
                                                classiques par les lampes basse consommation
                                                (LBC)
                                            </p>
                                            <p
                                                style="font-size:20px; font-weight:border; color:gray;text-decoration: underline;">
                                                L’eau chaude</p>
                                            <p> <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Prenez une douche
                                                rapide plutôt qu’un bain<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Coupez le robinet
                                                quand vous vous savonnez<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Limitez la température
                                                de votre chauffe-eau à 60°c<br>
                                                <i class="fa fa-check  me-3"
                                                    style="color:#fbc02d;padding-left:20px;"></i> Eteignez votre
                                                chauffe-eau lors de longues absences
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <table style="width:80%;">
                            <tbody>
                                <tr>
                                    <p style="text-align:center;"><span
                                            style="font-size: 17pt; color:#D1801D;  "><strong>Tarifs Electricité <a
                                                    href="/images/radeel-docs/3-Nos-Clients/Tarifs-Electricite.pdf"
                                                    title="Tarifs-Electricite-RADEEL-MAROC">[ Format PDF
                                                    ]</a></strong></span></p>
                                    <br />
                                    <embed src="/img/Tarifs-Electricite.pdf" type="application/pdf" width="100%"
                                        height="575"></p>
                                </tr>
                                <tr>
                                    <p style="text-align:center;"><strong><span
                                                style="font-size: 17pt; color:#D1801D; ">Tarifs Eau et Assainissement
                                                liquide <a
                                                    href="/images/radeel-docs/3-Nos-Clients/Tarifs-Eau-et-Assainissement-liquide.pdf"
                                                    title="Tarifs-Eau-et-Assainissement-liquide-RADEEL-MAROC">[ Format
                                                    PDF ]</a></span></strong></p>
                                    <br />
                                    <embed src="/img/Tarifs-Eau-et-Assainissement-liquide.pdf" type="application/pdf"
                                        width="100%" height="575"></p>
                                </tr>
                            </tbody>
                        </table>
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
    </script>



</body>

</html>
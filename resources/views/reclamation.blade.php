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
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(https://lh3.googleusercontent.com/proxy/4GiMFZNnfDNIVaT1UxxWxgnZxF8o2a9AFIiJLj7w-fOom6TsNkRH423Kb3gzkVAntQPHLSqXumiBT-Z9rdlzlDjef0Yb_2g8yQxgNSjpMpZc7S2kuD8O_7uN4em6217hRffhEeNto3jOWAU) center center no-repeat;
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
    <div class="container-fluid  py-2 d-none d-md-flex"
        style="background: #077ec0; font-size:18px; font-family:'arial'">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul>
                    <li><a class="nav-link scrollto " href="{{ url('../') }}">ACCEUIL</a></li>
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
                    <li class="dropdown" STYLE="color:black;"><a class="nav-link active"><span>ESPACE CLIENT</span>
                            <i class="bi bi-chevron-down"></i></a>
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
                            <!-- <li><a href="{{ url('../loi') }}" class="dropdown-item">Loi cadre</a></li> -->
                            <li><a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Avis de
                                    recrutement</a></li>
                            <li><a href="{{ url('../stage') }}" class="dropdown-item">Stages </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>FOURNISSEURS</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <!--   <li><a href=" {{ url('../AppelOffre') }}" class="dropdown-item">Avis des appels
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
                            <!-- <li><a href="{{ url('../galerie') }}" class="dropdown-item">Galerie</a></li>
                            <li><a href="{{ url('../') }}#AudioVisual" class="dropdown-item">Audiovisuel</a></li> -->
                            <li><a href="{{ url('../galerie') }}" class="dropdown-item">Galerie / Audiovisual</a>
                            </li>
                            <li><a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a></li>
                            <li><a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a></li>

                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="{{ url('../') }}#contact">CONTACT</a></li>
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
    </header>


    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Réclamation R.A.D.E.E.L</h1>
        </div>
    </div>

    @if (Session::has('success'))
        <script>
            swal({
                title: "Message",
                text: "{{ Session::get('success') }}",
                icon: 'success',
                buttons: {
                    confirm: {
                        text: "OK",
                        value: true,
                        visible: true,
                        className: "btn btn-success",
                        closeModal: true
                    },
                    print: {
                        text: "Imprimer reçu",
                        value: "print",
                        className: "btn btn-primary",
                        closeModal: true
                    }
                }
            }).then((value) => {
                if (value === "print") {
                    window.location.href = "{{ route('generatepdf', session('idox')) }}";
                }
            });
        </script>
    @endif


    <div class="container py-5">
        <div class="row">
            <div class="col " style="visibility: visible; animation-delay: 0.1s;
                 margin-top:20px;" bis_skin_checked="1">
                <p>Dans le cadre de sa nouvelle stratégie de communication envers son aimable clientèle, la RADEEL a le
                    plaisir de vous informer de la mise en oeuvre de son centre d'appels. Pour transmettre des
                    réclamations
                    ou demander des informations, prière de nous contacter sur :


                    <br>
                    {{-- <i class="fa fa-check  me-3"
                        style="color:green; padding-left:20px; display:inline-block;"></i><span
                        style="color:green; font-weight:200;">le numéro économique suivant</span> <br>
                    <i class="fa fa-check  me-3 text-primary" style="padding-left:20px;" display:inline-block;></i><span
                        class="text-primary" style=" font-weight:200;">Vous pouvez
                        désormais envoyer vos réclamations par courrier électronique à l'adresse email suivante</span>
                    <br>
                    <i class="fa fa-check  me-3"
                        style=" color:#D1801D;padding-left:20px;display:inline-block; "></i><span
                        style="color:#D1801D;  font-weight:200;">Vous pouvez déposer votre réclamation en ligne </span>
                    --}}
                </p>

                <div class="row">

                    <a href="tel:0801 000 042" style="color:#7DB41E;font-size: 26px;;">
                        <i class="fas fa-phone-square-alt"
                            style=" color:#7DB41E;padding-left:20px;display:inline-block; "></i>&nbsp;&nbsp;<strong>N°
                            Eco:
                            0801.000.042 <br></strong>
                    </a>
                    <br><br>
                    <!--  <a href="mailto:reclamation@radeel.ma" style="font-size: 26px;">
                      <i class="fas fa-envelope-open-text"
                            style=" color:#077ec0;padding-left:20px;display:inline-block; "></i>

                        <strong class="text-center" style="color:#077ec0">reclamation@radeel.ma<br></strong>
                    </a> -->
                    <a href="#exampleModalCenter" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                        style="font-size: 26px; color:#D1801D"><i class="fab fa-wpforms"
                            style=" color:#D1801D;padding-left:20px;display:inline-block; "></i>&nbsp;&nbsp;<strong
                            class="text-center">Réclamation en ligne
                        </strong></a>
                </div>
            </div>
            <div class="col wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;
                animation-name: fadeInUp;" bis_skin_checked="1">
                <img src="https://f.hubspotusercontent10.net/hubfs/2302063/VISU-RECLAMATION-BLOG.jpg" class="img-fluid">
            </div>
        </div>
    </div>



    <!-- Modal add reclamation -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog" role="document">
            <div class="modal-content">

                <div class=" card shadow-sm d-flex justify-content">

                    <!-- nav options -->
                    <style>
                        .nav-pills .nav-link.active {
                            background-color: #077ec0;
                            color: #fff;

                        }
                    </style>
                    <ul class="nav nav-pills " id="pills-tab" role="tablist" style="width: 100%">

                        <li style="width:50%;">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true"
                                style="height:70px; text-align: center; padding: 15px;font-size: 25px;"><strong>Nouvelle
                                    Réclamation</strong>
                            </a>
                        </li>

                        <li style="width: 50%;">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false"
                                style="height:70px;text-align:center;padding:15px;font-size:25px;"><strong>Suivre
                                    votre Réclamation</strong>
                            </a>
                        </li>
                    </ul>
                    <br>
                    <style>
                        label {
                            font-size: 18px;
                            line-height: 20px;
                            color: darkgray;
                        }
                    </style>
                    <!-- content -->
                    <div class="tab-content" id="pills-tabContent p-3">
                        <!-- 1st card -->
                        <div class="tab-pane fade show active " id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <form method="POST" action="{{ route('addReclamation') }}">
                                @csrf
                                <div class="container">
                                    <div class="row ">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Numéro
                                                    dossier<span style="color:red;">*</span>
                                                </label>
                                                <input type="number" name="numdossier" class="form-control" id="numD"
                                                    required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Numéro
                                                    Téléphone<span style="color:red;">*</span>
                                                </label>
                                                <input type="number" name="tele" class="form-control" id="numTel"
                                                    placeholder="0600000000" maxlength="10" oninput="" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email <span
                                                        style="color:red;">*</span></label>
                                                <input type="email" name="email" class="form-control" id="numD"
                                                    placeholder="name@example.com" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nom <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" class="form-control" name="nom" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Objet <span
                                                        style="color:red;">*</span></label>
                                                <input type="text" name="objet" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Description
                                                    <span style="color:red;">*</span></label>
                                                <textarea class="form-control  mb-3" rows="4" cols="10" name="des"
                                                    placeholder="Votre Message" style="border: 1px solid #666;"
                                                    required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input type="submit" class="form-control"
                                                    style="background-color:#077ec0;color: white; height:60px; font-size:20px;"
                                                    id="numD" name="ok" value="Validé">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- 2nd card -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <form method="POST" action="{{ route('searchreacalamtion') }}">
                                @csrf
                                <div class="container">
                                    <div class="row ">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">
                                                    Numéro
                                                    Réclamation
                                                </label>
                                                <input type="number" name="randomnumber" class="form-control" id="numD"
                                                    required>
                                            </div>


                                            <div class="mb-3">
                                                <input type="submit" class="form-control"
                                                    style="background-color:#077ec0;color: white; height:50px;font-weight: bolder"
                                                    id="numD" name="ok" value="Validé">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- 3nd card -->

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Suivi reclamation -->
    <div class="modal fade" id="suivi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-body py-0">
                    <div class="d-flex main-content">
                        <div class="bg-image promo-img mr-3"
                            style="background-image: url('https://www.visiativ.com/wp-content/uploads/2022/03/2167666-suivi-de-projet-suivi-des-objectifs-achevement-des-taches-ou-liste-de-controle-pour-rappeler-l-avancement-du-projet-gestion-chronologie-vectoriel-e1683189296301.jpg');">
                        </div>
                        <div class="content-text p-6" style="padding:10px;">
                            <h1 style="color:#077ec0; text-align:center;">Suivi de réclamation </h1>

                            <form method="POST" action="{{ route('searchreacalamtion') }}">
                                @csrf
                                <div class="container">
                                    <div class="row ">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">
                                                    Numéro
                                                    Réclamation
                                                </label>
                                                <input type="number" name="reclamationumero" class="form-control"
                                                    id="numD" required>
                                            </div>


                                            <div class="mb-3">
                                                <input type="submit" class="form-control"
                                                    style="background-color:#077ec0;color: white;" id="numD" name="ok"
                                                    value="Validé">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Reclamation Found -->
    {{-- <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container">
                        <div class="row" style="margin: 20px">
                            <h1>hello</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal2">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container">
                        <div class="row" style="margin: 20px">
                            <div class="col ">

                                <div class="p-2">
                                    @if (session('reco'))

                                        <div>
                                            <img src="images/Capture2.PNG" class="img-fluid">
                                        </div>
                                        <div>
                                            <form method="get" action="{{route('generatepdf', session('numero'))}}">
                                                <button class="btn btn-primary">
                                                    Imprimer traiter
                                                </button>
                                            </form>
                                        </div>

                                    @elseif(session('recoles'))

                                        <div>
                                            <img src="images/Capture.PNG" class="img-fluid">
                                        </div>
                                       <!--  <div>
                                            <form method="get" action="{{route('generatepdf', session('numero3'))}}">
                                                <button class="btn btn-primary">
                                                    Imprimer En cours
                                                </button>
                                            </form>
                                        </div>
 -->
                                    @elseif(session('recole'))

                                        <div>
                                            <img src="images/Capture.PNG" class="img-fluid">
                                        </div>
                                        <div>
                                            <form method="get" action="{{route('generatepdf', session('numero2'))}}">
                                                <button class="btn btn-primary">
                                                    Imprimer Envoyé
                                                </button>
                                            </form>
                                        </div>

                                    @else
                                        <div>
                                            <button class="px-4 btn btn-warning rounded-pill"
                                                style="color:white;text-align: center">N'existe pas
                                            </button>
                                        </div>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


    <script>
        // Check if showModal is set in the session and is true
        @if (session('showModal') && session('showModal') === true)
            $(document).ready(function () {
                // Show the modal
                $('#exampleModal').modal('show');
            });
        @endif

        @if (session('showModale') && session('showModale') === true)
            $(document).ready(function () {
                // Show the modal
                $('#exampleModal2').modal('show');
            });
        @endif
    </script>





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
                        <a href="{{ url('../') }}" class="mb-2 text-white"><i class="fas fa-angle-right text me-2"
                                style="color:white;"></i>Mentions
                            légales</a>
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

    <!-- Footer End -->

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

    <div class="wrapper">
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
    </script>
    <!-- Footer End -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
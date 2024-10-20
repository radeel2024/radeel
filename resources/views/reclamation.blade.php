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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">

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
                    <img src="https://www.radeel.ma/images/radeel-logo-1x1.png" style="height: 50px; width:50px;">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class=" navbar-nav  ms-auto">
                        <a href="{{ url('../') }}" class="nav-item nav-link ">ACCUEIL</a>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">RADEEL
                                <i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu bg-light ">
                                <a href="{{ url('../Quisommenous') }}" class="dropdown-item">Qui sommes-nous</a>
                                <a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur</a>
                                <a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Organigramme de la
                                    RADEEL</a>
                                <a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités</a>
                                <a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle active"
                                data-bs-toggle="dropdown">ESPACE CLIENT <i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu bg-light ">
                                <a href="{{ url('../paiement') }}" class="dropdown-item">Paiement en
                                    ligne</a>
                                <a href="{{ url('../Abonnement') }}" class="dropdown-item">Particulier</a>
                                <a href="{{ url('../GrosAbonnee') }}" class="dropdown-item">Grand client </a>
                                <a href="{{ url('../reclamation') }}" class="dropdown-item">Réclamation</a>
                                <a href="{{ url('../Autre') }}" class="dropdown-item">Guide client</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ESPACE
                                RH <i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu bg-light ">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">FOURNISSEURS <i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu bg-light ">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">PRATIQUE <i class="bi bi-chevron-down"></></a>
                            <div class="dropdown-menu bg-light ">
                                <a href="{{ url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a>
                                <a href="{{ url('../stress') }}" class="dropdown-item">Stress Hydrique </a>
                                <a href="{{ url('../galerie') }}" class="dropdown-item">Galerie / Audiovisual</a>
                                <a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a>
                                <a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a>
                            </div>
                        </div>

                        <a href="{{ url('../') }}#contact" class="nav-item nav-link">Contact</a>
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
            <!-- First Column -->
            <div class="col-12 col-md-6" style="visibility: visible; animation-delay: 0.1s; margin-top:20px;"
                bis_skin_checked="1">
                <br>
                <p>Dans le cadre de sa nouvelle stratégie de communication envers son aimable clientèle, la RADEEL a le
                    plaisir de vous informer de la mise en oeuvre de son centre d'appels. Pour transmettre des
                    réclamations
                    ou demander des informations, prière de nous contacter sur :</p>

                <div class="row">
                    <!-- Images section: Horizontal on smaller screens, vertical on larger screens -->
                    <div class="col-4 col-sm-12 col-md-4 mb-3">
                        <a href="tel:0801 000 042">
                            <img src="img/2p.png" width="180" class="rounded-circle shadow-lg mx-3">
                        </a>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-4 col-sm-12 col-md-4 mb-3">
                        <a href="#reclamation" data-bs-toggle="modal" data-bs-target="#reclamation">
                            <img src="img/1p.png" width="180" class="rounded-circle shadow-lg mx-3">
                        </a>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-4 col-sm-12 col-md-4 mb-3">
                        <a href="#suivi" data-bs-toggle="modal" data-bs-target="#suivi">
                            <img src="img/3p.png" width="180" class="rounded-circle shadow-lg mx-3">
                        </a>
                    </div>
                </div>

            </div>

            <!-- Second Column (Hidden on mobile) -->
            <div class="col-12 col-md-6 d-none d-md-block wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" bis_skin_checked="1">
                <img src="img/satisef.png" class="img-fluid">
            </div>
        </div>
    </div>



    <style>
        .form-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;

            border-radius: 15px;
            /*  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); */
            position: relative;
            max-height: 3000px;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('background-form.png');
            /* Image de fond */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.1;
            z-index: -1;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
        }

        .form-control {
            padding: 10px;
            font-size: 16px;
            border: 4px solid #99CE3A;
            /* Bordure épaisse verte */
            background-color: white;
            /* Fond blanc */
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            /* Ombre ajoutée */
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            /* Ombre persistante au focus */
        }

        .form-label span {
            color: red;
            font-weight: bold;
        }

        /* Button Nouvelle Réclamation */
        .button-container {
            width: fit-content;
            margin: 0 auto 20px;
        }

        .reclamation-button {
            background-color: #37B6D8;
            /* Fond bleu */
            color: white;
            /* Texte blanc */
            padding: 15px 30px;
            font-size: 24px;
            font-weight: bold;
            border-radius: 8px;
            border: 4px solid #99CE3A;
            /* Bordure verte */
            text-align: center;

            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            /* Ombre légère */
        }

        .btn-submit {
            background-color: #37B6D8;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            border: none;
            padding: 15px;

            margin: 0 auto 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            /* Ombre sur le bouton */
        }

        .btn-submit:hover {
            background-color: #2fa1c1;
        }
    </style>

    <!-- Modal add reclamation -->
    <div class="modal fade" id="reclamation" tabindex="-1" role="dialog" aria-labelledby="reclamation"
        aria-hidden="true">
        <div class="modal-dialog modal-xl  " role="document">
            <div class="modal-content" style="background-image: url(img/test.png);width: 100%;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="container form-container">
                    <div class="button-container">
                        <div class="reclamation-button">
                            NOUVELLE RECLAMATION
                        </div>
                    </div>
                    <br><br>
                    <form method="POST" action="{{ route('addReclamation') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="dossier" class="form-label"><strong>Numéro de dossier :
                                        <span>*</span></strong></label>
                                <input type="text" class="form-control" id="dossier" name="numdossier" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telephone" class="form-label"><strong> Numéro de téléphone :
                                        <span>*</span></strong></label>
                                <input type="text" class="form-control" id="telephone" name="tele" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label"><strong>Email :
                                        <span>*</span></strong></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nom" class="form-label"><strong> Nom et Prénom :
                                        <span>*</span></strong></label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="objet" class="form-label"><strong> Objet : <span>*</span></strong></label>
                            <input type="text" class="form-control" id="objet" name="objet" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label"><strong> Description :
                                    <span>*</span></strong></label>
                            <textarea class="form-control" id="description" name="des" required rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-submit d-flex justify-content-around">ENVOYER</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Suivi reclamation -->
    <div class="modal fade" id="suivi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-0 " style="background-image: url(img/test.png);">
                <div class="modal-content" style="background-image: url(img/test.png);">
                    <div class="container form-container">
                        <div class="button-container">
                            <div class="reclamation-button">
                                SUIVI DE RECLAMATION
                            </div>
                        </div>
                        <br>
                        <fieldset class="shadow-lg p-3 mb-5  rounded" style="background:transparent">
                            <div class="d-flex justify-content-center">
                                <img src="img/logo.png" width="80">
                            </div>
                            <br>

                            <form method="POST" action="{{ route('searchreacalamtion') }}">

                                @csrf
                                <div class="row mb-3 d-flex justify-content-around">
                                    <div class="col-md-6 ">
                                        <label for="dossier" class="form-label"><strong>Numéro de réclamation :
                                                <span>*</span></strong></label>
                                        <input type="text" class="form-control" id="dossier" name="randomnumber"
                                            required>
                                    </div>
                                </div>
                                <br>
                                <button type="submit"
                                    class="btn btn-submit d-flex justify-content-around">CHERCHER</button>
                            </form>
                        </fieldset>
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
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="container">
                        <div class="row" style="margin: 20px">
                            <div class="col ">
                                <div class="p-2">
                                    <!-- Check for reclamation statuses and display the information -->

                                    @if (session('envoyer') == 1)
                                        <img src="images/envoye.png" class="img-fluid" width="100%" style="height: 400;">
                                    @endif
                                    @if (session('encours') == 1)
                                        <img src="images/encours.png" class="img-fluid" width="100%" style="height: 400;">
                                    @endif
                                    @if (session('traiter') == 1)
                                        <img src="images/traiter.png" class="img-fluid" width="100%" style="height: 400;">
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
                $('#exampleModal').modal('show');
            });
        @endif

        @if (session('showModale') && session('showModale') === true)
            $(document).ready(function () {
                $('#exampleModal2').modal('show');
            });
        @endif
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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
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
    <!-- Footer End -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
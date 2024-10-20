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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/stylemodel1.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(https://www.radeel.ma/images/radeel-images/Bureau-d-ordre-digital.jpg) center center no-repeat;
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
                        <a href="{{ url('../') }}" class="nav-item active">ACCUEIL</a>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">RADEEL</a>
                            <div class="dropdown-menu">
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
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">ESPACE RH </a>
                            <div class="dropdown-menu">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">FOURNISSEURS </a>
                            <div class="dropdown-menu  ">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">PRATIQUE </a>
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

    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5" style="background:url(img/sms2.jpg); width:100%;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">SMS INFO </h1>
        </div>
    </div>
    <!-- Page Header End -->
    @if (Session::has('success'))
        <script>
            swal("Message", "{{ Session::get('success') }}", 'success', {
                button: true,
                button: "OK"
            });
        </script>
    @endif
    <!-- contenu -->

    <div class="container-fluid py-5 my-5">
        <div class="container ">
            <div class=" row g-5">
                <div class=" col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="img/1.png" class="img-fluid shadow-sm w-85 rounded"
                            style="width:100%; height: 350px;"><br><br>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <br>
                    <!-- <h1 class="mb-4" style="color:#077ec0">SMS INFO</h1> -->
                    <p>Pour vous aider à gérer vos abonnements en eau et électricité, la RADEEL vous propose un service
                        INFO qui vous informe via SMS de :</p>
                    <ul>
                        <li> L’envoi de vos factures de consommation d’eau et délectricité</li>
                        <li> La relance pour paiement de vos factures en cours.</li>
                    </ul>
                    <p>Merci de renseigner votre N° de téléphone via le lien ci-dessous pour bénéficier de ce service.
                    </p>
                    <button type="button" style="background-color:#077ec0; color: white;padding:15px;" class="btn btn"
                        data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-sms" style="font-size:19px;" ></i>  Saisiez vos données
                    </button>
                </div>
                <div class="container">
                    <h2 class="text-center py-3" style="color:#077ec0">Saisie vos données en ligne </h2>
                    <br><br>

                    <div class=" h-100 position-relative">
                        <img src="img/2.JPG" class="img-fluid  rounded">
                    </div>
                    <br><br>
                </div>
            </div> <br><br>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-body py-0">

                    <div class="d-flex main-content">
                        <div>
                            <img src="img/Sms.png" class="img-fluid w-85 " style=" height: 800px;">
                        </div>
                        <div class="content-text p-3" Style="padding:10px;">
                            <br>
                            <h2 class="text-center">SMS Info</h2>
                            <p>Nouvelle option pour être plus proche de nos client </p>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const form = document.querySelector('form');

                                    form.addEventListener('submit', function(event) {
                                        event.preventDefault(); // Prevent form submission

                                        const numTeleInput = document.getElementById('numTel');
                                        const privacyCheckbox1 = document.getElementById('ch1');
                                        const privacyCheckbox2 = document.getElementById('ch2');

                                        // Validation for numTele
                                        const numTeleValue = numTeleInput.value;
                                        const numTeleRegex =
                                            /^(05|06|07)\d{8}$/; // Regex to match 05, 06, or 07 followed by 8 digits
                                        if (!numTeleRegex.test(numTeleValue)) {
                                            alert(
                                                'Numéro de téléphone invalide. Veuillez saisir un numéro de téléphone commençant par 05, 06 ou 07 et ayant 10 chiffres.'
                                                );
                                            return; // Exit the function
                                        }

                                        // Validation for privacy checkboxes
                                        if (!privacyCheckbox1.checked || !privacyCheckbox2.checked) {
                                            alert(
                                                'Veuillez accepter les conditions générales d\'utilisation et le traitement des données personnelles.'
                                                );
                                            return; // Exit the function
                                        }

                                        // If all validations pass, submit the form
                                        form.submit();
                                    });
                                });
                            </script>
                            <form method="POST" action="{{ route('addsms') }}" style="bagroundcolor:white;">
                                @csrf
                                <div class="container">
                                    <div class="row ">
                                        <div class="col">
                                            <div class="mb-3">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Numéro dossier
                                                        </label>
                                                        <input type="number" name="numDossier" class="form-control"
                                                            id="numD" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Numéro Téléphone
                                                        </label>
                                                        <input type="number" name="tele" class="form-control"
                                                            id="numTel" placeholder="0600000000" maxlength="10"
                                                            oninput="" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            id="numD" placeholder="name@example.com">
                                                    </div>

                                                    <div class="mb-3" style="margin:10px;">
                                                        <p>
                                                            Conformément a la loi N°09-08 , vous bénificeiz d'un droit
                                                            d'accés ,
                                                            de rectification et d'opposition aux traitemntt de vos
                                                            données
                                                            personnelles a la RADEEL .
                                                        </p>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="checkbox1">
                                                            <input type="checkbox" id="ch1" name="ch1"
                                                                required> J'ai lu
                                                            et
                                                            j'accepte les condition générales d'utilisation.
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="checkbox1">
                                                            <input type="checkbox" id="ch2" name="ch2"
                                                                required> Je
                                                            donne mon accord au traitement de mes données personnelles
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div class="">

                                                        <div class="mb-3">
                                                            <input type="submit" class="form-control"
                                                                style="background-color:#077ec0;color: white;"
                                                                id="numD" name="ok" value="Terminer">
                                                        </div>
                                                    </div>
                                                    <br>

                                                </div>
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

    <!-- End Contenu -->
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

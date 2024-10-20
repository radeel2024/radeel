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

    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/cov3.png) center center no-repeat;
            background-size: cover;
        }
        .news,
        .related-news {
            background: var(--section-bg-color);
        }

        .news-thumb {
            position: relative;
        }

        .news-category {
            background: var(--white-color);
            position: absolute;
            z-index: 9;
            top: 0;
            left: 0;
            padding: 4px 12px;
            display: inline-block;
        }

        .news-text-info {
            margin: 0 20px;
        }

        .news-title {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .news-title-link {
            color: var(--title-color);
            display: inline-block;
        }

        .news-title-link:hover {
            color: var(--dark-color);
        }

        .portfolio-image,
        .news-image {
            display: block;
            transition: transform 0.6s ease-out;
        }

        .news-image-hover {
            display: inline-block;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all .3s cubic-bezier(.645, .045, .355, 1);
            padding-bottom: 4px;
            height: 100%;
        }

        .news-image-hover::after {
            content: "";
            width: 0;
            height: 4px;
            bottom: 0;
            position: absolute;
            left: auto;
            right: 0;
            z-index: -1;
            transition: width .6s cubic-bezier(.25, .8, .25, 1) 0s;
            background: #198754;
        }

        .news-image-hover-warning::after {
            background: #ffc107;
        }

        .news-image-hover-primary::after {
            background: #0d6efd;
        }

        .news-image-hover-success::after {
            background: #198754;
        }

        .news-image-hover:hover::after {
            width: 100%;
            left: 0;
            right: auto;
            z-index: 9;
        }

        .image-popup:hover .portfolio-image,
        .news-image-hover:hover .news-image {
            transform: scale(1.02);
        }

        .news-two-column {
            min-height: 199px;
            margin-bottom: 16px;
        }

        .news-two-column .news-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>

    <!-- Spinner Start -->
    <div class="container-fluid  py-2 d-none d-md-flex" style="background: #077ec0;">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <!--  <div class="top-info">
                    <small class="me-3 text-white"><i class="fas fa-envelope text-white"></i><a
                            href="mailto:info@Radeel.com" style="color:white;">
                            reclamation@radeel.com</a></small>
                    <small class="me-3 text-white"><i class="fas fa-map-marker-alt text-white"></i>
                        <a style="color:white; text-decoration: none; text-decoration: none;"
                            href="https://www.google.com/maps/place/La+R%C3%A9gie+Autonome+Intercommunale+de+Distribution+d'Eau+et+d'Electricit%C3%A9+de+la+Province+de+LARACHE/@35.1673009,-6.1433723,17z/data=!3m1!4b1!4m5!3m4!1s0xd0bc947c5cd4efd:0x39b8205ae5d8018d!8m2!3d35.1672965!4d-6.1411836"
                            target="_blank" rel="noopener">1647, lotissement Maghreb AL JADID</a>
                    </small>
                </div> -->

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
                        <a href="{{ url('../') }}" class="nav-item">ACCUEIL</a>
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
                            <div class="dropdown-menu ">
                                <a href="{{ url('../paiement') }}" class="dropdown-item">Paiement en
                                    ligne</a>
                                <a href="{{ url('../Abonnement') }}" class="dropdown-item">Particulier</a>
                                <a href="{{ url('../GrosAbonnee') }}" class="dropdown-item">Grand client </a>
                                <a href="{{ url('../reclamation') }}" class="dropdown-item">Réclamation</a>
                                <a href="{{ url('../Autre') }}" class="dropdown-item">Guide client</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle " data-bs-toggle="dropdown">ESPACE RH</a>
                            <div class="dropdown-menu">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">FOURNISSEURS</a>
                            <div class="dropdown-menu  ">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle active" data-bs-toggle="dropdown">PRATIQUE</a>
                            <div class="dropdown-menu  ">
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
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">
                STRESS HYDRIQUE
            </h1>
        </div>
    </div>
    <!-- Page Header End -->
    <style>
       

        #nav-link-1 .active {
            color: #fff;
            background-color: #fbc02d;
            border-color: transparent;
            box-shadow: 0 1px 9px 0 rgb(251 192 45 / 50%);
        }

        #nav-link-2 .active {
            color: #fff;
            background-color: #004b82;
            box-shadow: 0 12px 5px -10px rgb(33 150 243 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }



        #nav-link-2 a {
            color: #285AEB;
            background-color: #fff;
            padding: 30px;
            font-size: 19px;
            margin: 20px;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }

        #nav-link-1 a {
            color: #fbc02d;
            background-color: #fff;
            padding: 30px;
            font-size: 19px;
            margin: 20px;
            box-shadow: 0 12px 5px -10px rgb(102 187 106 / 55%), 0 8px 10px -5px rgb(0 0 0 / 9%), 0 4px 1px -2px rgb(0 0 0 / 14%);
        }
    </style>
    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">

                    <li class="nav-item" id="nav-link-1">
                        <a class="d-flex py-2 mx-3 rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                            <span style="width: 150px;">Sensibilisation</span>
                        </a>
                    </li>
                    <li class="nav-item" id="nav-link-2">
                        <a class="d-flex mx-3 py-2   rounded-pill" data-bs-toggle="pill" href="#tab-2">
                            <span style="width: 150px;">Radeel Educ</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div id="tab-1" class="tab-pane show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <!--  <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                    data-src="{{ asset('albume/' . $galerie[1]->image) }}">
                                    <img src="{{ asset('albume/' . $galerie[1]->image) }}" class="img-fluid"
                                        width="100%" style="height: 400px;"> -->

                                    <img src="img/stress.png" class="img-fluid" width="100%" style="height: 400px;">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <iframe width="100%" height="400" src="images/v.mp4">
                                    </iframe>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <!--   <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                    data-src="{{ asset('albume/' . $galerie[2]->image) }}">
                                    <img src="{{ asset('albume/' . $galerie[2]->image) }}" class="img-fluid"
                                        width="100%" style="height: 400px;"> -->
                                    <img src="img/stress2.jpg" class="img-fluid" width="100%" style="height: 400px;">

                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                    data-src="{{ asset('albume/' . $galerie[3]->image) }}">
                                    <img src="{{ asset('albume/' . $galerie[3]->image) }}" class="img-fluid"
                                        width="100%" style="height: 400px;">
                                </a> -->
                                    <iframe width="100%" height="400" src="images/v2.mp4">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <img src="img/stress3.jpg" class="img-fluid" width="100%" style="height: 400px;">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                    data-src="{{ asset('albume/' . $galerie[4]->image) }}">
                                    <img src="{{ asset('albume/' . $galerie[4]->image) }}" class="img-fluid"
                                        width="100%" style="height: 400px;">
                                </a> -->
                                    <iframe width="100%" height="400" src="images/v3.mp4">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <img src="img/stress10.jpg" class="img-fluid" width="100%" style="height: 400px;">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <img src="img/stress11.png" class="img-fluid" width="100%" style="height: 400px;">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="service-item rounded ">
                                    <img src="img/stress9.jpg" class="img-fluid" width="100%" style="height: 400px;">
                                </div>
                            </div>
                            <!--  <div class="col-md-6 col-lg-4 ">
                            <div class="service-item rounded ">
                                <iframe width="100%" height="400" src="https://www.youtube.com/embed/7zvzf7OJPzk">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ">
                            <div class="service-item rounded ">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2"
                                    data-src="{{ asset('albume/' . $galerie[5]->image) }}">
                                    <img src="{{ asset('albume/' . $galerie[5]->image) }}" class="img-fluid"
                                        width="100%" style="height: 400px;">
                                </a>
                            </div>
                        </div> -->
                            <!-- desplay the image that selected -->
                            <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="modalImage2" src="" class="img-fluid" alt="Selected Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- JavaScript to handle image click and modal display -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var imageModal = document.getElementById('imageModal2');
                                    imageModal.addEventListener('show.bs.modal', function (event) {
                                        var button = event.relatedTarget;
                                        var imageSrc = button.getAttribute('data-src');
                                        var modalImage = document.getElementById('modalImage2');
                                        modalImage.src = imageSrc;
                                    });
                                });
                            </script>
                        </div>

                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">

                            @foreach($galerie as $index => $album)
                                @if($index >= 32)
                                    <div class="col-md-6 col-lg-4 ">
                                        <div class="service-item rounded overflow-hidden">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                                                data-src="{{ asset('albume/' . $album->image) }}">
                                                <img src="{{ asset('albume/' . $album->image) }}" class="img-fluid" width="100%"
                                                    style="height: 400px;">
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <!-- desplay the image that selected -->
                            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="modalImage" src="" class="img-fluid" alt="Selected Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- JavaScript to handle image click and modal display -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var imageModal = document.getElementById('imageModal');
                                    imageModal.addEventListener('show.bs.modal', function (event) {
                                        var button = event.relatedTarget;
                                        var imageSrc = button.getAttribute('data-src');
                                        var modalImage = document.getElementById('modalImage');
                                        modalImage.src = imageSrc;
                                    });
                                });
                            </script>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://www.radeef.ma/assetsFront/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/teste.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    

    @if (Session::has('success'))
        <script>
            swal("Message", "{{ Session::get('success') }}", 'success', {
                button: true,
                button: "OK"
            });
        </script>
    @endif


</body>

</html>
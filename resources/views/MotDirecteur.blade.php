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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .page-headere {
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(./img/cover1.png) center center no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
        }

    </style>
</head>

<body>
    <!-- Spinner Start -->
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
                        <a href="{{ url('../') }}" class="nav-item ">ACCUEIL</a>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle active" data-bs-toggle="dropdown">RADEEL</a>
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
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">ESPACE RH</a>
                            <div class="dropdown-menu  ">
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
                            <a href="{{ url('../') }}" class="nav-item dropdown-toggle" data-bs-toggle="dropdown">PRATIQUE</a>
                            <div class="dropdown-menu ">
                                <a href="{{ url('../bureau') }}" class="dropdown-item">Bureau d'ordre digital</a>
                                <a href="{{ url('../stress') }}" class="dropdown-item">Stress Hydrique </a>
                                <a href="{{ url('../galerie') }}" class="dropdown-item">Galerie / Audiovisual</a>
                                <a href="{{ url('../Actualite') }}" class="dropdown-item">Actualités</a>
                                <a href="{{ url('../coupure') }}" class="dropdown-item">Avis d'interruption </a>
                            </div>
                        </div>

                        <a href="{{ url('../') }}#contact" class="nav-item">CONTACT</a>
                    </div>
                     </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-headere py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Mot de Directeur Général </h1>
        </div>
    </div>


    <!-- Page presentation RADEEL  -->
    <!-- <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row ">
                <div class="col-lg">
                    <div class="section-title position-relative ">
                        <h2 class="mb-0 text" style="color: #077ec0;"> Régie Autonome Intercommunale de Distribution
                            d'Eau et d'Electricité de la Province de Larache </h2>
                    </div>
                    <br>
                    <p>La régie autonome intercommunale de distribution d’eau et d’électricité de la Province de Larache
                        est un établissement public à caractère industriel et commercial doté de la responsabilité
                        civile et de l’autonomie financière.</p>
                    <p>Cet établissement a été crée en janvier 1996 conformément au décret n° 2-64-394 du 22 joumada I
                        1384 (29 septembre 1964), aux délibérations du syndicat des communes et à l’arrêté de Monsieur
                        le Ministre de l’intérieur n° 9-95-96.</p>
                </div>
            </div>
        </div>
    </div> -->
    <br><br>
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" id="motsDirecteur">
        <div class="container">
            <div class="row g-5">
                <!-- Text column - On larger screens, the text and title will be on the left -->
                <div class="col-lg-7">
                    <div class="section-title position-relative">
                        <h2 class="mb-0 text" style="color: #077ec0;">Mot du Directeur Général Mr Mohamed CHAOUI</h2>
                    </div>
                    <br>

                    <!-- Image only visible on mobile -->
                    <div class="d-lg-none mb-4"> <!-- Only visible on mobile screens -->
                        <img class="rounded wow zoomIn img-fluid" data-wow-delay="0.1s" src="img/directeur.jpg"
                            style="object-fit: cover; display: block; height: 300px;">
                    </div>

                    <p class="mb-4">
                        La RADEEL s’érige en acteur incontournable du développement durable de la Province de Larache,
                        en assurant une distribution fiable, continue et sécurisée de l’eau potable et de l’électricité,
                        ainsi qu’un service d’assainissement liquide de qualité supérieure.
                    </p>
                    <p class="mb-4">
                        Notre mission réside dans l’amélioration des conditions de vie de nos concitoyens, à travers la
                        fourniture de services d’excellence, accessibles à tous, répondant avec efficacité, transparence
                        et équité aux besoins et attentes de notre clientèle.
                    </p>
                    <p class="mb-4">
                        Profondément ancrée dans une démarche de protection environnementale, la RADEEL a élaboré un
                        plan d’investissement ambitieux pour la période 2024-2028. Ce plan inclut un vaste programme de
                        dépollution des villes de Larache et Ksar Kébir, doté d’une enveloppe budgétaire avoisinant un
                        milliard de dirhams. Cet engagement reflète notre détermination à préserver les ressources
                        naturelles au bénéfice des générations futures.
                    </p>
                    <p class="mb-4">
                        La gestion du stress hydrique constitue également un pilier central de notre stratégie. Nous
                        mettons en œuvre des actions visant à optimiser les performances de notre réseau d’eau potable
                        et à en garantir une gestion durable. Parallèlement, nous déployons des initiatives de
                        sensibilisation pour inciter notre clientèle à adopter des comportements responsables en matière
                        de consommation d’eau.
                    </p>
                    <p class="mb-4">
                        Le client demeure au cœur de notre stratégie. Nous nous attachons à développer et maintenir une
                        relation de confiance et de proximité avec chacun de nos clients, en adoptant une politique
                        résolument orientée vers la satisfaction de leurs attentes, dans les conditions et délais les
                        plus favorables.
                    </p>
                    <p class="mb-4">
                        Par ailleurs, la RADEEL accorde une importance primordiale au développement des compétences de
                        son personnel, reconnaissant en ses collaborateurs un levier fondamental de la réussite et du
                        développement de la régie. Nous investissons dans la formation continue et l’épanouissement au
                        travail, afin de créer un environnement propice à l’innovation, à la performance et au
                        bien-être, tout en soutenant la progression professionnelle de chacun.
                    </p>
                    <p class="mb-4">
                        Inscrite pleinement dans la politique nationale de digitalisation et de dématérialisation des
                        procédures, la RADEEL s’engage à moderniser ses processus de gestion, en adoptant des normes et
                        standards de pointe. Cette modernisation vise notamment à améliorer les services offerts à notre
                        clientèle, ainsi qu’à intégrer les technologies innovantes pour la digitalisation de nos
                        processus métiers et supports.
                    </p>
                    <p class="mb-4">
                        Nous tenons à rappeler que ces réalisations et performances s’inscrivent dans le cadre de la
                        sage politique royale, des orientations de nos instances de tutelle et bénéficient du soutien
                        précieux des autorités locales.
                    </p>
                </div>

                <!-- Image column - Visible only on larger screens, image on right -->
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="container">
                        <br>
                        <img class="rounded wow zoomIn img-fluid" data-wow-delay="0.1s" src="img/directeur.jpg"
                            style="object-fit: cover; display: block; height: 580px;">
                    </div>
                </div>
                <br>
            </div>
        </div>

    </div>
    <!-- Page mots de directeur general RADEEL End -->
    <br><br><br><br><br>

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
        });</script> <!-- Footer End -->
</body>

</html>
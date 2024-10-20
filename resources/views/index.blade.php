<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RADEEL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
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
            background: #077ec0;
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
                        <a href="{{ url('../') }}" class="nav-item nav-link active">ACCUEIL</a>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">RADEEL
                            </a>
                            <div class="dropdown-menu  ">
                                <a href="{{ url('../Quisommenous') }}" class="dropdown-item">Qui sommes-nous</a>
                                <a href="{{ url('../MotDirecteur') }}" class="dropdown-item">Mot du Directeur</a>
                                <a href="{{ url('../StructureRadeel') }}" class="dropdown-item">Organigramme de la
                                    RADEEL</a>
                                <a href="{{ url('../ActiviteRadeel') }}" class="dropdown-item">Nos Activités</a>
                                <a href="{{ url('../agences') }}" class="dropdown-item">Nos Agences</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ESPACE
                                CLIENT </a>
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
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ESPACE
                                RH</a>
                            <div class="dropdown-menu">
                                <a href="{{ url('../loi') }}" class="dropdown-item">Nos valeurs</a>
                                <a href="{{ url('../Avis recrutement') }}" class="dropdown-item">Nos offres d'emploi</a>
                                <a href="{{ url('../stage') }}" class="dropdown-item"> Nos offres Stages</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">FOURNISSEURS </a>
                            <div class="dropdown-menu bg-light ">
                                <a href="{{ url('../programme') }}" class="dropdown-item">Programme prévisionnel</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{ url('../') }}" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">PRATIQUE </a>
                            <div class="dropdown-menu ">
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


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($slider as $key => $slide)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                    class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($slider as $key => $slide)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img src="{{ asset('articlescopie/' . $slide->image) }}" width="100%" style="height: 550px;"
                        class="img-fluid" alt="slide {{ $key + 1 }}">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h2 class="text-white animated slideInRight mb-3">{{ $slide->title }}</h2>
                                    <a href="{{ url('details/' . $slide->id) }}"
                                        class="btn btn py-3 text-white px-5 animated slideInRight"
                                        style="background-color:#077ec0;">PLUS INFO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- chiffre cle start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid"
                                src="albume/1729327964_في إطار السياسة المولوية لصاحب الجلالة الملك محمد السادس نصره الله وأيده المتعلقة بالشق الخدمي، وتنزيلا لخطاب جلالته امام البرلما.jpg"
                                height="300">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/directeur.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid"
                                src="albume/1729328452_434126353_825121122965981_5250743959616601961_n.jpg">
                        </div>
                        <div class="col-6">
                            <div class=" w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center"
                                style="background-color: #A6CCDC;">

                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">{{$chiffre1->chiffre}}
                                </h1>
                                <small class="fs-5 text-white">{{$chiffre1->title}}</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-6 col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle ms-sm-auto"
                                style="background-color: #1481B8">
                                <p class="text-white mb-0">{{$chiffre2->title}} </p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$chiffre2->chiffre}}</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle me-sm-auto"
                                style="background-color: #7DB41E;">
                                <p class="text-white mb-0"> {{$chiffre3->title}} </p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$chiffre3->chiffre}} </h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle mx-sm-auto"
                                style="background-color: #95D9F4;">
                                <p class="text-white mb-0">{{$chiffre4->title}} </p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$chiffre4->chiffre}} &sup3; </h1>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-6 col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 g-sm-5 justify-content-center">

                        <div class="col-sm-6 d-flex justify-content-center">
                            <div class="about-fact btn-square flex-column rounded-circle"
                                style="background-color: #1481B8; padding: 20px;">
                                <p class="text-white  mb-0">{{$chiffre2->title}}</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$chiffre2->chiffre}}</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-center">
                            <div class="about-fact btn-square flex-column rounded-circle"
                                style="background-color: #7DB41E; padding: 20px;">
                                <p class="text-white text-center mb-0">{{$chiffre3->title}}</p>
                                <h1 class="text-white text-center mb-0" data-toggle="counter-up">{{$chiffre3->chiffre}}</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-center">
                            <div class="about-fact btn-square flex-column rounded-circle"
                                style="background-color: #95D9F4; padding: 20px;">
                                <p class="text-white mb-0">{{$chiffre4->title}}</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$chiffre4->chiffre}} &sup3;</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- chiffre cle END -->

    <!-- annance fix start-->
    <div class="container">
        @foreach($zone as $z)
            <img src="{{ asset('zone/' . $z->image) }}" width="100%" class="img-fluid">
        @endforeach
        <br><br>
        <div>
            <button style="float: right;background-color:#077ec0;color:white" class="btn"><a
                    href="http://172.16.1.189:8000/stress" style="color:white"><span>...</span>المزيد
                </a> </button>
        </div>
    </div>
    <br><br>


    <!-- Nos services   -->
    <div class="container-fluid services  py-5 mb-5" style=" background-color: #ffff;cursor: pointer;" id="serviceID"
        bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="text-center fh5co-recent-news mx-auto pb-5 wow fadeIn" data-wow-delay=".3s"
                style="max-width: 600px; color: #077ec0; background-color: #ffff;" bis_skin_checked="1">
                <h1 class="" style="color:#077ec0">Nos Services</h1>
                <hr class="mx-auto" />
            </div>
            <div class="row g-5 bg-white services-inner" bis_skin_checked="1">

                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s" bis_skin_checked="1">
                    <div class=" shadow services-item" style="background-color: #ffff;" bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <!-- <i class="fa fa-file" aria-hidden="true" style="font-size: 150px;padding: 20px; color: #077ec0;" ></i>-->
                                <a href="{{ route('bureau') }}">
                                    <img src="img/abonnement.png" alt="" height="100px" width="30%"><br><br>
                                    <h4 class="mb-3"> Bureau d'ordre</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s" bis_skin_checked="1">
                    <div class="shadow services-item " style="background-color: white;" bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/paiement') }}"
                                    bis_size="{&quot;x&quot;:327,&quot;y&quot;:1329,&quot;w&quot;:352,&quot;h&quot;:114,&quot;abs_x&quot;:327,&quot;abs_y&quot;:1329}">
                                    <img src="img/paiement-securise.png" alt="" height="100px" width="30%"
                                        bis_size="{&quot;x&quot;:433,&quot;y&quot;:1291,&quot;w&quot;:140,&quot;h&quot;:100,&quot;abs_x&quot;:433,&quot;abs_y&quot;:1291}"
                                        bis_id="bn_cxuqocn0vprovyus39cjmp"><br><br>
                                    <h4 class="mb-3">Paiement en ligne </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s" bis_skin_checked="1">
                    <div class=" shadow services-item " style="bacskground-color: #ffff;" bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/SMS') }}">
                                    <img src="img/messagerie.png" alt="" height="100px" width="30%"><br><br>
                                    <h4 class="mb-3">Service SMS</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s" bis_skin_checked="1">
                    <div class=" shadow services-item" style="background-color: #ffff; " bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/reclamation') }}">

                                    <img src="img/contracter.png" alt="" height="100px" width="30%"><br><br>
                                    <h4 class="mb-3">Réclamation </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s" bis_skin_checked="1">
                    <div class=" shadow services-item" style="background-color: #ffff; color:black; "
                        bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/Abonnement') }}">
                                    <img src="img/brancher.png" alt="" height="100px" width="30%"><br><br>
                                    <h4 class="mb-3"> Abonnement - Raccordement </h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s" bis_skin_checked="1">
                    <div class=" shadow services-item " style="background-color: #ffff; " bis_skin_checked="1">
                        <div class="p-4 text-center services-content" bis_skin_checked="1">
                            <div class="services-content-icon" bis_skin_checked="1">
                                <a href="{{ url('/resiliation') }}">
                                    <img src="img/contracter.png" alt="" height="100px" width="30%"><br><br>
                                    <h4 class="mb-3"> Résiliation</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="news section-padding" id="news">
        <div class="container">
            <div class="row">
                <div class="text-center fh5co-recent-news wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" bis_skin_checked="1">

                    <h1 class="" style="color:#077ec0; "> Actualités </h1>
                    <hr class="mx-auto" />
                    <br>
                </div>

                <div class="col-lg-8 col-12 mb-5 mb-lg-0">
                    <div class="news-thumb" data-aos="fade-up">
                        <a href="{{ route('details', $articleone->id) }}"
                            class="news-image-hover news-image-hover-warning">
                            <img src="{{ asset('articlescopie/' . $articleone->image) }}" style="width: 100%;"
                                class="img-fluid large-news-image news-image news-image-hover-primary">
                        </a>

                        <div class="news-text-info">
                            <h4 class="news-title" style="text-align: right;">
                                <a href="{{ route('details', $articleone->id) }}" class="news-title-link">
                                    {{ Illuminate\Support\Str::limit($articleone->title, $limit = 90, $end = '...') }}
                                </a>
                                <div class="news-category bg-warning text-white">Nouveau</div>
                            </h4>
                            <!-- <div class="d-flex flex-wrap">
                                <span class="text-muted">{{ $articleone->created_at }}</span>
                            </div> -->
                        </div>
                    </div>
                </div>

                <br>
                <style>
                    /* General styles for images */
                    .news-image {
                        max-width: 100%;
                        /* Ensures the image doesn't exceed container width */
                        height: auto;
                        /* Maintains aspect ratio */
                    }

                    /* Responsive adjustments */
                    @media (max-width: 768px) {
                        .news-image {
                            max-width: 100%;
                            /* Image fills the screen width */
                        }

                        .news-title {
                            font-size: 1.25em;
                            /* Increase font size for better readability on mobile */
                        }

                        /* Adjust button styling on mobile */
                        .form-control {
                            font-size: 1.1em;
                            padding: 10px;
                        }
                    }

                    @media (min-width: 768px) {

                        /* On larger screens (like tablets and desktops), you can adjust the image size */
                        .news-image {
                            width: 200px;
                            /* Specific width for larger screens */
                        }
                    }
                </style>

                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                    @foreach($articles as $a)
                        <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                            <div class="news-top w-100">
                                <a href="{{ route('details', $a->id) }}" class="news-image-hover-primary">
                                    <img src="{{ asset('articlescopie/' . $a->image) }}" class="img-fluid news-image"
                                        alt="">
                                </a>
                                <div class="news-category text-white" style="background-color:#077ec0;">Nouveau</div>
                            </div>
                            <div class="news-bottom">
                                <div class="news-text-info">
                                    <h4 class="news-title">
                                        <a href="{{ route('details', $a->id) }}" class="news-title-link">
                                            {{ Illuminate\Support\Str::limit($a->title, $limit = 40, $end = '...') }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100" data-aos="fade-up">
                            <a href="{{ route('Actualite') }}">
                                <button class="w-100 btn form-control border py-3"
                                    style="background-color:#077ec0; color:#eeeee4; border: #077ec0; margin-top:12px;"
                                    type="submit">
                                    Voir plus
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <br><br><br>

    <style>
        .btn-play {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: orange;
            color: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #G1 {
            background-image: url("img/VIDEO - 28-03-2024.png");
            background-size: cover;
        }

        #G2 {
            background-image: url("img/Capture d’écran 2024-06-25 134935.png");
            background-size: cover;
        }

        #G3 {
            background-image: url("img/VIDEO - 29-03-20241.3.png");
            background-size: cover;
        }
    </style>

    <!-- Actualite end -->

    <div class="media-block py-5" style="background: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, .8)),
            url('https://images.pexels.com/photos/7358746/pexels-photo-7358746.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center center no-repeat;
        background-size: cover;" id="AudioVisual">
        <!-- <div class="media-block py-5" style="background: blue;" id="AudioVisual"> -->
        <div class="container">
            <h4 class="text-white text-center mb-3">Audiovisuel</h4>
            <div class="row gx-md-5">
                <div class="col-12 col-md-4 mb-md-5">
                    <div class="ratio ratio-16x9" id="G1">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/zLvQZ0MGPyw" data-bs-target="#videoModal">
                            <i class="fas fa-play" style="color:white;"></i>
                        </button>
                    </div>
                </div>
                <br><br> <br><br> <br><br><br><br>
                <div class="col-12 col-md-4 mb-md-5">
                    <div class="ratio ratio-16x9" id="G2">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/YXJTb0oST_M" data-bs-target="#videoModal">
                            <i class="fas fa-play" style="color:white;"></i>
                        </button>
                    </div>
                </div>
                <br><br> <br><br><br><br><br><br>
                <div class="col-12 col-md-4 mb-md-5">
                    <div class="ratio ratio-16x9" id="G3">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/NpXv5g4BMSI" data-bs-target="#videoModal">
                            <i class="fas fa-play" style="color:white;"></i>
                        </button>
                    </div>
                </div>

                <div>
                    <button style="float: right;background-color:#077ec0;color:white" class="btn">
                        <a href="{{route('galerie')}}" style="color:white">
                            Voir plus
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const videoModal = document.getElementById('videoModal');
            videoModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const videoSrc = button.getAttribute('data-src');
                const videoFrame = videoModal.querySelector('#video');
                videoFrame.src = videoSrc;
            });

            videoModal.addEventListener('hide.bs.modal', function (event) {
                const videoFrame = videoModal.querySelector('#video');
                videoFrame.src = '';
            });
        });
    </script>
    <style>
        .container-service::before {
            position: absolute;
            background: #f1f9fe;
            content: "";
            width: 100%;
            height: 100%;
            left: 0px;
            clip-path: polygon(0 0, 100% 0, 100% 30%, 0 60%);
            z-index: -1;
        }
    </style>

    <!-- Contact  -->
    <div class="container-fluid container-service fh5co-recent-news contact" bis_skin_checked="1" id="contact"
        style="margin-top:-50px">
        <div class="container" bis_skin_checked="1">
            <div class="text-center mx-auto" style="max-width: 700px; padding-top:70px;" bis_skin_checked="1">
                <h1 class="text" style="color:#077ec0"><br>Contactez Nous</h1>
                <hr class="mx-auto" />
            </div>
            <br><br>
            <div class="shadow-lg bg-white rounded" bis_skin_checked="1">
                <div class="p-5 row g-4" bis_skin_checked="1">

                    <!-- Contact Information Section (left side) -->

                    <div class="col-lg-5 col-md-12" bis_skin_checked="1">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="d-flex p-2 rounded mb-2 bg-white" bis_skin_checked="1">
                                    <i class="fas fa-map-marker-alt fa-2x text me-2" style="color:#077ec0 "></i>
                                    <div bis_skin_checked="1">
                                        <h5>Address</h5>
                                        <p class="mb-2">1647, lot Maghreb Jadid, Larache</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-column flex-md-row p-2 rounded mb-2 bg-white">
                                            <i class="fas fa-envelope fa-2x text me-2" style="color:#077ec0;"></i>
                                            <div>
                                                <h5>Email</h5>
                                                <p class="mb-2">reclamation@radeel.ma</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="d-flex p-2 rounded mb-2 bg-white" bis_skin_checked="1">
                                    <i class="fa fa-phone-alt fa-2x text me-2" style="color:#077ec0"></i>
                                    <div bis_skin_checked="1">
                                        <h5>Téléphone</h5>
                                        <p class="mb-2">0801 000 042</br>
                                            0539 520 848</br>
                                            0593 520 853</br>
                                            0593 520 925</br>
                                            0674 908 768
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="d-flex p-2 rounded mb-2 bg-white" bis_skin_checked="1">
                                    <i class="fas fa-clock fa-2x text me-2" style="color:#077ec0"></i>
                                    <div bis_skin_checked="1">
                                        <h5>Heures d'ouverture</h5>
                                        <p class="mb-2">Lun-Ven 8:00 - 16:30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form Section (right side) -->

                    <div class="col-lg-7 col-md-12" bis_skin_checked="1">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <form action="{{ route('addcontact') }}" method="post" class="">
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Name input -->
                                        <div class="col-12 col-md-6">
                                            <input type="text" required class="form-control rounded py-3"
                                                placeholder="Votre nom" name="name" style="border: 1px solid #666;">
                                        </div>

                                        <!-- Prenom input -->
                                        <div class="col-12 col-md-6">
                                            <input type="text" required class="form-control rounded py-3"
                                                placeholder="Votre Prénom" name="prenom"
                                                style="border: 1px solid #666;">
                                        </div>
                                    </div>
                                    <br>
                                    <input type="text" required class="form-control py-3 mb-3" placeholder="Objet"
                                        name="objet" style="border: 1px solid #666;">
                                    <input type="email" required class="form-control py-3 mb-3"
                                        placeholder="Entrez votre Email" name="email" style="border: 1px solid #666;">
                                    <textarea required class="form-control mb-3" rows="6" cols="10" name="message"
                                        placeholder="Votre Message" style="border: 1px solid #666;"></textarea>
                                    <button class="btn form-control border-primary py-3 text"
                                        style="background-color:#077ec0; color:#eeeee4; border: #077ec0; font-size:19px;"
                                        type="submit">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <br><br><br>

    <!--    @foreach ($poup as $p)
        <div id="modalIndex" class="modal animated " style="cursor: pointer;">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        @if(isset($p->titre))
                            <h1 class="d-flex justify-content-start">{{ $p->titre }}</h1>
                        @endif
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if($p->des)
                            <p style="padding: 20px">{{ $p->des }}</p>
                        @endif
                        @if($p->imageannonce)
                            <a href="https://www.fatourati.ma/FatLite/ma/MTC/formulaire?fid=1040">
                                <img src="{{ asset('annonce/' . $p->imageannonce) }}" style="width: 100%;">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach -->

    <div id="modalIndex" class="modal animated" style="cursor: pointer;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <a href="https://www.fatourati.ma/FatLite/ma/MTC/formulaire?fid=1040">
                    <img src="img/sate.png" style="width: 100%;">
                </a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#modalIndex').modal('show');
        });
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>
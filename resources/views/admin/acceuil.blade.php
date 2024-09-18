<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <title>Tableau de bord RADEEL</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8 ">


    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- summer not --}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{--  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    {{--     <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 --}}
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <style>
        .tab .nav-tabs {
            border-bottom: 0 none;
            margin-top: 20px;
        }

        .tab .nav-tabs li a {
            font-size: 14px;
            color: #fff;
            margin-right: 0;
            padding: 10px 45px;
            border-radius: 0;
            overflow: hidden;
            background: #76cAEB;
            text-transform: uppercase;
            box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
            transition: all 0.4s ease 0s;
            -webkit-transition: all 0.4s ease 0s;
            -moz-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
        }

        .tab .nav-tabs li:first-child a {
            border-top-left-radius: 8px;
        }

        .tab .nav-tabs li:last-child a {
            border-top-right-radius: 8px;
        }

        .tab .nav-tabs li a:hover,
        .tab .nav-tabs li.active a:hover,
        .tab .nav-tabs li.active a {
            background: #1481b8;
            color: #fff;
            margin-top: -19px;
            padding: 20px 45px;
            border: 1px solid #1481b8;
        }

        .tab .tab-content {
            color: black;
            padding: 25px 20px;
            background: #fff;
            border-radius: 0 0 8px 8px;
            box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
            width: 1600px;
        }

        @media only screen and (max-width: 650px) {
            .tab .nav-tabs li {
                width: 100%;
            }

            .tab .nav-tabs li a {
                margin: 0;
                padding: 20px 45px;
                box-shadow: -2px -1px 25px 2px rgba(0, 0, 0, 0.4);
            }

            .tab .nav-tabs li:first-child a,
            .tab .nav-tabs li:last-child a {
                border-radius: 0;
            }

            .tab .nav-tabs li a:hover,
            .tab .nav-tabs li.active a:hover,
            .tab .nav-tabs li.active a {
                margin: 0;
            }
        }

        thead {
            text-align: center;
        }

        tbody {
            text-align: center;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user-lock"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link active" href="{{ route('profile') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profile</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pages</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('acceuil')
                            <a class="collapse-item active" href="{{ route('Acceuil') }}"><strong>Acceuil</strong></a>
                        @endcan
                        @can('communication')
                            <a class="collapse-item " href="{{ route('communication') }}"><strong>Communication</strong></a>
                        @endcan
                        @can('commerciale')
                            <a class="collapse-item " href="{{ route('commercial') }}"><strong>Commercial</strong></a>
                        @endcan
                        @can('ressources-humaines')
                            <a class="collapse-item " href="{{ route('rh') }}"><strong> Ressources humaines</strong></a>
                        @endcan
                    <!--     @can('achat-Logistique')
                            <a class="collapse-item" href="{{ route('achat') }}"><strong>Achat et Logistique</strong></a>
                        @endcan -->
                        @can('galerie')
                            <a class="collapse-item " href="{{ route('album') }}"><strong>Galerie</strong></a>
                        @endcan
                        @can('avis-coupure')
                            <a class="collapse-item " href="{{ route('avis') }}"><strong>Avis coupure</strong></a>
                        @endcan
                        @can('zone-speciale')
                            <a class="collapse-item " href="{{ route('zone') }}"><strong>Zone speciale</strong></a>
                        @endcan
                        @can('contact')
                            <a class="collapse-item " href="{{ route('contact') }}"><strong>Contact</strong></a>
                        @endcan
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../#" data-toggle="collapse" data-target="#collapsefoure"
                    aria-expanded="true" aria-controls="collapsefoure">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Statistique</span>
                </a>
                <div id="collapsefoure" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        @can('role')
                            <a class="collapse-item" href="{{ route('statistique') }}"><strong>Admin</strong></a>
                        @endcan

                        @can('communication')
                            <a class="collapse-item " href="{{ route('statistiqueC') }}"><strong>
                                    Communication</strong></a>
                        @endcan

                        @can('commerciale')
                            <a class="collapse-item " href="{{ route('statistiqueCom') }}"><strong> Commercial</strong></a>
                        @endcan

                        @can('ressources-humaines')
                            <a class="collapse-item" href="{{ route('statistiquerh') }}"><strong> Ressources
                                    Humaines</strong></a>
                        @endcan

                        @can('achat-Logistique')
                            <a class="collapse-item" href="{{ route('statistiqueachatlo') }}"><strong>Achat et
                                    Logistique</strong></a>
                        @endcan

                    </div>
                </div>
            </li>
            @can('role')
                <!-- hr -->
                <hr class="sidebar-divider">
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsethree"
                        aria-expanded="true" aria-controls="collapsethree">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Controle</span>
                    </a>
                    <div id="collapsethree" class="collapse" aria-labelledby="collapsethree" data-parent="#collapsethree">
                        <div class="bg-white py-2 collapse-inner rounded">
                            @can('role')
                                <a class="collapse-item" href="{{ route('roles') }}"><strong>Role</strong></a>
                            @endcan
                            @can('users')
                                <a class="collapse-item " href="{{ route('users') }}"><strong>Users</strong></a>
                            @endcan
                        </div>
                    </div>
                </li>
            @endcan



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}{{ auth()->user()->prenom }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('profileadmin/' . auth()->user()->file) }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <button type="submit"
                                            style="font-style: none;border: none;background: none;color: #C2C7D0">
                                            Logout
                                        </button>
                                    </a>
                                </form>

                                {{-- <a class="dropdown-item"  data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a> --}}
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" >
                    
                    <div class="row">
                        <div class="d-flex justify-content-center" style="margin:20px">
                            <div class="tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Section1"
                                            aria-controls="profile" role="tab"
                                            data-toggle="tab"><strong>Articles</strong></a></li>

                                    <li role="presentation"><a href="#Section2" aria-controls="home" role="tab"
                                            data-toggle="tab"><strong>Annonce</strong></a>
                                    </li>


                                    <li role="presentation"><a href="#Section3" aria-controls="message"
                                            role="tab" data-toggle="tab"><strong>Slider</strong></a>
                                    </li>
                                    <li role="presentation"><a href="#Section4" aria-controls="prof" role="tab"
                                            data-toggle="tab"><strong>Statistiques</strong></a>
                                    </li>

                                </ul>
                                <div class="tab-content">


                                    <!-- Annonce -->
                                    <div role="tabpanel" style="margin:20px;" class="tab-pane fade" id="Section2">

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


                                        <div class="row" bis_skin_checked="1">
                                            <div class="col-lg-4 shadow-sm py-3" bis_skin_checked="1">
                                                <div class="container " bis_skin_checked="1">
                                                    <div class="card-body text-center" bis_skin_checked="1">
                                                        @foreach ($poup as $p)
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h1 id="displayedTitre"
                                                                        style="color: black; margin-top: 10px; ">
                                                                        {{ $p->titre }}
                                                                    </h1>
                                                                    

                                                                    <p id="displayedDescription"
                                                                        style="color: black; margin-top: 10px; ">
                                                                        {{ $p->des }}
                                                                    </p>
                                                                    
                                                                    <img src="{{ asset('annonce/' . $p->imageannonce) }}"
                                                                        id="selectedImage"
                                                                        style="max-width: 100%; margin-top: 10px;"
                                                                        class="img-fluid">

                                                                        

                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    {{--   @if (isset($expire) || isset($debut))
                                                        <div class="card-footer d-flex justify-content-center">
                                                            <h5
                                                                style="color:black; margin:10px;font-size: 18px; text-align:center;">
                                                                Début d'annonce <br>
                                                                <strong style="color: red; ">
                                                                    {{ $debut }}

                                                                </strong>
                                                            </h5>

                                                            <h5
                                                                style="color:black;margin:10px; font-size: 18px;text-align:center;">
                                                                Expire d'annonce <br>
                                                                <strong style="color: red;">
                                                                    {{ $expire }}
                                                                </strong>
                                                            </h5>
                                                        </div>
                                                    @endif --}}
                                                </div>
                                            </div>

                                            <div class="col-lg-8 shadow-sm" bis_skin_checked="1">
                                                <div class="card-body text-center" bis_skin_checked="1">
                                                    <form method="post" action="{{ route('addannonce') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group row">
                                                            <label for="staticEmail"
                                                                class="col-sm-2 col-form-label"><strong
                                                                    style="color:black">Titre</strong></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    id="inputTitre"
                                                                    oninput="displayInput('inputTitre', 'displayedTitre')"
                                                                    name="titre">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label">
                                                                <strong
                                                                    style="color:black">Description</strong></label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" id="inputDescription"
                                                                    oninput="displayInput('inputDescription', 'displayedDescription')" name="des"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label"><strong
                                                                    style="color:black">Date début <span
                                                                        style="color: red">*</span></strong></label>
                                                            <div class="col-sm-10">
                                                                <input type="datetime-local" name="db"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label"><strong
                                                                    style="color:black">Date fin <span
                                                                        style="color: red">*</span></strong></label>
                                                            <div class="col-sm-10">
                                                                <input type="datetime-local" name="df"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label"><strong
                                                                    style="color:black">Annonce image <span
                                                                        style="color: red">*</span></strong></label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="image"
                                                                    class="form-control" id="annonceImage"
                                                                    onchange="displaySelectedImage(this)">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end ">
                                                            <input type="submit" class="btn btn-success"
                                                                value="Ajouter">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-lg-12 ">

                                                <h1 style="color:black; margin:20px;" class="text-center">List Annonce
                                                </h1>
                                                <table class="table dataTable table-bordered">
                                                    <thead>

                                                        <tr style="background-color:orange; color:white">
                                                            <th>Titre</th>
                                                            <th>Description</th>
                                                            <th>Image</th>
                                                            <th>Date début</th>
                                                            <th>Date de fin</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($annonce as $p)
                                                            <tr style="color:black;">
                                                                <td>{{ $p->titre }}</td>
                                                                <td>{{ strlen($p->des) > 50 ? substr($p->des, 0, 50) . '...' : $p->des }}
                                                                </td>
                                                                <td>
                                                                    <img src="{{ asset('annonce/' . $p->imageannonce) }}"
                                                                        width="80" class="img-fluid">
                                                                </td>
                                                                <td>
                                                                    {{ $p->db }}
                                                                </td>
                                                                <td>
                                                                    {{ $p->df }}
                                                                </td>
                                                                <td>
                                                                    <a href="#updateannonce{{ $p->id }}"
                                                                        class="btn" data-toggle="modal">
                                                                        <i class="fas fa-edit"
                                                                            style="color: green; font-size:30px"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        function displaySelectedImage(input) {
                                            var selectedImage = document.getElementById('selectedImage');

                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function(e) {
                                                    selectedImage.src = e.target.result;
                                                    selectedImage.style.display = 'block';
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            } else {
                                                selectedImage.style.display = 'none';
                                            }
                                        }
                                    </script>

                                    <script>
                                        function displayInput(inputId, displayId) {
                                            var inputElement = document.getElementById(inputId);
                                            var displayElement = document.getElementById(displayId);

                                            if (inputElement.value.trim() !== '') {
                                                displayElement.innerText = inputElement.value;
                                                displayElement.style.display = 'block';
                                            } else {
                                                displayElement.style.display = 'none';
                                            }
                                        }
                                    </script>

                                    @foreach ($annonce as $lolo)
                                        <div class="modal fade" id="updateannonce{{ $lolo->id }}" tabindex="-1"
                                            aria-labelledby="updateannonce" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('updateannonce', $lolo->id) }}"
                                                        method="POST">
                                                        <div class="modal-body">
                                                            @if ($lolo->titre)
                                                                <input type="text" name="titre"
                                                                    value="{{ $lolo->titre }}" class="form-control">
                                                            @endif
                                                            <br>
                                                            @if ($lolo->des)
                                                                <textarea type="text" name="titre" class="form-control">{{ $lolo->des }} </textarea>
                                                            @endif
                                                            <br>
                                                            @if ($lolo->imageannonce)
                                                                <img class="img-profile img-fluid"
                                                                    src="{{ asset('annonce/' . $lolo->imageannonce) }}"
                                                                    width="500">
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- Articles --}}

                                    <div role="tabpanel" style="margin:20px" class="tab-pane active" id="Section1">
                                        <div class="container-fluid">
                                            <div class=" d-flex justify-content-end" style="margin:12px;">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#addo">
                                                    <strong> <i class="fas fa-plus"></i> Ajouter</strong>
                                                </button>
                                                <br>
                                            </div>
                                            {{-- 
                                                <i class="fas fa-toggle-on"
                                                                        style="color:green;font-size:30px;"></i> 
                                                <i class="fas fa-toggle-off"
                                                                        style="color:red;font-size:30px;"></i> 
                                                --}}
                                            <table class="table dataTable table-bordered">

                                                <thead>
                                                    <tr style="background-color:orange; color:white">
                                                        <th scope="col">Titre</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Images</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($article as $e)
                                                        {{--   <tr style="color:black">
                                                            <td>{{ strlen($e->title) > 50 ? substr($e->title, 0, 50) . '...' : $e->title }} --}}
                                                        <td style="color:black">{{ $e->title }}</td>
                                                        <td>
                                                                @if ($e->status == 'oui')
                                                                            <i class="fas fa-toggle-on"
                                                                                style="color:green;font-size:30px;"></i>
                                                                @else
                                                                            <i class="fas fa-toggle-off"
                                                                                style="color:red;font-size:30px;"></i>
                                                                @endif
                                                        </td>
                                                        <td>
                                                            <img class="img-profile"
                                                                src="{{ asset('articlescopie/' . $e->image) }}"
                                                                width="70">
                                                        </td>
                                                        <td>
                                                        {{ Carbon\Carbon::parse($e->created_at)->format('Y-m-d') }}
                                                        </td>
                                                        
                                                        <td>
                                                            <a href="#editeartcile{{ $e->id }}" class="btn"
                                                                data-toggle="modal">
                                                                <i class="fas fa-edit"
                                                                    style="color: green; font-size:30px"></i>
                                                            </a>
                                                        </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>

                                        {{-- Modal for add the publication --}}

                                        <div class="modal fade" id="addo" tabindex="-1" aria-labelledby="addo"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="color:black"
                                                            id="exampleModalLabel"><strong>Slider</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action="{{ route('addarticle') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black">Titre slider :</label>
                                                                <input type="text" required class="form-control"
                                                                    id="recipient-name" name="title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">Images slider :<span
                                                                        style="color:red">( Seul images )
                                                                        *</span></label>
                                                                <input type="file" class="form-control"
                                                                    {{-- id="images" --}} name="file">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">Status :</label>
                                                                <select required class="form-control"
                                                                    style="color:black" name="status">
                                                                    <option selected disabled style="color:black">
                                                                        Select</option>
                                                                    <option value="oui">OUI</option>
                                                                    <option value="non">NON</option>
                                                                </select>
                                                            </div>
                                                            <div class="container">
                                                                <textarea id="summernote" name="des"></textarea >
                                                                 <script>
                                                                     $(document).ready(function() {
                                                                         $('#summernote').summernote();
                                                                     });
                                                                 </script>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Ajouter</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- Modal pour modifer l'annonce --}}
                                        @foreach ($article as $z)
                                            <div class="modal fade" id="editeartcile{{ $z->id }}" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:black"
                                                                id="exampleModalLabel"><strong>Slider</strong>
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post"
                                                            action="{{ route('updatearticle', $z->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Titre :</label>
                                                                    <input type="text" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="title" value="{{ $z->title }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Status :</label>
                                                                    <select required class="form-control"
                                                                        style="color:black" name="status">
                                                                        <option selected disabled style="color:black">
                                                                            Select</option>
                                                                        <option value="oui">OUI</option>
                                                                        <option value="non">NON</option>
                                                                    </select>
                                                                </div>
                                                               

                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Image :</label>
                                                                    <input required type="file" name="file"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="form-group">
                                                                    <textarea class="summernote-editor"
                                                                    data-article-id="{{ $z->id }}" 
                                                                       name="des">{{ $z->des }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-primary">Modifier
                                                            </button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Fermer
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                        {{-- Modal pour modifer l'annonce --}}
                                        @foreach ($st as $f)
                                            <div class="modal fade" id="Editst{{ $f->id }}" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:black"
                                                                id="exampleModalLabel"><strong>Statistique</strong>
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post"
                                                            action="{{ route('updatesta', $f->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Titre :</label>
                                                                    <input type="text" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="titre" value="{{ $f->title }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Chiffre :</label>
                                                                    <input type="text" required
                                                                        class="form-control" name="chiffre"
                                                                        value="{{ $f->chiffre }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="submit"
                                                                    class="btn btn-primary">Modifier
                                                                </button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Fermer
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- Modal -->
                                        <div class="modal fade" id="imageModel" tabindex="-1" role="dialog"
                                            aria-labelledby="imageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imageModalLabel">Image Preview
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="image_demo" style="width:350px; margin-top:30px">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        <button type="button"
                                                            class="btn btn-primary crop_image">Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- Slide show --}}
                                    <div role="tabpanel" style="margin:20px;" class="tab-pane" id="Section3">

                                        <div class="row" bis_skin_checked="1">
                                            <div class="col-lg-8" bis_skin_checked="1">
                                                <div class="card mb-8" bis_skin_checked="1">
                                                    <div class="card-body text-center" bis_skin_checked="1">

                                                        <div class="Container-fluid">
                                                            <div class="table" style="margin: 10px">
                                                                <tr>
                                                                    <th>
                                                                        <span style="color:white">
                                                                            <strong style="color: orangered;">
                                                                                Carrousel
                                                                                maximum support 8 Actualité</strong>
                                                                        </span>
                                                                    </th>
                                                                    <th>
                                                                        <a href="#add" class="btn btn-success"
                                                                            style="margin:20px" data-toggle="modal">
                                                                            <i class="fas fa-plus"></i>
                                                                            <strong>Ajouter nouveau Actualité</strong>
                                                                        </a>
                                                                    </th>
                                                                </tr>
                                                            </div>
                                                            <table class="table dataTable table-bordered">
                                                                <thead>
                                                                    <tr style="background-color:orange; color:white">
                                                                        <th scope="col">Titre</th>
                                                                        <th scope="col">Image</th>
                                                                        <th scope="col">Classement</th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($slider as $p)
                                                                        <tr>

                                                                            <td style="color:black;">
                                                                                {{$p->title}}
                                                                            </td>



                                                                            <td>
                                                                                <img src="{{ asset('articlescopie/' . $p->image) }}"
                                                                                    width="80">
                                                                            </td>
                                                                            @if (empty($p->classment))
                                                                                <td style="margin:10px">
                                                                                   <b>Aucun</b> 
                                                                                </td>
                                                                            @else
                                                                                <td style="margin:10px">
                                                                                   <b> {{ $p->classment }}</b>
                                                                                   
                                                                                </td>
                                                                            @endif
                                                                            <td>
                                                                            {{ Carbon\Carbon::parse($p->created_at)->format('Y-m-d') }}

                                                                            </td>
                                                                            <td>
                                                                                <a href="#Editslider{{ $p->id }}"
                                                                                    class="btn"
                                                                                    data-toggle="modal">

                                                                                    <i class="fas fa-edit"
                                                                                        style="color: green; font-size:30px"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-lg-4" bis_skin_checked="1">
                                                <div class="container text-center" bis_skin_checked="1">
                                                    <div id="carouselExampleCaptions" class="carousel slide"
                                                        data-ride="carousel">
                                                        <ol class="carousel-indicators"
                                                            style="background-color:#087fc1">
                                                            @foreach ($article as $key => $item)
                                                                <li data-target="#carouselExampleCaptions"
                                                                    data-slide-to="{{ $key }}"
                                                                    class="{{ $key == 0 ? 'active' : '' }}"></li>
                                                            @endforeach
                                                        </ol>
                                                        <div class="carousel-inner" style="height: 100%; ">
                                                            @foreach ($slider as $key => $item)
                                                                <div
                                                                    class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                    <img src="{{ asset('articlescopie/' . $item->image) }}"
                                                                        width="1200px" height="800px"class="img-fluid"
                                                                        style="object-fit: cover;height: 100%;">
                                                                    <div class="carousel-caption d-none d-md-block">
                                                                        <h1 style="color: white">
                                                                            <strong class="truncate-text">
                                                                                {{ Illuminate\Support\Str::limit($item->title, $limit = 20, $end = '...') }}
                                                                            </strong>
                                                                        </h1>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                            {{-- Modal for add the slider --}}

                                            <div class="modal fade" id="add" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:black"
                                                                id="exampleModalLabel"><strong>Slider</strong></h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="{{ route('addslide') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Articles :</label>
                                                                    <select required class="form-control"
                                                                        style="color:black" name="articles_id">
                                                                        <option selected disabled style="color:black">
                                                                            Select..</option>
                                                                        @foreach ($article as $a)
                                                                            <option value="{{ $a->id }}">
                                                                                {{ strlen($a->title) > 50 ? substr($a->title, 0, 50) . '...' : $a->title }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Classment :</label>
                                                                    <input type="number" name="classment"
                                                                        class="form-control">
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Fermer</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Ajouter</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Modal pour modifer l'annonce --}}
                                            @foreach ($slider as $f)
                                                <div class="modal fade" id="Editslider{{ $f->id }}"
                                                    tabindex="-1" aria-labelledby="add" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" style="color:black"
                                                                    id="exampleModalLabel"><strong>Slider</strong>
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form method="post"
                                                                action="{{ route('updateslide', $f->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">


                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label"
                                                                            style="color:black">Classment :</label>
                                                                        <input type="number" name="classment"
                                                                            value="{{ $f->classment }}"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">

                                                                    <button type="submit"
                                                                        class="btn btn-primary">Modifier
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal">Fermer
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach




                                        </div>

                                    </div>



                                    {{-- Statistique --}}
                                    <div role="tabpanel" style="margin:20px" class="tab-pane fade" id="Section4">
                                        <div class="container-fluid">
                                            <table class="table dataTable table-bordered">
                                                <thead>
                                                    <tr style="background-color:orange; color:white">
                                                        <th scope="col">Titre</th>
                                                        <th scope="col">Chiffre</th>
                                                        <th scope="col">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($st as $e)
                                                        <tr style="color:black">
                                                            <td>{{ $e->title }}</td>
                                                            <td>
                                                                {{ $e->chiffre }}
                                                            </td>

                                                            <td>
                                                                <a href="#Editsta{{ $e->id }}" class="btn"
                                                                    data-toggle="modal">
                                                                    <i class="fas fa-edit"
                                                                        style="color: green; font-size:30px"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- Modal for add the publication --}}

                                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="add"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="color:black"
                                                            id="exampleModalLabel"><strong>Slider</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action="{{ route('addslide') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black">Titre :</label>
                                                                <input type="text" required class="form-control"
                                                                    id="recipient-name" name="titre">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">Status :</label>
                                                                <select required class="form-control"
                                                                    style="color:black" name="status">
                                                                    <option selected disabled style="color:black">
                                                                        Select</option>
                                                                    <option value="activer">Activer</option>
                                                                    <option value="desactiver">Desactive</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">Image :</label>
                                                                <input required type="file" name="file"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Ajouter</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- Modal pour modifer l'annonce --}}
                                        @foreach ($st as $f)
                                            <div class="modal fade" id="Editsta{{ $f->id }}" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:black"
                                                                id="exampleModalLabel"><strong>Statistique</strong>
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post"
                                                            action="{{ route('updatesta', $f->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Titre :</label>
                                                                    <input type="text" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="titre" value="{{ $f->title }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Chiffre :</label>
                                                                    <input type="text" required
                                                                        class="form-control" name="chiffre"
                                                                        value="{{ $f->chiffre }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="submit" class="btn btn-primary">Modifer
                                                                </button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Fermer
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    {{--     <div class="container-fluid">
        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Uploaded Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div id="upload-demo"></div>
                            </div>

                            <div class="col-md-4">
                                <div id="show-crop-image" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Bootstrap core JavaScript-->
    {{--  <script>
        $(document).ready(function() {
            $('#images').on('change', function(e) {
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    $('#uploadedImage').attr('src', reader.result);
                    $('#imageModal').modal('show');
                }
                reader.readAsDataURL(file);
            });
        });
    </script> --}}
    <!-- Custom scripts for all pages-->

    <!-- Bootstrap core JavaScript-->


    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->




    <!-- Your script to initialize Summernote for each textarea -->


    {{--   <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
            }
        });
        var resize = $('#upload-demo').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 900,
                height: 400
            },
            boundary: {
                width: 1080,
                height: 600
            }
        });


        $('#images').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                resize.croppie('bind', {
                    url: e.target.result
                }).then(function() {
                    console.log('success bind image');
                });

            }
            reader.readAsDataURL(this.files[0]);
        });

        $('.image-upload').on('click', function(ev) {
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'

            }).then(function(img) {
                $.ajax({
                    url: '{{ route('save') }}',
                    type: "POST",
                    data: {
                        "image": img
                    },
                    success: function(data) {
                        html = '<img src="' + img + '" />';
                        $("#show-crop-image").html(html);
                    }
                });
            });
        });
    </script> --}}


    <!-- Inclure jQuery avant jQuery Migrate et Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Article.....',
                tabsize: 2,
                lang: 'ar-AR',
                height: 100
            });
            $('.summernote-editor').each(function() {
                const articleId = $(this).data('article-id');
                $(this).summernote();
            });
        });
    </script>


    <!-- Inclure Bootstrap JS -->


    <!-- Your script to initialize Summernote for each textarea -->

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>

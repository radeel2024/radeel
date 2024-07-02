<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord RADEEL</title>
    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
       
    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    


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
            background: #FFF;
            border-radius: 0 0 8px 8px;
            box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
            width:1600px;
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
        thead{
            text-align: center;
        }
        tbody{
            text-align: center;
        }
    </style>
    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('acceuil')
                            <a class="collapse-item" href="{{ route('Acceuil') }}"><strong>Acceuil</strong></a>
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
                        @can('achat-Logistique')
                            <a class="collapse-item active" href="{{ route('achat') }}"><strong>Achat et Logistique</strong></a>
                        @endcan
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
                                <a class="collapse-item" href="{{route('roles')}}"><strong>Role</strong></a>
                            @endcan
                            @can('users')
                                <a class="collapse-item " href="{{route('users')}}"><strong>Users</strong></a>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center" style="margin:20px">
                            <div class="tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home"
                                            role="tab" data-toggle="tab"><strong>
                                                Appels d'offres</strong></a>
                                    </li>


                                    <li role="presentation"><a href="#Section3" aria-controls="messages"
                                            role="tab" data-toggle="tab"><strong>Résultat appels
                                                d'offre</strong></a>
                                    </li>

                                </ul>
                                <div class="tab-content">

                                    {{--  Avis Recrutement  --}}
                                    <div role="tabpanel" style="margin:20px;" class="tab-pane active"
                                        id="Section1">

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

                                        <div class="container-fluid">
                                            <div class="table" style="margin: 10px">
                                                <tr>
                                                    <th>
                                                        <a href="#add" class="btn btn-success" style="margin:20px"
                                                            data-toggle="modal"><i class="fas fa-plus"></i>
                                                            <strong>Ajouter une appels d'offre</strong>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </div>
                                            <table class="table dataTable  ">
                                                <thead class="text-center">
                                                    <tr style="background-color:orange; color:white">
                                                        <th scope="col">N ° appels offre</th>

                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>

                                                @foreach ($appels as $p)
                                                    <tbody>
                                                        <tr style="color:black">
                                                            <td class="dynamic-td text-center" style="color:black">
                                                                {{ $p->title }}</td>

                                                            <td class="text-center">
                                                                <a href="#Edit{{ $p->id }}" class="btn"
                                                                    data-toggle="modal">
                                                                   
                                                                    <i class="fas fa-edit"  style="color: green; font-size:30px"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach

                                                <style>
                                                    .dynamic-td {
                                                        white-space: nowrap;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis;
                                                        max-width: 50px;
                                                        /* Adjust max-width as needed */
                                                    }
                                                </style>

                                            </table>
                                        </div>

                                        {{-- Modal for add the appels offre --}}

                                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="add"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="color:black"
                                                            id="exampleModalLabel"><strong>Appels d'offre</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action="{{ route('addappeloffre') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black"><strong>Title
                                                                        :</strong></label>
                                                                <textarea required class="form-control" id="recipient-name" name="title"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black"><strong>Objet
                                                                        :</strong></label>
                                                                <textarea required class="form-control" id="recipient-name" name="objet"></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="table-responsive">
                                                                    <div
                                                                        class="table-title d-flex justify-content-end">
                                                                        <button type="button" onclick="addNewRow()"
                                                                            class="btn btn-primary add-new">
                                                                            <i class="fas fa-plus-circle"></i>
                                                                            Ajouter
                                                                        </button>
                                                                    </div>
                                                                    <br>
                                                                    <div class="table-wrapper">
                                                                        <table class="table dataTable table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>N ° d’AO</th>
                                                                                    <th>Consistance</th>
                                                                                    <th>Caution <br>Provisoire (DH)</th>
                                                                                    <th>Estimation<br> du projet (DH) HT
                                                                                    </th>
                                                                                    <th>Estimation<br> du projet (DH)
                                                                                        TTC
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                {{--  <tr>
                                                                                    <td>03/A/2023</td>
                                                                                    <td>ASSISTANCE AUX INTERVENTIONS DE
                                                                                        MAINTENANCE ET D’ENTRETIEN SUR
                                                                                        LE RESEAU D’EXPLOITATION
                                                                                        ELECTRICITE, EAU POTABLE ET
                                                                                        ASSAINISSEMENT DE LA RADEEL</td>
                                                                                    <td>40 000,00</td>
                                                                                    <td>2 400 000,00</td>
                                                                                    <td>2 880 000,00</td>
                                                                                  
                                                                                </tr> --}}

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black"><strong>Descriprtion
                                                                        :</strong></label>
                                                                <textarea required class="form-control" id="recipient-name" name="des"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-primary">
                                                                Ajouter
                                                            </button>

                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Fermer
                                                            </button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($appels as $f)
                                            <div class="modal fade" id="Edit{{ $f->id }}" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:black"
                                                                id="exampleModalLabel"><strong>Avis appels
                                                                    d'offre</strong>
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post"
                                                            action="{{ route('updateappeloffre', $f->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black"><strong>Title
                                                                            :</strong></label>
                                                                    <textarea required class="form-control" id="recipient-name" name="title">{{ $f->title }}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black"><strong>Objet
                                                                            :</strong></label>
                                                                    <textarea required class="form-control" id="recipient-name" name="objet">{{ $f->objet }}</textarea>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black"><strong>Descriprtion
                                                                            :</strong></label>
                                                                    <textarea required class="form-control" id="recipient-name" name="des">{{ $f->des }}</textarea>
                                                                </div>

                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <div class="table-responsive">

                                                                        <div class="table-wrapper">
                                                                            <table class="table ">
                                                                                <thead>
                                                                                    <tr style="background-color:orange; color:white">
                                                                                        <th>N ° d’AO</th>
                                                                                        <th>Consistance</th>
                                                                                        <th>Caution <br>Provisoire (DH)
                                                                                        </th>
                                                                                        <th>Estimation<br> du projet
                                                                                            (DH) HT
                                                                                        </th>
                                                                                        <th>Estimation<br> du projet
                                                                                            (DH)
                                                                                            TTC
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($avis as $a)
                                                                                        @if ($a->avis_offre == $f->id)
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <textarea placeholder="np[]" class="form-control" name="np[]">{{ $a->np }}</textarea>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <textarea placeholder="con[]" class="form-control" name="con[]">{{ $a->con }}</textarea>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <textarea placeholder="cituation_provisoire[]" class="form-control" name="cituation_provisoire[]">{{ $a->cituation_provisoire }}</textarea>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <textarea placeholder="ht[]" class="form-control" name="ht[]">{{ $a->ht }}</textarea>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <textarea placeholder="ttc[]" class="form-control" name="ttc[]">{{ $a->ttc }}</textarea>
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="modal-footer">

                                                                                <button type="submit"
                                                                                    class="btn btn-primary">
                                                                                    Modifier
                                                                                </button>

                                                                                <button type="button"
                                                                                    class="btn btn-danger"
                                                                                    data-dismiss="modal">Fermer
                                                                                </button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                   {{--  <div class="modal fade" id="add" tabindex="-1" aria-labelledby="add"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="color:black"
                                                        id="exampleModalLabel"><strong>Appels d'offre</strong></h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="{{ route('addappeloffre') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label"
                                                                style="color:black"><strong>Title
                                                                    :</strong></label>
                                                            <textarea required class="form-control" id="recipient-name" name="title"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label"
                                                                style="color:black"><strong>Objet
                                                                    :</strong></label>
                                                            <textarea required class="form-control" id="recipient-name" name="objet"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="table-responsive">
                                                                <div class="table-title d-flex justify-content-end">
                                                                    <button type="button" onclick="addNewRow()"
                                                                        class="btn btn-primary add-new">
                                                                        <i class="fas fa-plus-circle"></i>
                                                                        Add New
                                                                    </button>
                                                                </div>
                                                                <br>
                                                                <div class="table-wrapper">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr >
                                                                                <th>N ° d’AO</th>
                                                                                <th>Consistance</th>
                                                                                <th>Caution <br>Provisoire (DH)</th>
                                                                                <th>Estimation<br> du projet (DH) HT
                                                                                </th>
                                                                                <th>Estimation<br> du projet (DH)
                                                                                    TTC
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            {{--  <tr>
                                                                                    <td>03/A/2023</td>
                                                                                    <td>ASSISTANCE AUX INTERVENTIONS DE
                                                                                        MAINTENANCE ET D’ENTRETIEN SUR
                                                                                        LE RESEAU D’EXPLOITATION
                                                                                        ELECTRICITE, EAU POTABLE ET
                                                                                        ASSAINISSEMENT DE LA RADEEL</td>
                                                                                    <td>40 000,00</td>
                                                                                    <td>2 400 000,00</td>
                                                                                    <td>2 880 000,00</td>
                                                                                  
                                                                                </tr> --}}

                                                                      {{--   </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label"
                                                                style="color:black"><strong>Descriprtion
                                                                    :</strong></label>
                                                            <textarea required class="form-control" id="recipient-name" name="des"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="submit" class="btn btn-primary">
                                                            Ajouter
                                                        </button>

                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Femer
                                                        </button>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>  --}}
                                    {{--   <div class="form-group">
                                        <div class="table-responsive">
                                            <div
                                                class="table-title d-flex justify-content-end">
                                                <button type="button" onclick="addNewRow()"
                                                    class="btn btn-primary add-new">
                                                    <i class="fas fa-plus-circle"></i>
                                                    Add New
                                                </button>
                                            </div>
                                            <br>
                                            <div class="table-wrapper">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>N ° d’AO</th>
                                                            <th>Consistance</th>
                                                            <th>Caution <br>Provisoire (DH)</th>
                                                            <th>Estimation<br> du projet (DH) HT
                                                            </th>
                                                            <th>Estimation<br> du projet (DH)
                                                                TTC
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> --}}



                                    {{-- Resultat apple offer --}}
                                    <div role="tabpanel" style="margin:20px" class="tab-pane fade" id="Section3">

                                        <div class="container-fluid ">
                                            <div class="table" style="margin: 10px">
                                                <tr>
                                                   
                                                    <th>
                                                        <a href="#addeappel" class="btn btn-success"
                                                            style="margin:20px" data-toggle="modal"><i class="fas fa-plus"></i>
                                                            <strong>
                                                                Ajouter une résultat appels offre
                                                            </strong>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </div>
                                            <table class="table  dataTable table-bordered ">
                                                <thead class="text-center">
                                                    <tr style="background-color:orange; color:white">
                                                        <th scope="col">N ° Appels Offer</th>
                                                        <th scope="col">Fichier</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>

                                                
                                                    <tbody>
                                                        @foreach ($resultat as $p)
                                                        <tr style="color:black">
                                                            <td class="dynamic-td">{{ $p->appele_offer }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ asset('resultatappeloffer/' . $p->file) }}"
                                                                    class="btn ">
                                                                    <i class="fas fa-file-pdf" style="color:red ; font-size:30px;"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#Editeappelsoofer{{ $p->id }}"
                                                                    class="btn" data-toggle="modal">
                                                                    <i class="fas fa-edit"  style="color: green; font-size:30px"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                <style>
                                                    .dynamic-td {
                                                        white-space: nowrap;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis;
                                                        max-width: 100px;
                                                        /* Adjust max-width as needed */
                                                    }
                                                </style>

                                            </table>
                                        </div>
                                        {{-- Modal for add the publication --}}

                                        <div class="modal fade" id="addeappel" tabindex="-1" aria-labelledby="add"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="color:black"
                                                            id="exampleModalLabel"><strong>Appels Offre</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post"
                                                        action="{{ route('addresultatappeloffre') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black">Résultat Appels Offer :</label>

                                                                <select class="form-control" name="appele_offer">
                                                                    <option selected disabled>Séléctionner appels
                                                                        offre...</option>
                                                                    @foreach ($avis as $v)
                                                                        <option value="{{ $v->np }}"
                                                                            style="color:black">{{ $v->np }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">File :</label>
                                                                <input required type="file" name="file"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-primary">Ajouter
                                                            </button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Fermer
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($resultat as $f)
                                            <div class="modal fade" id="Editeappelsoofer{{ $f->id }}"
                                                tabindex="-1" aria-labelledby="add" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:black"
                                                                id="exampleModalLabel"><strong>Publication</strong>
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post"
                                                            action="{{ route('updateresultatoffre', $f->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Résultat Appels Offre
                                                                        :</label>

                                                                    <select class="form-control" name="appele_offer">
                                                                        <option selected disabled>Selectionner appels
                                                                            offer...</option>
                                                                        @foreach ($avis as $v)
                                                                            <option value="{{ $v->np }}"
                                                                                style="color:black">
                                                                                {{ $v->np }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">File :</label>
                                                                    <input required type="file" name="file"
                                                                        class="form-control">
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

  

    
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    {{--  --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>

    <script>
        function addNewRow() {
            // Get the table body
            var tableBody = document.querySelector('.table-bordered tbody');

            // Create a new table row
            var newRow = document.createElement('tr');

            // Define an array of column names
            var columns = ['np[]', 'con[]', 'cituation_provisoire[]', 'ht[]',
                'ttc[]'
            ];

            // Iterate through each column and create a cell with a textarea and the 'form-control' class
            columns.forEach(function(columnName) {
                var newCell = document.createElement('td');
                var textarea = document.createElement('textarea');

                // Set the placeholder and add the 'form-control' class
                textarea.setAttribute('placeholder', columnName);
                textarea.classList.add('form-control');

                // Set the name attribute based on the columnName
                textarea.setAttribute('name', columnName.toLowerCase());

                newCell.appendChild(textarea);
                newRow.appendChild(newCell);
            });

            // Append the new row to the table body
            tableBody.appendChild(newRow);
        }
    </script>


    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>

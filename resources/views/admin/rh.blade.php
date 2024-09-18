<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord RADEEL</title>

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
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('acceuil')
                            <a class="collapse-item " href="{{ route('Acceuil') }}"><strong>Acceuil</strong></a>
                        @endcan
                        @can('communication')
                            <a class="collapse-item " href="{{ route('communication') }}"><strong>Communication</strong></a>
                        @endcan
                        @can('commerciale')
                            <a class="collapse-item " href="{{ route('commercial') }}"><strong>Commercial</strong></a>
                        @endcan
                        @can('ressources-humaines')
                            <a class="collapse-item active" href="{{ route('rh') }}"><strong> Ressources
                                    humaines</strong></a>
                        @endcan
                        <!-- @can('achat-Logistique')
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-center" style="margin:20px">
                            <div class="tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home"
                                            role="tab" data-toggle="tab"><strong>
                                                Avis de
                                                Recrutement</strong></a>
                                    </li>
                                    <li role="presentation"><a href="#Section2" aria-controls="profile"
                                            role="tab" data-toggle="tab"><strong>Résultats
                                                des concours</strong></a>
                                    </li>

                                    <li role="presentation"><a href="#Section4" aria-controls="messages"
                                            role="tab" data-toggle="tab"><strong>Demande de
                                                stage</strong></a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <!-- Avis Recrutement -->
                                    <div role="tabpanel" style="margin:20px;" class="tab-pane active" id="Section1">
                                        @if (Session::has('success'))
                                            <script>
                                                swal("Message", "{{ Session::get('success') }}", 'success', {
                                                    button: true,
                                                    button: "OK"
                                                });
                                            </script>
                                        @endif
                                        <!-- Begin Page Content -->
                                        <div class="container-fluid">
                                            <div class="table" style="margin: 10px">
                                                <tr>
                                                    <th>
                                                        <a href="#add" class="btn btn-success" style="margin:20px"
                                                            data-toggle="modal"><i class="fas fa-plus"></i>
                                                            <strong>Ajouter un avis Recrutement</strong>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </div>
                                            <div class="card-body" style="width: 1500px;">
                                                <div class="table-responsive">
                                                    <table class="table dataTable table-bordered" width="100%"
                                                        cellspacing="0">
                                                        <thead style="color:black;">
                                                            <tr style="background-color:orange; color:white">
                                                                <th>Date de publication</th>
                                                                <th>Nombre de post</th>
                                                                <th>Profile demandé</th>
                                                                <th>Fichier</th>
                                                                <th>Date de concour</th>
                                                                <th>Date limite de dépot</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="color:black">
                                                            @foreach ($rhavi as $p)
                                                                <tr>
                                                                    <td>{{ $p->created_at }}
                                                                    </td>
                                                                    <td>{{ $p->Nbposte }}</td>
                                                                    <td id="dynamic-td">{{ $p->titre }}

                                                                    </td>
                                                                    <td>
                                                                        <a
                                                                            href="{{ asset('avisrecrutement/' . $p->file) }}" target="_blank "><i
                                                                                class="fas fa-file-pdf" 
                                                                                style="color: red;font-size: 40px"></i></a>
                                                                    </td>
                                                                    <td>{{ $p->dateconcour }}</td>
                                                                    <td>{{ $p->dateexpiration }}</td>
                                                                    <td>
                                                                        @if ($p->status == 'activer')
                                                                            <i class="fas fa-toggle-on"
                                                                                style="color:green;font-size:30px;"></i>
                                                                        @else
                                                                            <i class="fas fa-toggle-off"
                                                                                style="color:red;font-size:30px;"></i>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <a href="#Edit{{ $p->id }}"
                                                                            class="btn" data-toggle="modal">

                                                                            <i class="fas fa-edit"
                                                                                style="color: green; font-size:30px"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <style>
                                                                #dynamic-td {
                                                                    white-space: nowrap;
                                                                    overflow: hidden;
                                                                    text-overflow: ellipsis;
                                                                    max-width: 70px;
                                                                    /* Adjust max-width as needed */
                                                                }
                                                            </style>
                                                        </tbody>
                                                        @foreach ($rhavi as $p)
                                                            <!-- Modal for desplay image -->
                                                            <div class="modal fade"
                                                                id="imageModal{{ $p->id }}" tabindex="-1"
                                                                role="dialog"
                                                                aria-labelledby="imageModalLabel{{ $p->id }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="imageModalLabel{{ $p->id }}">
                                                                                Image
                                                                                Preview</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                            <img src="{{ asset('avisrecrutement/' . $p->file) }}"
                                                                                class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Existing code ... -->
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>

                                            {{-- Add  --}}
                                            <div class="modal fade" id="add" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
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
                                                        <form method="post" action="{{ route('addavis') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Profile demandé :</label>
                                                                    <input type="text" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="titre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Nombre de post :</label>
                                                                    <input type="number" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="nb">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Date de concour :</label>
                                                                    <input type="date" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="dc">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Date limit de dépot
                                                                        :</label>
                                                                    <input type="date" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="ex">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Concour : <span
                                                                            style="color:red">( le fichier doit être en
                                                                            pdf
                                                                            )</span></label>
                                                                    <input required type="file" name="file"
                                                                        accept=".pdf" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="status" class="col-form-label"
                                                                        style="color:black">Status:</label><br>
                                                                    <input type="checkbox" id="activer"
                                                                        name="status" value="activer"
                                                                        style="color:black"
                                                                        onclick="toggleCheckbox('activer', 'desactiver')">
                                                                    <label for="activer"
                                                                        style="color:black">Activer</label>
                                                                    <input type="checkbox" id="desactiver"
                                                                        name="status" value="desactiver"
                                                                        style="color:black"
                                                                        onclick="toggleCheckbox('desactiver', 'activer')">
                                                                    <label for="desactiver"
                                                                        style="color:black">Desactiver</label>
                                                                </div>

                                                                <script>
                                                                    function toggleCheckbox(checkedId, uncheckedId) {
                                                                        var checkedCheckbox = document.getElementById(checkedId);
                                                                        var uncheckedCheckbox = document.getElementById(uncheckedId);

                                                                        if (checkedCheckbox.checked) {
                                                                            uncheckedCheckbox.checked = false;
                                                                        }
                                                                    }
                                                                </script>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="submit"
                                                                    class="btn btn-primary">Ajouter</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Fermer</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.container-fluid -->

                                        @foreach ($rhavi as $f)
                                            <div class="modal fade" id="Edit{{ $f->id }}" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:black"
                                                                id="exampleModalLabel"><strong>Avis de
                                                                    recrutement</strong>
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post"
                                                            action="{{ route('updateRHavis', $f->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Profile demandé :</label>
                                                                    <input type="text" required
                                                                        class="form-control" id="recipient-name"
                                                                        value="{{ $f->titre }}" name="titre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Nombre de post :</label>
                                                                    <input type="number" required
                                                                        class="form-control" id="recipient-name"
                                                                        value="{{ $f->Nbposte }}" name="nb">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Date de concour :</label>
                                                                    <input type="date" required
                                                                        class="form-control" id="recipient-name"
                                                                        value="{{ $f->dateconcour }}" name="dc">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Date de Expiration
                                                                        :</label>
                                                                    <input type="date" required
                                                                        class="form-control" id="recipient-name"
                                                                        value="{{ $f->dateexpiration }}"
                                                                        name="ex">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Concour : <span
                                                                            style="color:red">( le fichier doit être en
                                                                            pdf
                                                                            )</span></label>
                                                                    <input required type="file" name="file"
                                                                        accept=".pdf" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="status" class="col-form-label"
                                                                        style="color:black">Status:</label><br>
                                                                    <input type="checkbox" id="activer"
                                                                        name="status" value="activer"
                                                                        style="color:black"
                                                                        onclick="toggleCheckbox('activer', 'desactiver')">
                                                                    <label for="activer"
                                                                        style="color:black">Activer</label>
                                                                    <input type="checkbox" id="desactiver"
                                                                        name="status" value="desactiver"
                                                                        style="color:black"
                                                                        onclick="toggleCheckbox('desactiver', 'activer')">
                                                                    <label for="desactiver"
                                                                        style="color:black">Desactiver</label>
                                                                </div>

                                                                <script>
                                                                    function toggleCheckbox(checkedId, uncheckedId) {
                                                                        var checkedCheckbox = document.getElementById(checkedId);
                                                                        var uncheckedCheckbox = document.getElementById(uncheckedId);

                                                                        if (checkedCheckbox.checked) {
                                                                            uncheckedCheckbox.checked = false;
                                                                        }
                                                                    }
                                                                </script>
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

                                    {{-- Resultat de concour --}}
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
                                        <!-- Begin Page Content -->
                                        <div class="container-fluid">
                                            <div class="table" style="margin: 10px">
                                                <tr>
                                                    <th>
                                                        <a href="#adde" class="btn btn-success" style="margin:20px"
                                                            data-toggle="modal">
                                                            <i class="fas fa-plus"></i>
                                                            <strong>Ajouter une Résultats des concours
                                                            </strong>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="table-responsive">
                                                    <table class="table dataTable table-bordered" width="100%"
                                                        cellspacing="0">
                                                        <thead style="color:black">
                                                            <tr style="background-color:orange; color:white">
                                                                <th scope="col">Profile demande</th>
                                                                <th scope="col">Candidats convoques aux écrit
                                                                </th>
                                                                <th scope="col">Candidats convoques aux orale
                                                                </th>
                                                                <th scope="col">Candidats admis</th>
                                                                <td>Date</td>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($rhres as $p)
                                                                <tr style="color:black">
                                                                    <td>{{ $p->titre }}</td>
                                                                    <td>
                                                                        @if (isset($p->ecrit))
                                                                            <a
                                                                                href="{{ asset('ecrit/' . $p->ecrit) }}" target="_blank ">
                                                                                <i class="fas fa-file-pdf"
                                                                                    style="color: red;font-size: 40px"></i>
                                                                            </a>
                                                                        @else
                                                                            <h3>-</h3>
                                                                        @endif

                                                                    </td>
                                                                    <td>
                                                                        @if (isset($p->orale))
                                                                            <a target="_blank"
                                                                                href="{{ asset('orale/' . $p->orale) }}">
                                                                                <i class="fas fa-file-pdf"
                                                                                    style="color: red;font-size: 40px"></i>
                                                                            </a>
                                                                        @else
                                                                            <h3>-</h3>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if (isset($p->result))
                                                                            <a target="_blank"
                                                                                href="{{ asset('admis/' . $p->result) }}">
                                                                                <i class="fas fa-file-pdf"
                                                                                    style="color: red;font-size: 40px"></i>
                                                                            </a>
                                                                        @else
                                                                            <h3>-</h3>
                                                                        @endif
                                                                    </td>
                                                                    <td> {{ Carbon\Carbon::parse($p->created_at)->format('Y-m-d') }}</td>
                                                                    <td class="text-center">
                                                                        <a href="#Edite{{ $p->id }}"
                                                                            target="_blank" class="btn"
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
                                        <!-- /.container-fluid -->
                                        {{-- modal for add the result --}}

                                        <div class="modal fade" id="adde" tabindex="-1" aria-labelledby="add"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" style="color:black"
                                                            id="exampleModalLabel"><strong>Résultats de
                                                                concours</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form method="post" action="{{ route('addresultat') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black">Concour :</label>
                                                                <select class="form-control" name="r_h_avisrecs">
                                                                    @foreach ($rhavi as $r)
                                                                        <option value="{{ $r->id }}">
                                                                            {{ $r->titre }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <br>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="checkbox"
                                                                        id="chk_ecrit"aria-label="Checkbox for following text input">
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <label class="form-check-label" for="chk_ecrit"
                                                                    style="color: black">
                                                                    Candidats convoques aux
                                                                    écrit
                                                                </label>
                                                            </div>
                                                            <br>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="checkbox"
                                                                        id="chk_orale"aria-label="Checkbox for following text input">
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <label class="form-check-label" for="chk_orale"
                                                                    style="color: black">
                                                                    Candidats convoques aux
                                                                    orale
                                                                </label>
                                                            </div>

                                                            <br>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="checkbox"
                                                                        id="chk_admis"aria-label="Checkbox for following text input">
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <label class="form-check-label" for="chk_admis"
                                                                    style="color: black">
                                                                    Candidats admis
                                                                </label>
                                                            </div>

                                                            <hr>
                                                            <!-- File input fields, initially hidden -->
                                                            <div class="form-group" id="file_ecrit"
                                                                style="display: none;">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">Candidats convoques aux
                                                                    écrit</label>
                                                                <input type="file" name="ecrit"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group" id="file_orale"
                                                                style="display: none;">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">Candidats convoques aux
                                                                    orale</label>
                                                                <input type="file" name="orale"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group" id="file_admis"
                                                                style="display: none;">
                                                                <label for="message-text" class="col-form-label"
                                                                    style="color:black">Candidats admis</label>
                                                                <input type="file" name="admis"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Ajouter</button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Fermer</button>
                                                        </div>
                                                    </form>

                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function() {
                                                            // Get references to checkboxes and file input sections
                                                            var chk_ecrit = document.getElementById('chk_ecrit');
                                                            var chk_orale = document.getElementById('chk_orale');
                                                            var chk_admis = document.getElementById('chk_admis');
                                                            var file_ecrit = document.getElementById('file_ecrit');
                                                            var file_orale = document.getElementById('file_orale');
                                                            var file_admis = document.getElementById('file_admis');

                                                            // Function to toggle visibility based on checkbox state
                                                            function toggleVisibility(checkbox, section) {
                                                                if (checkbox.checked) {
                                                                    section.style.display = 'block';
                                                                } else {
                                                                    section.style.display = 'none';
                                                                }
                                                            }

                                                            // Event listeners to toggle visibility when checkboxes are clicked
                                                            chk_ecrit.addEventListener('click', function() {
                                                                toggleVisibility(chk_ecrit, file_ecrit);
                                                            });
                                                            chk_orale.addEventListener('click', function() {
                                                                toggleVisibility(chk_orale, file_orale);
                                                            });
                                                            chk_admis.addEventListener('click', function() {
                                                                toggleVisibility(chk_admis, file_admis);
                                                            });
                                                        });
                                                    </script>


                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal for update the resuult --}}
                                        @foreach ($rhres as $f)
                                            <div class="modal fade" id="Edite{{ $f->id }}" tabindex="-1"
                                                aria-labelledby="add" aria-hidden="true">
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
                                                            action="{{ route('updateresultat', $f->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                {{--  <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Concour :</label>
                                                                    <select class="form-control" name="r_h_avisrecs">
                                                                        <option value="{{ $f->id }}">
                                                                            {{ $f->titre }}</option>
                                                                    </select>
                                                                </div> --}}

                                                                <!-- File input fields, initially hidden -->
                                                                <div class="form-group" id="file_ecrit">
                                                                    @if (isset($f->ecrit))
                                                                        <label for="message-text"
                                                                            class="col-form-label"
                                                                            style="color:black">Candidats convoques aux
                                                                            ecrit</label>
                                                                        <input type="file" name="ecrit"
                                                                            class="form-control">
                                                                    @endif
                                                                </div>
                                                                <div class="form-group" id="file_orale">
                                                                    @if (isset($f->orale))
                                                                        <label for="message-text"
                                                                            class="col-form-label"
                                                                            style="color:black">Candidats convoques aux
                                                                            orale</label>
                                                                        <input type="file" name="orale"
                                                                            class="form-control">
                                                                    @endif
                                                                </div>
                                                                <div class="form-group" id="file_admis">
                                                                    @if (isset($f->result))
                                                                        <label for="message-text"
                                                                            class="col-form-label"
                                                                            style="color:black">Candidats admis</label>
                                                                        <input type="file" name="admis"
                                                                            class="form-control">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Ajouter</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Fermer</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>


                                    {{-- Stage --}}
                                    <div role="tabpanel" style="margin:20px" class="tab-pane fade" id="Section4">
                                        <div class="container-fluid">
                                            <br>
                                            <table class="table dataTable table-bordered">
                                                <thead class="text-center">
                                                    <tr style="background-color:orange; color:white">
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Prenom</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Tele</th>
                                                        <th scope="col">Service</th>
                                                        <th>Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($stage as $s)
                                                        <tr>
                                                            <td>{{ $s->name }}</td>
                                                            <td>{{ $s->prenom }}</td>
                                                            <td>{{ substr($s->email, 0, 5) }}</td>
                                                            <td>{{ $s->tele }}</td>
                                                            <td>{{ $s->service }}</td>
                                                            <td> {{ Carbon\Carbon::parse($p->created_at)->format('Y-m-d') }}</td>
                                                            <td><a href="#show{{ $s->id }}"
                                                                    class="btn btn-primary" data-toggle="modal">
                                                                    <i class="fas fa-info"></i>
                                                                </a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>

                                        </div>





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

    @foreach ($stage as $s)
        <div class="modal fade" id="show{{ $s->id }}" tabindex="-1" aria-labelledby="add"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color:black; font-size:18px;" id="exampleModalLabel">
                            <strong>Information Stage</strong>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <style>
                        th {
                            text-align: start;
                        }
                    </style>
                    <div class="modal-body">
                        <table class="table ">
                            <tbody>
                                <tr>
                                    <th>Nom</th>
                                    <td>{{ $s->nom }}</td>
                                </tr>
                                <tr>
                                    <th>Prénom</th>
                                    <td>{{ $s->prenom }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $s->email }}</td>
                                </tr>
                                <tr>
                                    <th>Téléphone</th>
                                    <td>{{ $s->tele }}</td>
                                </tr>
                                <tr>
                                    <th>Service</th>
                                    <td>{{ $s->service }}</td>
                                </tr>
                                <tr>
                                    <th>CV</th>
                                    <td>
                                        <a href="{{ asset('cv/' . $s->cv) }}" class="btn " target="_blank "><i
                                                class="fas fa-file-pdf" style="color:red;font-size:30px;"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Demande de Stage</th>
                                    <td>
                                        <a href="{{ asset('demandestage/' . $s->Dstage) }}" class="btn "
                                            target="_blank "><i class="fas fa-file-pdf"
                                                style="color:red;font-size:30px;"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Assurance</th>

                                    <td>
                                        <a href="{{ asset('assurance/' . $s->assurance) }}" class="btn "
                                            target="_blank "><i class="fas fa-file-pdf"
                                                style="color:red; font-size:30px;"></i>
                                        </a>
                                    </td>
                                <tr>
                                    <th>CIN</th>
                                    <td>
                                        <a href="{{ asset('cin/' . $s->cin) }}" class="btn " target="_blank "><i
                                                class="fas fa-file-pdf" style="color:red;font-size:30px;"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pass sanitaire</th>
                                    <td>
                                        <a href="{{ asset('passsanitaire/' . substr($s->passsanitaire, 0, 20)) }}"
                                            class="btn" target="_blank "><i class="fas fa-file-pdf"
                                                style="color:red;font-size:30px;"></i></a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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


    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>

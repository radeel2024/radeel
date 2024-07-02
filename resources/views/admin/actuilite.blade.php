<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    {{-- Alert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <style>
        .form-check-inline {
            display: inline-block;
            margin-right: 10px;
            /* Adjust the margin as needed */
        }

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
            color: #fff;
            padding: 25px 20px;
            background: #1481b8;
            border-radius: 0 0 8px 8px;
            box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
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
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar
          accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user-lock" style="color:white"></i>
                </div>
                <div class="sidebar-brand-text mx-3" style="color:white">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt" style="color:white"></i>
                    <span style="color:white">Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo" style="color:white">
                    <i class="fas fa-fw fa-cog"></i>
                    <span style="color:white">Pages</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('pubAcceuil') }}"><strong>Acceuil</strong></a>
                        <a class="collapse-item" href="{{ route('pubAcceuil') }}"><strong>Espace Client</strong></a>
                        <a class="collapse-item" href="{{ route('pubAcceuil') }}"><strong>RH</strong></a>
                        <a class="collapse-item active" href="{{ route('pubAcceuil') }}"><strong>Actuilite</strong></a>
                        {{--  <a class="collapse-item" href="{{ route('chiffrecle') }}">chiffere cles</a>
                        <a class="collapse-item" href="{{ route('chiffrecle') }}">actualité</a>  --}}
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->


            {{--  <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav I tem - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" style="baclground-color:#087fc1">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand   topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto" style="baclground-color:#087fc1">
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>
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
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
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
                                            role="tab" data-toggle="tab"><strong>Actuilite</strong></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
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

                                    <div role="tabpanel" style="margin:20px" class="tab-pane active" id="Section1">
                                        <div class="card">
                                            <div class="table" style="margin: 10px">
                                                <tr>
                                                    <th class="text-white"></th>
                                                    <th style="color: white"></th>
                                                    <th style="color: white">
                                                        <span style="color:white">
                                                           ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
                                                        </span>
                                                    </th>
                                                    <th>
                                                        <a href="#add" class="btn btn-success"
                                                            style="margin:20px" data-toggle="modal"><i
                                                                class="material-icons">&#xE147;</i>
                                                            <strong>Ajouter un nouveau actuilite</strong>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </div>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr style="color:black">
                                                        <th scope="col">Titre</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">IMAGE</th>
                                                        <th scope="col">Action</th>

                                                    </tr>
                                                </thead>
                                                  @foreach ($st as $e)
                                                    <tbody>
                                                        <tr style="color:black">
                                                            <td>{{ $e->titre }}</td>
                                                            <td>
                                                                {{ $e->des }}
                                                            </td>
                                                            <td>
                                                                {{ $e->status }}
                                                            </td>
                                                            <td>
                                                                <img src="{{ asset('actuilite/' . $e->file) }}" width="80"  class="img-thumbnail"
                                                                data-toggle="modal"
                                                                data-target="#imageModal{{ $e->id }}">
                                                            </td>
                                                            <td>
                                                                <a href="#show{{ $e->id }}" class="btn"
                                                                    data-toggle="modal"
                                                                    style="background: gray;color:white">
                                                                    Show
                                                                </a>
                                                                <a href="#Editst{{ $e->id }}" class="btn"
                                                                    data-toggle="modal"
                                                                    style="background: green;color:white">
                                                                    Edit
                                                                </a>
                                                               
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                    <!-- Modal for desplay image -->
                                                        <div class="modal fade" id="imageModal{{ $e->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="imageModalLabel{{ $e->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="imageModalLabel{{ $e->id }}"></h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        <img src="{{ asset('actuilite/' . $e->file) }}"
                                                                            class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- Existing code ... -->
                                                @endforeach 
                                               
                                            </table>
                                        </div>
                                        <p style="color: #087fc1">Lorem ipsum dolor sit amet consectetur, adipisicing
                                            elit. Nulla porro quam veritatis fugit neque consequatur at quas cum
                                            aperiam, magnam consequuntur architecto pariatur, eius ut itaque ipsam ipsum
                                            magni iusto.
                                        </p>
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
                                                    <form method="post" action="{{ route('addactuilite') }}"
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
                                                                <label for="recipient-name" class="col-form-label"
                                                                    style="color:black">Description :</label>
                                                                <input type="text" required class="form-control"
                                                                    id="recipient-name" name="des">
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
                                                                <input  type="file" name="file"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                           
                                                            <button type="submit"
                                                                class="btn btn-primary">Ajouter
                                                            </button>

                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                      


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
                                                            action="{{ route('updateact', $f->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Titre :</label>
                                                                    <input type="text" required
                                                                        class="form-control" id="recipient-name"
                                                                        name="titre" value="{{ $f->titre }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label"
                                                                        style="color:black">Description :</label>
                                                                    <input type="text" required
                                                                        class="form-control" name="des"
                                                                        value="{{ $f->des }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Status :</label>
                                                                    <select required class="form-control"
                                                                        style="color:black" name="status"
                                                                        >
                                                                        <option selected disabled style="color:black">
                                                                            Select</option>
                                                                        <option value="activer">Activer</option>
                                                                        <option value="desactiver">Desactive</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label"
                                                                        style="color:black">Image :</label>
                                                                    <input  type="file" name="file"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Update
                                                                </button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    {{--  --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>


</body>

</html>

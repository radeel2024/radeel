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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
                <a class="nav-link collapsed" href="../#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pages</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
                            <a class="collapse-item" href="{{ route('achat') }}"><strong>Achat et Logistique</strong></a>
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
                    <a class="nav-link" href="../#" data-toggle="collapse" data-target="#collapsethree"
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
                            <a class="nav-link dropdown-toggle" href="../#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->prenom }} {{ auth()->user()->name }} </span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('../profileadmin/' . auth()->user()->file) }}">
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
                                    <a class="nav-link" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
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
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col">
                            <!-- Project Card Example -->
                            <div class="card shadow-lg">
                                <form method="post" action="{{ route('profileupdate', auth()->user()->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="card mb-4" bis_skin_checked="1">
                                            <div class="row" bis_skin_checked="1" style="margin: 20px">
                                                <div class="col-lg-4" bis_skin_checked="1">
                                                    <div class="card mb-4 " bis_skin_checked="1">
                                                        <div class="card-body text-center" bis_skin_checked="1">
                                                            <img id="previewImage"
                                                                src="{{ asset('../profileadmin/' . auth()->user()->file) }}"
                                                                alt="avatar" class="rounded-circle img-fluid"
                                                                style="width: 150px;">
                                                            <h5 class="my-3"> {{ auth()->user()->prenom }} {{ auth()->user()->name }}
                                                               </h5>
                                                            <p class="text-muted mb-1">{{ auth()->user()->post }} </p>
                                                            <br>
                                                            <div class="d-flex justify-content-center mb-2"
                                                                bis_skin_checked="1">
                                                                <input type="file" disabled name="file"
                                                                    onchange="previewFile()" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-8" bis_skin_checked="1">
                                                    <div class="card mb-4" bis_skin_checked="1">
                                                        <div class="card-body" bis_skin_checked="1" style="margin:15px;">
                                                            <div class="row" bis_skin_checked="1">
                                                                <div class="col-sm-3" bis_skin_checked="1">
                                                                    <p class="mb-0" style="margin:20px">Nom</p>
                                                                </div>
                                                                <div class="col-sm-9" bis_skin_checked="1">
                                                                    <input type="text" name="name"
                                                                        class="form-control" disabled
                                                                        value="{{ auth()->user()->name }}"
                                                                        style="margin:20px">
                                                                </div>
                                                            </div>
                                                            <div class="row" bis_skin_checked="1">
                                                                <div class="col-sm-3" bis_skin_checked="1">
                                                                    <p class="mb-0" style="margin:20px">Prenom</p>
                                                                </div>
                                                                <div class="col-sm-9" bis_skin_checked="1">
                                                                    <input type="text" name="prenom"
                                                                        class="form-control" disabled
                                                                        value="{{ auth()->user()->prenom }}"
                                                                        style="margin:20px">
                                                                </div>
                                                            </div>
                                                            <div class="row" bis_skin_checked="1">
                                                                <div class="col-sm-3" bis_skin_checked="1">
                                                                    <p class="mb-0" style="margin:20px">Post</p>
                                                                </div>
                                                                <div class="col-sm-9" bis_skin_checked="1">
                                                                    <input type="text" name="post"
                                                                        class="form-control" disabled
                                                                        value="{{ auth()->user()->post }}"
                                                                        style="margin:20px">
                                                                </div>
                                                            </div>
                                                            <div class="row" bis_skin_checked="1">
                                                                <div class="col-sm-3" bis_skin_checked="1">
                                                                    <p class="mb-0" style="margin:20px">Email</p>
                                                                </div>
                                                                <div class="col-sm-9" bis_skin_checked="1">
                                                                    <input type="text" name="email"
                                                                        class="form-control" disabled
                                                                        value="{{ auth()->user()->email }}"
                                                                        style="margin:20px">
                                                                </div>
                                                            </div>
                                                            <div class="row" bis_skin_checked="1">
                                                                <div class="col-sm-3" bis_skin_checked="1">
                                                                    <p class="mb-0" style="margin:20px">Ancien mot
                                                                        de passe</p>
                                                                </div>
                                                                <div class="col-sm-9" bis_skin_checked="1">
                                                                    <input type="password" name="passwordauncien"
                                                                        class="form-control" disabled
                                                                        style="margin:20px">
                                                                </div>
                                                            </div>
                                                            <div class="row" bis_skin_checked="1">
                                                                <div class="col-sm-3" bis_skin_checked="1">
                                                                    <p class="mb-0" style="margin:20px">Nouveau mot
                                                                        de passe</p>
                                                                </div>
                                                                <div class="col-sm-9" bis_skin_checked="1">
                                                                    <input type="password" disabled name="passwordnew"
                                                                        class="form-control" style="margin:20px">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <hr>
                                                            <div class="d-flex bd-highlight mb-3">
                                                                <div class="mr-auto p-2 bd-highlight">
                                                                    <button class="btn btn-success" type="submit"
                                                                        style="margin: 30px; display: none;">Mise à
                                                                        jour</button>
                                                                </div>
                                                                <div class="p-2 bd-highlight">
                                                                    <button class="btn btn-primary" type="button"
                                                                        onclick="toggleInputs()"
                                                                        style="margin: 30px;">Activer</button>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                function toggleInputs() {
                                                                    // Select the "Mise à jour" button
                                                                    var miseAJourButton = document.querySelector('.btn-success');

                                                                    // Select all input elements within the form
                                                                    var inputs = document.querySelectorAll('form input');

                                                                    // Check if any input is currently disabled
                                                                    var isAnyInputDisabled = Array.from(inputs).some(function(input) {
                                                                        return input.disabled;
                                                                    });

                                                                    // Toggle the 'disabled' attribute for all input elements
                                                                    inputs.forEach(function(input) {
                                                                        input.disabled = !isAnyInputDisabled;
                                                                    });

                                                                    // Toggle the visibility of the "Mise à jour" button
                                                                    miseAJourButton.style.display = isAnyInputDisabled ? 'block' : 'none';

                                                                    // Change the button text based on the current state
                                                                    var buttonText = isAnyInputDisabled ? 'Desactiver' : 'Activer';
                                                                    document.querySelector('.btn-primary').innerText = buttonText;
                                                                }
                                                            </script>
                                                            <script>
                                                                function previewFile() {
                                                                    var preview = document.getElementById('previewImage');
                                                                    var fileInput = document.querySelector('input[type=file]');
                                                                    var file = fileInput.files[0];
                                                                    var reader = new FileReader();

                                                                    reader.onloadend = function() {
                                                                        preview.src = reader.result;
                                                                    }

                                                                    if (file) {
                                                                        reader.readAsDataURL(file);
                                                                    } else {
                                                                        preview.src = "{{ asset('profileadmin/' . auth()->user()->file) }}"; // fallback image
                                                                    }
                                                                }
                                                            </script>

                                                        </div>

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
                <!-- /.container-fluid -->
           </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="../#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
 

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

</body>

</html>

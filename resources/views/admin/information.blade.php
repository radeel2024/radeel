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
                    <span>Communication</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('acceuil')
                            <a class="collapse-item " href="{{ route('Acceuil') }}"><strong> Article</strong></a>
                        @endcan
                        @can('communication')
                            <a class="collapse-item " href="{{ route('communication') }}"><strong>Annonce</strong></a>
                        @endcan
                        @can('commerciale')
                            <a class="collapse-item " href="{{ route('commercial') }}"><strong>Slider</strong></a>
                        @endcan
                        @can('ressources-humaines')
                            <a class="collapse-item " href="{{ route('rh') }}"><strong>Chiffre cles</strong></a>
                        @endcan
                        @can('achat-Logistique')
                            <a class="collapse-item " href="{{ route('achat') }}"><strong>Réclamation </strong></a>
                        @endcan
                        @can('galerie')
                            <a class="collapse-item active" href="{{ route('album') }}"><strong>SMS</strong></a>
                        @endcan

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Commerciale</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('acceuil')
                            <a class="collapse-item" href="{{ route('Acceuil') }}"><strong>Abonnement</strong></a>
                        @endcan
                        @can('communication')
                            <a class="collapse-item " href="{{ route('communication') }}"><strong>Raccoredment</strong></a>
                        @endcan
                        @can('commerciale')
                            <a class="collapse-item " href="{{ route('commercial') }}"><strong>Résiliation</strong></a>
                        @endcan
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
                    aria-expanded="true" aria-controls="collapsefour">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ressource Humaines</span>
                </a>
                <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('acceuil')
                            <a class="collapse-item" href="{{ route('Acceuil') }}"><strong>Appels Offre</strong></a>
                        @endcan
                        @can('communication')
                            <a class="collapse-item " href="{{ route('communication') }}"><strong>Raccoredment</strong></a>
                        @endcan
                        @can('commerciale')
                            <a class="collapse-item " href="{{ route('commercial') }}"><strong>Résiliation</strong></a>
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
                <div id="collapsefoure" class="collapse " aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
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
                    <div id="collapsethree" class="collapse" aria-labelledby="collapsethree"
                        data-parent="#collapsethree">
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
                <div class="container-fluid" style="background: white;">

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
                        <br><br>
                        <div class="table-responsive">
                            <table class="table dataTable table-bordered ">
                                <thead>
                                    <tr style="background-color:orange; color:white">
                                        <th scope="col">N ° dossier</th>
                                        <th scope="col">Téléphone</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sms as $p)
                                        <tr style="color:black">
                                            <td class="dynamic-td">{{ $p->numDossier }}</td>
                                            <td class="dynamic-td">{{ $p->numtele }}</td>
                                            <td class="dynamic-td">{{ $p->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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

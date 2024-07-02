<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8 ">

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
    {{-- summer not --}}

    {{--  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

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
                    <i class="fas fa-pager"></i>
                    <span>Pages</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
                <div id="collapsefoure" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">



                        @can('role')
                            <a class="collapse-item" href="{{ route('statistique') }}"><strong>Admin</strong></a>
                        @endcan

                        @can('communication')
                            <a class="collapse-item active" href="{{ route('statistiqueC') }}"><strong>
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
        <!-- Page Wrapper -->
        <div id="wrapper">


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
                    <!-- Begin Page Content -->
                    <div class="container-fluid">


                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Article</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$articlecount}}</div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Annonce</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$annoncecount}}</div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Reclamation
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$reclamationcount}}</div>

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Sms</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$smscount}}</div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Visitore</h6>

                                    </div>
                                    <!-- Card Body -->
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart2"></canvas>
                                        </div>
                                    </div>
                                    <script>
                                        var visitsByMonth = @json($visitsByMonth);

                                        var monthNames = [
                                            "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                                            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
                                        ];

                                        // Extracting months and visits from visitsByMonth and mapping month numbers to month names
                                        var months = visitsByMonth.map(monthData => monthNames[monthData.month -
                                            1]); // Subtracting 1 to match array indexing
                                        var visits = visitsByMonth.map(monthData => monthData.visits);

                                        // Chart.js code
                                        var ctx = document.getElementById("myAreaChart2").getContext('2d');
                                        var myLineChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: months, // Using month names as labels
                                                datasets: [{
                                                    label: "Number of Visits",
                                                    data: visits, // Using visits data
                                                    lineTension: 0.3,
                                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                                    borderColor: "rgba(78, 115, 223, 1)",
                                                    pointRadius: 3,
                                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                                    pointHoverRadius: 3,
                                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                                    pointHitRadius: 10,
                                                    pointBorderWidth: 2,
                                                }]
                                            },
                                            options: {
                                                maintainAspectRatio: false,
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>

                                </div>
                            </div>

                            <!-- Pie Chart -->

                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Reclamation</h6>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="small font-weight-bold">En cours <span
                                                class="float-right">{{$reclamationencours}}</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$reclamationencours}}%"
                                                aria-valuenow="{{$reclamationencours}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <h4 class="small font-weight-bold">Traiter <span class="float-right">{{$reclamationtraiter}}</span>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: {{$reclamationtraiter}}%" aria-valuenow="{{$reclamationtraiter}}" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Color System -->
                                <div class="row">
                                    <div class="col-lg-6 mb-4" style="background:#F8F9FC">
                                        <div class=" " style="background:#F8F9FC">
                                            <div class="card-body">

                                                <div class="text-white-50 small" style="background:#F8F9FC"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class=" " style="background:#F8F9FC">
                                            <div class="card-body">

                                                <div class="text-white-50 small"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class=" " style="background:#F8F9FC">
                                            <div class="card-body">

                                                <div class="text-white-50 small"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class=" " style="background:#F8F9FC">
                                            <div class="card-body">

                                                <div class="text-white-50 small"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4" style="background:#F8F9FC">
                                        <div class="  ">
                                            <div class="">

                                                <div class="text-white-50 small"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="   ">
                                            <div class="card" style="background:#F8F9FC">

                                                <div class="text-white-50 small"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="   ">
                                            <div class="card-body" style="background:#F8F9FC">

                                                <div class="text-black-50 small"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="   ">
                                            <div class="card-body" style="background:#F8F9FC">

                                                <div class="text-white-50 small"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 mb-4">

                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Articles</h6>
                                    </div>
                                    <div class="card-body">
                                        <table class="table dataTable table-bordred">
                                            <thead>
                                                <tr style="color:black">
                                                    <th scope="col">Article</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($articles as $e)
                                                    <tr >
                                                       {{--  <td>{{ strlen($e->toto) > 70 ? substr($e->toto, 0, 70) . '...' : $e->toto }}</td>

                                                        <td>
                                                            {{ $e->visits }}
                                                        </td> --}}
                                                        <td><a href="{{route('details',"$e->id")}}">{{$e->title}}</a></td>
                                                        {{--  <td>
                                                            <a href="#editeartcile{{ $e->id }}"
                                                                class="btn" data-toggle="modal"
                                                                style="background: green;color:white">
                                                                Edit
                                                            </a>
                                                        </td> 
                                                    </tr> --}}
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ullam soluta, eum illum, dicta ab alias necessitatibus voluptas repellat
                                            dolorem vitae doloremque, laudantium eveniet consectetur dignissimos
                                            numquam. Voluptatem vel dolorem quaerat.cfgffffffghf</p>

                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->

                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

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
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Core plugin JavaScript-->

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    {{--  --}}

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <!-- Your script to initialize Summernote for each textarea -->
    <script>
        $(document).ready(function() {
            // Initialize Summernote for all instances with the class 'summernote-editor'
            $('.summernote-editor').each(function() {
                const articleId = $(this).data('article-id');
                $(this).summernote();
            });
        });
    </script>


</body>

</html>

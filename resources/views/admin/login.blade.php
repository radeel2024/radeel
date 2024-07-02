<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../css/style2.css">

    <title>Login</title>
</head>

<body>


    <div class="d-md-flex half">
        <div class="bg"
            style="background-image: url('https://www.azergo.fr/wp-content/uploads/2016/12/Visuel-article-pc-portable.jpg');">
        </div>
        <div class="contents">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="text-center mb-5">
                                <h3><img style="box-shadow:1px solid black " src="https://www.radeel.ma/images/radeel-logo-1x1.png"
                                        width="150"></h3>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                            </div>
                            @if (session()->has('fail'))
                                <div class="alert alert-danger">
                                    {{ session()->get('fail') }}
                                </div>
                            @endif
                            <form action="{{ route('checkadmin') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="username"> Email</label>
                                    <input type="text" class="form-control" placeholder="your-email@gmail.com"
                                        name="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password"
                                        name="password">
                                </div>


                                <input type="submit" value="Log In" class="btn btn-block "
                                    style="background-color: #82BB41;color:white">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>

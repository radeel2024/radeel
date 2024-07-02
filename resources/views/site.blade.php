
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap javascript link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
          background-color: white;
          color: #2C92C8;
        }

        .brand {
            color: #BBD234;
        }

        .border-hover {
            border-top: 5px solid transparent;
            transform: translateY(-4px);
        }

        .border-hover:hover {
            border-top: 5px solid #ff9138;
            transform: translateY(-4px);
        }

        #sign-in {
            background:#BBD234;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }

        .navbar-toggler {
            border: 3px solid #BBD234;
        }


        .navbar-toggler-icon {
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        #nav-length {
            width: 90%;
            color: #2C92C8;
        }

        @media screen and (max-width : 992px) {
            #nav-length {
                width: 100%;
            }

            .border-hover {
                border-top: 0;
            }

            .border-hover:hover {
                border-top: 0;
            }

            #sign-in {
                border-radius: 50px;
            }
        }

        /* body section */
        .icon-height {
            height: 28px;
            width: 28px;
        }

        .icon-container {
            background: #BBD234;
        }

        .dark-background {
            background: #2b3944;
        }
        #socialWrap {
            border-radius: 0px 24px 24px 0px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="navbar navbar-expand-lg pt-4">
            <div class="container-fluid">
                <a href="#" class="brand text-decoration-none d-block d-lg-none fw-bold fs-1 "></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul id="nav-length" class="navbar-nav justify-content-between border-top border-2 text-center">
                          <li class="nav-item">
                            <a href="#" class="nav-link border-hover py-3">
                              <img src="https://www.radeel.ma/images/radeel-logo-1x1.png" width="70">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link border-hover py-3">Acceuil</a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link border-hover py-3 ">Radeel</a>
                      </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link border-hover py-3 ">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link border-hover py-3 ">Espace RH</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link border-hover py-3 ">Fournisseur</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" id="sign-in" class="nav-link my-2 px-4 text-white">
                                <img class=" me-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Google_Contacts_icon.svg/512px-Google_Contacts_icon.svg.png?20221102143815" width="30">
                              Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main id="body-content">
        <div class="d-flex position-fixed">
            <div class="d-flex flex-column icon-container p-4" id="socialWrap">
                <img class="icon-height my-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/2491px-Logo_of_Twitter.svg.png" alt="twitter">
                <img class="icon-height my-3" src="https://pixlok.com/wp-content/uploads/2021/12/Facebook-Icon-9imsd.png" alt="facebook">
                <img class="icon-height my-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" alt="instagram">
                <img class="icon-height my-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/YouTube_social_white_square_%282017%29.svg/2048px-YouTube_social_white_square_%282017%29.svg.png" alt="youtube">
            </div>
        </div>
        
    </main>
    <!-- bootstrap Script File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include('../Server_form/server12.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile-style.css">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v13/css/util.css">
    <link rel="stylesheet" type="text/css" href="../Login_v13/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <header>

        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg ">
                <i class="fas fa-book-reader fa-3x mx-3"></i>
                <a class="navbar-brand" href="#">Books</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../src/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Price</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <div class="dropdown">
                                <a href="#" class="nav-link">Pages</a>
                                <div class="dropdown-content">
                                    <a href="#">Generic</a>
                                    <a href="#">Element</a>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>




    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('../Login_v13/images/bg-01.jpg');">
            </div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-82 p-b-50">
                <form class="login100-form validate-form"  method="post" action="SignUp.php">
                <?php include('../Server_form/error.php'); ?>
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>

                    <!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Full Name</span>
                        <input class="input100" type="text" name="name" placeholder="Name...">
                        <span class="focus-input100"></span>
                    </div> -->
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" value="<?php echo $email; ?>" placeholder="Email addess...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password_1" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                        <span class="label-input100">Repeat Password</span>
                        <input class="input100" type="password" name="password_2" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    I agree to the
                                    <a href="#" class="txt2 hov1">
                                        Terms of User
                                    </a>
                                </span>
                            </label>
                        </div>


                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn" name="reg_user">
                                Sign Up
                            </button>
                        </div>

                        <a href="../registration/login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Log in
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>








    <!-- footer -->
    <footer>

        <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5 col-md-5">
                    <h1 class="text-light">About Us</h1>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the.
                    </p>
                    <p class="pt-4 text-muted">
                        Lorem Ipsum is simply dummy text of the
                        <span>Panting</span>
                    </p>
                </div>
                <div class="col-md-5">
                    <h4 class="text-light">Newsletter</h4>
                    <p class="text-muted">Stay Update</p>
                    <form class="form-inline">
                        <div class="col pt-">
                            <div class="input-group pr-5">
                                <input type="text" class="form-control bg-dark text-white" placeholder="Email">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-sm-12">

                    <h4 class="text-light">Follow Us</h4>
                    <p class="text-muted">Lets us be social</p>
                    <div class="column">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!--===============================================================================================-->
    <script src="../Login_v13/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../Login_v13/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../Login_v13/vendor/bootstrap/js/popper.js"></script>
    <script src="../Login_v13/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../Login_v13/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../Login_v13/vendor/daterangepicker/moment.min.js"></script>
    <script src="../Login_v13/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../Login_v13/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../Login_v13/js/main.js"></script>

</body>

</html>
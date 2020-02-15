<?php include('../Server_form/server12.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile-style.css">
    <link rel="stylesheet" href="../Login_v1/css/main.css">
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

    <!-- <section class="section-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="newfile">
                        <img src="../assest/login.jpg" alt="newfile">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newfile2 text-left">
                        <h1>Welcome</h1>
                        <div class="newfile3 pt-4">

                            <input type="text" name="user" value="" placeholder="username@gmail.com"><br>

                            <input type="text" name="pass" value="" placeholder="*********"><br>

                            <button class="btn btn-primary" value="submit" name="submit">login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../assest/login3.jpg" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post" action="login.php">
                <?php include('../Server_form/error.php'); ?>
                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="login_user">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="../resetpassword/requestReset.php">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="../registration/SignUp.php">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>



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
    <script src="../Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>






</body>


</html>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:../src/index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile-style.css">
    <!-- <script src="main.js"></script> -->
    
       <!-- animate.css -->
    
    <link rel="stylesheet" href="../wow/animate.css" media="all" type="text/css">
    <script src="../wow/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>

    <!-- end animate.css -->

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
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Dashboard/dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../registration/aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../src/indexnew.php?logout='1'">LogOut</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h6>AUTHOR:DAILY TUITION</h6>
                    <h1>EXCUTING ADVENTURE</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <button class="btn btn-light px-5 py-2">By now for $5.99</button>
                </div>
                <div class="col-md-5 col-sm-12 h-25">
                    <img src="../assest/newheader-img.png" alt="Books">
                </div>
            </div>
        </div>
    </header>
    <!-- main part -->
    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img src="../assest/pecsart-img2.jpg" alt="pray">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="clearfix wow wobble panel text-left">
                            <h1>Mr.Saurabh Singh</h1>
                            <p class="pt-4">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            </p>
                            <p>
                                more-or-less normal distribution of
                                letters, as opposed to using 'Content here, content here', making it look like readable
                                English.
                                more-or-less normal distribution of
                                letters, as opposed to using 'Content here, content here', making it look like readable
                                English.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-2 container-fluid p-0">
            <div class="cover">
                <div class="content text-center">
                    <h1>Some features That Made Us Unique</h1>
                    <p>
                        letters, as opposed to using 'Content here, content here', making it look like readable
                        English
                    </p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect">
                        <h1 class="counter">2345</h1>
                        <p>Happy Client</p>
                    </div>
                    <div class="rect">
                        <h1 class="counter">6784</h1>
                        <p>Cups coffee</p>
                    </div>
                    <div class="rect">
                        <h1 class="counter">1056</h1>
                        <p>Tickets submitted</p>
                    </div>
                    <div class="rect">
                        <h1 class="counter">9152</h1>
                        <p>Total Projects</p>
                    </div>
                </div>
            </div>

            <div class="purchase text-center">
                <h1>purchase whatever You Want</h1>
                <p>
                    letters, as opposed to using 'Content here, content here', making it look like readable
                    <div class="cards">
                        <div class="d-flex flex-row justify-content-center flex-wrap">
                            <!-- first card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">PDF</h5>
                                    </div>
                                    <p class="card-text">
                                        with supporting text below as a natural lead-in.
                                    </p>
                                    <div class="pricing">
                                        <h1>$77.99</h1>
                                        <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Second card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">E-Book</h5>
                                    </div>
                                    <p class="card-text">
                                        with supporting text below as a natural lead-in.
                                    </p>
                                    <div class="pricing">
                                        <h1>$87.99</h1>
                                        <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- third card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">Print copy</h5>
                                    </div>
                                    <p class="card-text">
                                        with supporting text below as a natural lead-in.
                                    </p>
                                    <div class="pricing">
                                        <h1>$50.99</h1>
                                        <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </section>
        <section class="section-3 container-fluid p-0 text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Download Our App For all platforms</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
            <div class="platform row">
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row justify-content-center">
                            <i class="fas fa-desktop fa-3x py-2 pr-3">
                                <div class="text text-left">
                                    <h3 class="pt-1 m-0">Desktop</h3>
                                    <p class="p-0 m-0">On Website</p>
                                </div>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row justify-content-center">
                            <i class="fas fa-mobile-alt fa-3x py-2 pr-3">
                                <div class="text text-left">
                                    <h3 class="pt-1 m-0">Mobil</h3>
                                    <p class="p-0 m-0">On Play store</p>
                                </div>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-4">
            <div class="container text-center">
                <h1 class="text-dark">What our reader's Say About us</h1>
                <p class="text-secondary">Lorem lpsam dolor sit amet.</p>

            </div>
            <div class="team row">
                <div class="col-md-4 sm-12 text-center">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="../assest/UI-face-3.jpg" alt="Member" class="img-fluid border-radius p-4">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Blalock Jalene</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book.
                            </p>
                            <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                            <p class="text-black-50">CEO at WISSEN</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Carosel started -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <!-- card 2-->
                                <div class="card mr-2 d-inline-block shadow-lg">
                                    <div class="card-img-top">
                                        <img src="../assest/UI-face-3.jpg" alt="Member"
                                            class="img-fluid border-radius p-4">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Blalock Jalene</h3>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting
                                            industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of
                                            type and scrambled it to make a type specimen book.
                                        </p>
                                        <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                                        <p class="text-black-50">CEO at WISSEN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <!-- card-3 -->
                                <div class="card mr-2 d-inline-block shadow-lg">
                                    <div class="card-img-top">
                                        <img src="../assest/UI-face-3.jpg" alt="Member"
                                            class="img-fluid border-radius p-4">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Blalock Jalene</h3>
                                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting
                                            industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of
                                            type and scrambled it to make a type specimen book.
                                        </p>
                                        <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                                        <p class="text-black-50">CEO at WISSEN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <!-- card-4 -->
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="../assest/UI-face-3.jpg" alt="Member" class="img-fluid border-radius p-4">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Blalock Jalene</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book.
                            </p>
                            <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                            <p class="text-black-50">CEO at WISSEN</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
    <!-- <div>
        <script type="text/javascript">
            // let navbar = $(".navbar");

            // $(window).scroll(function () {
            //     // console.log(window.innerHeight);
            //     // console.log($(".section-2").offset().top);
            //     let oTop = $('.section-2').offset().top - window.innerHeight;
            //     ($(window).scrollTop() > oTop) {
            //         navbar.addClass("sticky")
            //     } else {
            //         navbar.removeClass("sticky");
            //     }
            // });


            $(window).on("scroll", function () {
                if ($(window).scrollTop()) {
                    $('nav').addClass('black');
                } else {
                    $('nav').removeClass('black');
                }
            })
        </script>
    </div> -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
      <script src="../counter/jquery.counterup.min.js"></script>
    <script src="../counter/jquery.waypoints.min.js"></script>
    <script>
     jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>

</html>
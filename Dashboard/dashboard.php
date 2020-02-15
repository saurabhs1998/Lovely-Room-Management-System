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
    <script src="main.js"></script>
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
                            <a class="nav-link" href="../src/indexnew.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Course</a>
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
                            <a class="nav-link" href="../Dashboard/dashboard.php?logout='1'">LogOut</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header> 

<main>
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
            <div>
            <div class="card text-center">
  <div class="card-header">
  Computer Science Engineering
  </div>
  <div class="card-body">
    <h5 class="card-title">Computer Science Engineering</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
  See all books
  </div>
</div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center" style="margin-top: 5vmin; margin-bottom: 5vmin;">
                   <a href="demoindex.php" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>1</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>2</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>3</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>4</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>5</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>6</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>7</h1>
                        <p>(Block)</p>
                    </div></a>
                   <a href="" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>8</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>9</h1>
                        <p>(Block)</p>
                    </div></a>
                   <a href="" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>10</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>11</h1>
                        <p>(Block)</p>
                    </div></a>
                   <a href="" style="text-decoration: none; color: black;"> <div class="rect">
                        <h1>12</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>13</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>14</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>15</h1>
                        <p>(Block)</p>
                    </div></a>
                    <a href="" style="text-decoration: none; color: black;"><div class="rect">
                        <h1>16</h1>
                        <p>(Block)</p>
                    </div></a>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
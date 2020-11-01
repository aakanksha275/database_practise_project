<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="fa/css/all.css">

  <!-- Google font CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

  <!--Write custom css at last qki last vale ki prioroty jyada hoti h -->
  <link rel="stylesheet" type="text/css" href="css/style.css"> 

  <title>Index</title>
</head>
<body>

  <!--Start Navigation-->

  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-3 fixed-top">
    <a class="navbar-brand" href="#">OSMS</a>
    <span class="navbar-text">Customer's Happiness is our aim</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-menu" aria-controls="my-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="my-menu">
      <ul class="navbar-nav mr-auto pl-3">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Service</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#regitration">Regitration</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!--End Navigation-->

  <!--Start Header-->

  <header class="jumbotron my-banner img-fluid">
    <div>
      <div class="my-banner-div p-2 mb-3">
        <h1>Welcome to OSMS</h1>
        <p class="font-italic">Customer's Happiness is our Aim</p>
      </div>
      <br>
      <a href="login.php" class="btn btn-success mr-4">Login</a>
      <a href="#regitration" class="btn btn-danger mr-4">Sign up</a>

    </div>
  </header>

  <!--End Header-->

  <!--Start Section-->

  <div class="container">
    <div class="jumbotron">
      <h2 class="text-center">OSMS Services</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <!--End Section-->

  <!--Start Service Section-->

  <div class="container text-center border-bottom" id="services">
    <h2>Our Services</h2>
    <div class="row my-5">
      <div class="col-sm-4">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i> </a>
        <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4">
          <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i> </a>
          <h4 class="mt-4">Preventive Maintenance</h4>
          </div>
          <div class="col-sm-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i> </a>
            <h4 class="mt-4">Fault Repair</h4>
            </div>
          </div>
        </div>

        <!--End Service Section-->

        <!--Start Form-->

        <?php
        
        include('user_registration.php');
        
        ?>

        <!--End Form-->

        <!--Start Customer-->

        <div class="jumbotron bg-danger">
          <div class="container">
            <h2 class="text-white text-center font-weight-bold mb-5">Happy Customers</h2>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2  text-center" >
                  <img src="img/customer1.jpg" class="card-img-top offset-md-1 img-fluid" style="border-radius: 100%;width: 200px;">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Some Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>  
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2  text-center" >
                  <img src="img/customer1.jpg" class="card-img-top offset-md-1 img-fluid" style="border-radius: 100%;width: 200px;">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Some Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>  
              </div><div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2  text-center" >
                  <img src="img/customer1.jpg" class="card-img-top offset-md-1 img-fluid" style="border-radius: 100%;width: 200px;">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Some Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>  
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2  text-center" >
                  <img src="img/customer1.jpg" class="card-img-top offset-md-1 img-fluid" style="border-radius: 100%;width: 200px;">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Some Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>

        <!--End Customer-->

        <!--Start Contactus-->
      <?php

      include('contact.php');

      ?>

    
        <!--End Contactus-->

        <!--Start Footer-->

        <div class="container-fluid text-white bg-dark">
           <div class="container">
              <div class="row py-3">
              <div class="col-md-6">
                <span class="pr-3"> Follow Us:</span>
                <a href="#" target="_blank" class="pr-3">
                  <i class="fab fa-facebook-f text-danger"></i>
                </a>
                <a href="#" target="_blank" class="pr-3">
                  <i class="fab fa-twitter text-danger"></i>
                </a>
                <a href="#" target="_blank" class="pr-3">
                  <i class="fab fa-youtube text-danger"></i>
                </a>
                <a href="#" target="_blank" class="pr-3">
                  <i class="fab fa-google-plus text-danger"></i>
                </a>
              </div>
              <div class="col-md-6 text-right">
                <small>Designed by Aakanksha Solanki &copy; 2020</small>
                <small class="ml-2"><a href="admin/adminlogin.php">Admin Login</a></small>
              </div>
            </div>
           </div>
        </div>

        <!--End Footer-->



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </body>
      </html>
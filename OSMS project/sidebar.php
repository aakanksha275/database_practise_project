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
    <title><?php  echo title ?></title>
  </head>
  <body>
   <nav class="navbar navbar-dark bg-danger flex-md-nowrap shadow font-weight-bold fixed-top"><a href="user_profile.php" class="text-white pl-3 navbar-brand">OSMS</a></nav>

<div class="container-fluid mt-5">
	<div class="row">
		<!--Start Side Bar-->
		<nav class="col-sm-2 bg-light sidebar py-5 mt-4 d-print-none">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a href="user_profile.php" class="nav-link <?php if(page=='user_profile'){echo 'active';}  ?>">
						<i class="fas fa-user mr-3"></i>Profile</a>
					</li>
					<li class="nav-item"><a href="submit-req.php" class="nav-link  <?php if(page=='submit-req'){echo 'active';}  ?>">
						<i class="fab fa-accessible-icon mr-3"></i>Submit Request</a>
					</li>
					<li class="nav-item"><a href="check.php" class="nav-link <?php if(page=='check'){echo 'active';}  ?>">
						<i class="fas fa-align-center mr-3"></i>Check Status</a>
					</li>
					<li class="nav-item"><a href="change-pwd.php" class="nav-link <?php if(page=='change-pwd'){echo 'active';}  ?>">
						<i class="fas fa-key mr-3"></i>Change Password</a>
					</li>
					<li class="nav-item"><a href="logout.php" class="nav-link">
						<i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
					</li>
				</ul>
			</div>
		</nav>
		<!--End Side Bar-->

		<!--Start Profile Area-->

		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
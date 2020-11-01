
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="../fa/css/all.css">

  <!-- Google font CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

  <!--Write custom css at last qki last vale ki prioroty jyada hoti h -->
  <link rel="stylesheet" type="text/css" href="../css/style.css"> 

  <title><?php  echo title;  ?></title>
</head>
<body>
	
      <nav class="navbar navbar-dark bg-danger flex-md-nowrap shadow font-weight-bold fixed-top"><a href="user_profile.php" class="text-white pl-3 navbar-brand">OSMS</a></nav>
 <div class="container-fluid mt-5">
  <div class="row">
      <!---side bar--->
     
    <!--Start Side Bar-->
    <nav class="col-sm-2 bg-light sidebar py-5 mt-4">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="dashboard.php" class="nav-link <?php  if(PAGE == 'dashboard.php'){echo'active';}   ?>">
            <i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
          </li>
          <li class="nav-item"><a href="work.php" class="nav-link <?php  if(PAGE == 'work.php'){echo'active';}   ?>">
            <i class="fab fa-accessible-icon mr-3"></i>Work</a>
          </li>
          <li class="nav-item"><a href="request.php" class="nav-link <?php  if(PAGE == 'request.php'){echo'active';}   ?>">
            <i class="fas fa-align-center mr-3"></i>Request</a>
          </li>
          <li class="nav-item"><a href="asset.php" class="nav-link <?php  if(PAGE == 'asset.php'){echo'active';}   ?>">
            <i class="fas fa-key mr-3"></i>Asset</a>
          </li>
          <li class="nav-item"><a href="technician.php" class="nav-link <?php  if(PAGE == 'technician.php'){echo'active';}   ?>">
            <i class="fas fa-key mr-3"></i>Technician</a>
          </li>
          <li class="nav-item"><a href="requester.php" class="nav-link <?php  if(PAGE == 'requester.php'){echo'active';}   ?>">
            <i class="fas fa-users mr-3"></i>Requester</a>
          </li>
          <li class="nav-item"><a href="sellproduct.php" class="nav-link <?php  if(PAGE == 'sellproduct.php'){echo'active';}   ?>">
            <i class="fas fa-table mr-3"></i>Sell Product</a>
          </li>
          <li class="nav-item"><a href="workreport.php" class="nav-link <?php  if(PAGE == 'workreport.php'){echo'active';}   ?>">
            <i class="fas fa-table mr-3"></i>Work Report</a>
          </li>
          <li class="nav-item"><a href="changepwd.php" class="nav-link <?php if(PAGE=='changepwd'){echo 'active';}  ?>">
            <i class="fas fa-key mr-3"></i>Change Password</a>
          </li>
          <li class="nav-item"><a href="../logout.php" class="nav-link">
            <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
          </li>
        </ul>
      </div>
    </nav>

      <!---End side bar--->

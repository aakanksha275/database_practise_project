<?php
    include('../dbconnect.php');
$a_login = false;
session_start();
if(!isset($_SESSION['is_adminlogin'])){
  if($_SERVER['REQUEST_METHOD']=="POST"){

    $a_email = trim($_POST['a_email']);
    $a_password = trim($_POST['a_password']);
    $sql="SELECT * FROM `admin` WHERE a_email='$a_email' AND a_password='$a_password' limit 1";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
      if($num == 1){
  
        $_SESSION['is_adminlogin'] = true;
        $_SESSION['a_email'] = $a_email;
        $a_login=true;
      }
      else{
         echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Failed!</strong> Invalid Credentials.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
      }
    } 
  }
else{
  echo "<script> location.href='dashboard.php'; </script>";
}
?>
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

  <title>Login!</title>
</head>
<body>
<?php

 if($a_login){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in.
          <button id="my-btn" type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="validate()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

?>

<script type="text/javascript">
  function validate(){
   location.href="Dashboard.php";
  }
</script>


  <div class="mt-5 text-center" style="font-size: 30px">
    <i class="fas fa-stethoscope"></i>
    <span>Online Service Management System</span>
    <p style="font-size: 20px;"><i class="fas fa-user-secret text-danger pr-2"></i>Requester Area (Demo)</p>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sm-6 col-md-4 mt-4">
        <form action="#" method="POST" class="shadow-lg p-5">
          <div class="form-group">
            <i class="fas fa-envelope mr-2"></i>
            <label for="a_email" class="font-weight-bold">Email address</label>
            <input type="email" class="form-control" id="a_email" name="a_email" required>
          </div>
          <div class="form-group">     
            <i class="fas fa-key mr-2"></i>
            <label for="a_password" class="font-weight-bold">Password</label>
            <input type="password" class="form-control" id="a_password" name="a_password">
          </div>
          <button type="submit" class="btn btn-outline-danger font-weight-bold btn-block mt-3">Login</button>
        </form>
        <div class="text-center"> <a href="../index.php" class="btn btn-info font-weight-bold mt-4 shadow-sm">Back to Home</a></div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
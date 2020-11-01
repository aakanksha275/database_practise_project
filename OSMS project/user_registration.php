<?php

$login =false;
$msg =false;

if($_SERVER['REQUEST_METHOD']=="POST"){

  include('dbconnect.php');
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
          
    $sql = "SELECT * FROM `customer_login` WHERE `c_email` = '$email' ";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
      if ($num == 1) {
        $msg =true;
      }
      else{
        $sql = "INSERT INTO `customer_login` (`c_name`, `c_email`, `c_password`) VALUES ('$name', '$email', '$password')";
        $result=mysqli_query($con,$sql);
        $login=true;
      }
  }
else{
  echo mysqli_connect_error();
}

?>
<!--Start Form-->
<div class="container py-5" id="regitration">
 <h2 class="text-center">Create an Account</h2>
  <div class="row my-4">
   <div class="col-md-6 offset-md-3">
     <form action="#" method="POST" class="shadow-lg p-4">
       <div class="form-group">
         <i class="fas fa-user"></i>
         <label for="name" class="font-weight-bold pl-2">Name</label>
         <input type="name" class="form-control" id="name" placeholder="Enter your name here" name="name" required>
       </div>
       <div class="form-group">
         <i class="fas fa-envelope"></i>
         <label for="email" class="font-weight-bold pl-2">Email Address</label>
         <input type="email" class="form-control" id="password" name="email" placeholder="Enter your email here" required>
         <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
       </div>
       <div class="form-group">
         <i class="fas fa-key"></i>
         <label for="password" class="font-weight-bold pl-2">Password</label>
         <input type="password" class="form-control" id="password" placeholder="Enter your password here" name="password" required>
       </div>
       <button type="submit" class="btn btn-danger mt-4 btn-block shadow-sm font-weight-bold">Sign Up</button>
       <em style="font-size: 12px;">Lorem ipsum dolor sit amet,
       tempor incididunt ut labore et dolore magna aliqua.</em>
       <?php

      if($login){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
        if($msg){

        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Failed!</strong> Email already Registered.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      ?>
     </form>
    </div>
  </div>
</div>
<!--End Form-->

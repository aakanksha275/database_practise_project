<?php
define('title','change password');
define('page','change-pwd');


include('dbconnect.php');
session_start();
if($_SESSION['is_login']){
	$email=$_SESSION['email'];
}
else{
	echo "<script> location.href='login.php'</script>";
}

if($_SERVER['REQUEST_METHOD']=="POST"){

	$new_password = $_POST['new_password'];
	$con_password = $_POST['con_password'];

	if($new_password == $con_password){

	$sql="UPDATE `customer_login` SET `c_password`= '$new_password' WHERE `c_email` = '$email' ";
	$result = mysqli_query($con ,$sql);
		if($result){
			echo "<script> alert('success') </script>";
		}
		else{
			echo "<script> alert('failed') </script>";
		}
	}

else{
	echo "<script> alert('Passwords do not match') </script>";
}
}	
include('sidebar.php');
?>




		<!--Start Profile Area-->

		<div class="col-sm-6 mt-5">
		
			<form action="#" method="POST" class="mt-5 offset-md-6">
          		<div class="form-group pt-5">
          		  <i class="fas fa-envelope mr-2"></i>
          		  <label for="email" class="font-weight-bold">Email</label>
          		  <input type="email" class="form-control" id="email" name="email" readonly value="<?php  echo $email ?>"> 
          		</div>
          		<div class="form-group">     
          		  <i class="fas fa-key mr-2"></i>
          		  <label for="new_password" class="font-weight-bold">New Password</label>
          		  <input type="password" class="form-control" id="new_password" name="new_password">
          		</div>
          		<div class="form-group">     
          		  <i class="fas fa-key mr-2"></i>
          		  <label for="con_password" class="font-weight-bold">Confirm Password</label>
          		  <input type="password" class="form-control" id="con_password" name="con_password">
          		</div>
          		<button type="submit" class="btn btn-danger btn-block mt-4" name="changepwdbtn">Update</button>
			
			</form>
		</div>

		<!--End Profile Area-->

	</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

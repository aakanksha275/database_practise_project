<?php
  
session_start();
if(isset($_SESSION['is_adminlogin'])){
	   $a_email = $_SESSION['a_email'];
}
else{ echo"<script>location.href = 'adminlogin.php'</script>";}
define('PAGE','changepwd.php');
define('title','Change password');
include('admin-sidebar.php');
include('../dbconnect.php');

if($_SERVER['REQUEST_METHOD']=="POST"){

	$new_password = $_POST['new_password'];
	$con_password = $_POST['con_password'];

	if($new_password == $con_password){

	$sql="UPDATE `admin` SET `a_password`= '$new_password' WHERE `a_email` = '$a_email' ";
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
?>

<div class="col-sm-6 m-5">
		
			<form action="#" method="POST" class="mt-5 offset-md-6">
          		<div class="form-group pt-5">
          		  <i class="fas fa-envelope mr-2"></i>
          		  <label for="email" class="font-weight-bold">Email</label>
          		  <input type="email" class="form-control" id="email" name="email" readonly value="<?php  echo $a_email ?>"> 
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



</div>
</div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
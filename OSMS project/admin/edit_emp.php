<?php
 
session_start();
if(isset($_SESSION['is_adminlogin'])){
	   $a_email = $_SESSION['a_email'];
}
else{
 echo"<script>location.href = 'adminlogin.php'</script>";
}
define('PAGE','technician.php');
define('title','technician');
include('admin-sidebar.php');
include('../dbconnect.php');

if(isset($_REQUEST['edit'])){
$sql = "SELECT * FROM `technician` WHERE `emp_id` = {$_REQUEST['my_id']}";
$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$emp_id = $row['emp_id'];
	$emp_name = $row['emp_name'];
	$emp_email = $row['emp_email'];
	$emp_city = $row['emp_city'];
	$emp_mobile = $row['emp_mobile'];
}
	
	if(isset($_REQUEST['edit_emp'])){
		$emp_id = $_REQUEST['emp_id'];
		$emp_name = $_REQUEST['emp_name'];
	    $emp_email = $_REQUEST['emp_email'];
	    $emp_city = $_REQUEST['emp_city'];
	    $emp_mobile = $_REQUEST['emp_mobile'];
		$sql = "UPDATE `technician` SET `emp_name`= '$emp_name',`emp_city`='$emp_city' ,`emp_mobile`='$emp_mobile' WHERE `emp_id` ='$emp_id'";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "<script>location.href='technician.php'</script>";
		}
		else{
			echo "<script>alert('updated no')</script>";
		}
	}

?>

<div class="m-5 jumbotron col-md-5">
		<h3 class="text-center text-danger font-weight-bold">Edit Technician Here</h3>
		<form action="" method="post">
			<div class="form-group">
	    	<label for="emp_id">ID</label>
	    	<input type="text" class="form-control" id="emp_id" name="emp_id" required value=<?php if(isset($emp_id)){echo $emp_id;}  ?>>
	  	</div>
		<div class="form-group">
	    	<label for="emp_name">Name</label>
	    	<input type="text" class="form-control" id="emp_name" name="emp_name" required value=<?php if(isset($emp_name)){echo $emp_name;}  ?>>
	  	</div>
	  		<div class="form-group">
	    	<label for="emp_email">Email address</label>
	    	<input type="email" class="form-control" id="emp_email" name="emp_email" required readonly value=<?php if(isset($emp_email)){echo $emp_email;}  ?>>
	  	</div>
	  	<div class="form-group">
	    	<label for="emp_city">City</label>
	    	<input type="text" class="form-control" id="emp_city" name="emp_city" required value=<?php if(isset($emp_city)){echo $emp_city;}  ?>>
	  	</div>
	  	<div class="form-group">
	    	<label for="emp_mobile">mobile</label>
	    	<input type="text" class="form-control" id="emp_mobile" name="emp_mobile" required value=<?php if(isset($emp_mobile)){echo $emp_mobile;}  ?>>
	  	</div>
	 	<button type="submit" class="btn btn-danger" name="edit_emp">Edit</button>
	  <button class="btn btn-secondary ml-3" type="submit"><a href="technician.php" class="text-white">Back</a></button>
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
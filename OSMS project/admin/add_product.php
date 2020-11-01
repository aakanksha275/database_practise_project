<?php
 
session_start();
if(isset($_SESSION['is_adminlogin'])){
	   $a_email = $_SESSION['a_email'];
}
else{
 echo"<script>location.href = 'adminlogin.php'</script>";
}
define('PAGE','asset.php');
define('title','addproduct');
include('admin-sidebar.php');
include('../dbconnect.php');
?>

<?php

if (isset($_REQUEST['add_prod'])) {
	$pname = $_REQUEST['pname'];
	$pdop = $_REQUEST['pdop'];
	$pavailable = $_REQUEST['pavailable'];
	$ptotal = $_REQUEST['ptotal'];
	$pocost = $_REQUEST['pocost'];
	$pscost = $_REQUEST['pscost'];

	$sql = "INSERT INTO `product` (`pname`, `pdop`, `pavailable`, `ptotal`, `pocost`, `pscost`) VALUES ('$pname', '$pdop', '$pavailable', '$ptotal', '$pocost', '$pscost')";
	$result = mysqli_query($con,$sql);
	if($result){
		echo "<script>location.href='asset.php'</script>";
	}
	else{
		echo "<script>alert('Product not added')</script>";
	}
}

?>

<div class="m-5 jumbotron col-md-5">
	<h3 class="text-center text-danger font-weight-bold">Add New Product Here</h3>
	<form class="mt-3" action="" method="post">
		<div class="form-group">
	    	<label for="pname">Name of product</label>
	    	<input type="text" class="form-control" id="pname" name="pname" required>
	  	</div>
	  		<div class="form-group">
	    	<label for="pdop">Date of Purchase</label>
	    	<input type="date" class="form-control" id="pdop" name="pdop" required>
	  	</div>
	  	<div class="form-group">
	    	<label for="pavailable">Available</label>
	    	<input type="text" class="form-control" id="pavailable" name="pavailable" required>
	  	</div>
	  	<div class="form-group">
	    	<label for="ptotal">Total</label>
	    	<input type="text" class="form-control" id="ptotal" name="ptotal" required>
	  	</div>
	  	<div class="form-group">
	    	<label for="pocost">Original Cost</label>
	    	<input type="text" class="form-control" id="pocost" name="pocost" required>
	  	</div>
	  	<div class="form-group">
	    	<label for="pscost">Selling Cost</label>
	    	<input type="text" class="form-control" id="pscost" name="pscost" required>
	  	</div>
	  <button type="submit" class="btn btn-danger" name="add_prod">Add</button>
	  <button class="btn btn-secondary" type="submit"><a href="asset.php" class="text-white">Back</a></button>
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
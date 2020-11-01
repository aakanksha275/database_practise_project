<?php
 
session_start();
if(isset($_SESSION['is_adminlogin'])){
	   $a_email = $_SESSION['a_email'];
}
else{
 echo"<script>location.href = 'adminlogin.php'</script>";
}
define('PAGE','asset.php');
define('title','update product');
include('admin-sidebar.php');
include('../dbconnect.php');

if(isset($_REQUEST['edit'])){
$sql = "SELECT * FROM `product` WHERE `pid` = {$_REQUEST['iid']}";
$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$pid = $row['pid'];
	$pname = $row['pname'];
	$pdop = $row['pdop'];
	$pavailable = $row['pavailable'];
	$ptotal = $row['ptotal'];
	$pocost = $row['pocost'];
	$pscost = $row['pscost'];

}
	
	if(isset($_REQUEST['edit_prod'])){
		$pid = $_REQUEST['pid'];
		$pname = $_REQUEST['pname'];
		$pdop = $_REQUEST['pdop'];
		$pavailable = $_REQUEST['pavailable'];
		$ptotal = $_REQUEST['ptotal'];
		$pocost = $_REQUEST['pocost'];
		$pscost = $_REQUEST['pscost'];

		$sql = "UPDATE `product` SET `pname`= '$pname',`pdop`='$pdop' ,`pavailable`='$pavailable',`ptotal`='$ptotal',`pocost`='$pocost',`pscost`='$pscost' WHERE `pid` ='$pid' ";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "<script>location.href='asset.php'</script>";
		}
		else{
			echo "<script>alert('updated no')</script>";
		}
	}


?>

<div class="m-5 jumbotron col-md-5">
	<h3 class="text-center text-danger font-weight-bold">Edit Product Here</h3>
	<form class="mt-3" action="" method="post">
		<div class="form-group">
	    	<label for="pid">Product ID</label>
	    	<input type="text" class="form-control" id="pid" name="pid" readonly required value="<?php if(isset($pid)){echo $pid;}  ?>">
	  	</div>
		<div class="form-group">
	    	<label for="pname">Name of product</label>
	    	<input type="text" class="form-control" id="pname" name="pname" required value="<?php if(isset($pname)){echo $pname;}  ?>">
	  	</div>
	  		<div class="form-group">
	    	<label for="pdop">Date of Purchase</label>
	    	<input type="date" class="form-control" id="pdop" name="pdop" required value="<?php if(isset($pdop)){echo $pdop;}  ?>">
	  	</div>
	  	<div class="form-group">
	    	<label for="pavailable">Available</label>
	    	<input type="text" class="form-control" id="pavailable" name="pavailable" required value="<?php if(isset($pavailable)){echo $pavailable;}  ?>">
	  	</div>
	  	<div class="form-group">
	    	<label for="ptotal">Total</label>
	    	<input type="text" class="form-control" id="ptotal" name="ptotal" required value="<?php if(isset($ptotal)){echo $ptotal;}  ?>">
	  	</div>
	  	<div class="form-group">
	    	<label for="pocost">Original Cost</label>
	    	<input type="text" class="form-control" id="pocost" name="pocost" required value="<?php if(isset($pocost)){echo $pocost;}  ?>">
	  	</div>
	  	<div class="form-group">
	    	<label for="pscost">Selling Cost</label>
	    	<input type="text" class="form-control" id="pscost" name="pscost" required value="<?php if(isset($pscost)){echo $pscost;}  ?>">
	  	</div>
	  <button type="submit" class="btn btn-danger" name="edit_prod">Edit</button>
	  <button class="btn btn-secondary ml-3" type="submit"><a href="asset.php" class="text-white">Back</a></button>
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
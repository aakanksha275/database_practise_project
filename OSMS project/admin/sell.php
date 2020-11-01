<?php
 
session_start();
if(isset($_SESSION['is_adminlogin'])){
	   $a_email = $_SESSION['a_email'];
}
else{ echo"<script>location.href = 'adminlogin.php'</script>";}
define('PAGE','asset.php');
define('title','Product sell page');
include('admin-sidebar.php');
include('../dbconnect.php');
?>

<?php
if(isset($_REQUEST['issue'])){
$sql = "SELECT * FROM `product` WHERE `pid` = {$_REQUEST['iid']}";
$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$pid = $row['pid'];
	$pname = $row['pname'];
	$pscost = $row['pscost'];
	$pavailable = $row['pavailable'];

}
	
	if(isset($_REQUEST['psubmit'])){

		$pid = $_REQUEST['pid'];
		$pavailable = $_REQUEST['pavailable'] - $_REQUEST['pquan'];

		$cust_name = $_REQUEST['cname'];
		$cust_add = $_REQUEST['cadd'];
		$cpname = $_REQUEST['pname'];
		$cpquantity = $_REQUEST['pquan'];
		$cpeach = $_REQUEST['pscost'];
		$cptotal = $_REQUEST['totalp'];
		
		$sql ="INSERT INTO `customer`(`cust_name`, `cust_add`, `cpname`, `cpquantity`, `cpeach`, `cptotal`) VALUES('$cust_name','$cust_add' ,'$cpname','$cpquantity','$cpeach','$cptotal')";
		$result = mysqli_query($con,$sql);
			if($result){
				$genid = mysqli_insert_id($con);
				session_start();
				$_SESSION['myid'] = $genid;
				echo "<script>location.href='billprint.php'</script>";
			}
			else{
				echo mysqli_error($con);
			}

		$sqlup = "UPDATE `product` SET `pavailable`='$pavailable' WHERE `pid` ='$pid' ";
		$resultup = mysqli_query($con,$sqlup);
		if(!$resultup){
			echo mysqli_error($con);
		}
	
	}


?>

<div class="m-5 jumbotron col-md-5">
	<h3 class="text-center text-danger font-weight-bold">Customer Bill</h3>
	<form class="mt-3" action="" method="post">
		<div class="form-group">
	    	<label for="pid">Product ID</label>
	    	<input type="text" class="form-control" id="pid" name="pid" readonly required value="<?php if(isset($pid)){echo $pid;}  ?>">
	  	</div>
	  		<div class="form-group">
	    	<label for="cname">Customer Name</label>
	    	<input type="text" class="form-control" id="cname" name="cname" required>
	  	</div>
	  		<div class="form-group">
	    	<label for="cadd">Customer Address</label>
	    	<input type="text" class="form-control" id="cadd" name="cadd" required >
	  	</div>
		<div class="form-group">
	    	<label for="pname">Name of product</label>
	    	<input type="text" class="form-control" id="pname" name="pname" required readonly value="<?php if(isset($pname)){echo $pname;}  ?>">
	  	</div>
	  	<div class="form-group">
	    	<label for="pavailable">Available</label>
	    	<input type="text" class="form-control" id="pavailable" name="pavailable" readonly required value="<?php if(isset($pavailable)){echo $pavailable;}  ?>">
	  	</div>
		  	<div class="form-group">
	    	<label for="pquan">Quantity</label>
	    	<input type="text" class="form-control" id="pquan" name="pquan" required>
	  	</div>
	  	<div class="form-group">
	    	<label for="pscost">Cost of each product</label>
	    	<input type="text" class="form-control" id="pscost" name="pscost" required value="<?php if(isset($pscost)){echo $pscost;}  ?>">
	  	</div>
	  	  	<div class="form-group">
	    	<label for="totalp">Total Cost</label>
	    	<input type="text" class="form-control" id="totalp" name="totalp" required>
	  	</div>
  		<div class="form-group">
	    	<label for="sdate">Date</label>
	    	<input type="date" class="form-control" id="sdate" name="sdate">
	  	</div>

	  <button type="submit" class="btn btn-danger" name="psubmit" id="psubmit">Submit</button>
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
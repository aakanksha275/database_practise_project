<?php

define('PAGE','request.php');
define('title','Request');
include('admin-sidebar.php');
include('../dbconnect.php');
?>

<div class="col-sm-4">
	<?php

	$sql="SELECT `r_id`, `r_info`, `r_desription` , `r_date` FROM `submit_request`";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
	if($num > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo '<div class="card m-5">
			<div class="card-header bg-danger text-white">
			Request ID &nbsp;- &nbsp;'. $row['r_id'].'
			</div>
			<div class="card-body">
			<div class="card-title"><h6><b>Request Info '.$row['r_info'].'</b></h6></div>
			<p class="m-0">'.$row['r_desription'].'</p>
			<p class="pt-1">Request Date : '.$row['r_date'].'</p>
			<div class="float-right">
				<form method="POST">
					<input type="hidden" name="my_id" value='.$row["r_id"].'>
					<input type="submit" class="btn btn-danger text-white" value="View" name="view">
					<input type="submit" class="btn btn-secondary ml-3 text-white" value="Close" name="close">
				</form>
			</div>
			</div>
			</div>';
		}
	}
	else{
		echo "failed";
	}
	?>
</div>
<div class="mt-5">
<?php
	if(isset($_REQUEST['view'])){
	 $sql = "SELECT * FROM `submit_request` WHERE `r_id` = {$_REQUEST['my_id']}";
     $result = mysqli_query($con,$sql);
    	while ($row = mysqli_fetch_assoc($result)){
	$id = $row['r_id'];
	$info = $row['r_info'];
	$desc = $row['r_desription'];
	$name = $row['name'];
	$add = $row['r_address'];
	$city = $row['r_city'];
	$state= $row['r_state'];
	$zip = $row['r_zip'];
	$email = $row['r_email'];
	$mobile = $row['r_mobile'];
    	}
	}
	if(isset($_REQUEST['close'])){
	$sql = "DELETE FROM `submit_request` WHERE `r_id` = {$_REQUEST['my_id']}";
    $result = mysqli_query($con,$sql);
    	if($result){
    	 echo "<script>alert('deleted success')</script>";
    	}
    	else{
    	 echo "<script>alert('not deleted')</script>";
    	}
	}
	?>

<?php
	if(isset($_REQUEST['submit_request'])){
		if(($_REQUEST['request_id'] == "")){
			echo "<script>alert('all fields are required')</script>";
		}
		else{
			$rid = $_REQUEST['request_id'];
			$rinfo = $_REQUEST['request_info'];
			$rdes = $_REQUEST['description'];
			$rname = $_REQUEST['name'];
			$radd = $_REQUEST['address'];
			$rcity = $_REQUEST['inputcity'];
			$rstate = $_REQUEST['inputstate'];
			$rzip = $_REQUEST['inputzip'];
			$remail = $_REQUEST['email'];
			$rmobile = $_REQUEST['mobile'];
			$rassign = $_REQUEST['assigntech'];

			$sql = "INSERT INTO `assign_work` (`r_id`, `r_info`, `r_desription`, `name`, `r_address`, `r_city`, `r_state`, `r_zip`, `r_email`, `r_mobile`, `r_assign`) VALUES ('$rid', '$rinfo', '$rdes', '$rname', '$radd', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rassign')";
			   $result=mysqli_query($con,$sql);
				if($result){
					echo "<script>alert('Work Assign Successfully')</script>";
				}
				else{
					  echo "<br>did not inserted".mysqli_error($con);

				}
		}
	}
?>

</div>
<div class="col-sm-6 mt-5">
	<div class="jumbotron pb-5 p-4">
	<form action="#" method="POST">
		<h3 class="text-center">Assign Work Order Request</h3>
		<div class="form-group">
			<label for="request_id">Request Info</label>
			<input type="text" class="form-control" id="request_id" name="request_id" placeholder="Request ID" readonly value="<?php
			if(isset($id)){	echo $id; } ?>">
		</div>
		<div class="form-group">
			<label for="request_info">Request Info</label>
			<input type="text" class="form-control" id="request_info" name="request_info" placeholder="Request Info" value="<?php
				if(isset($info)){echo $info ;} ?>">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php
				if(isset($desc)){echo $desc; } ?>">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php
				if(isset($name)){ echo $name; } ?>">
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor" name="address" value="<?php
				if(isset($add)){ echo $add; } ?>">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputcity">City</label>
				<input type="text" class="form-control" id="inputcity" name="inputcity" placeholder="City" value="<?php
				if(isset($city)){ echo $city; } ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="inputstate">State</label>
				<input type="text" class="form-control" id="inputstate" name="inputstate" placeholder="State" value="<?php
				if(isset($state)){ echo $state; } ?>">
			</div>
			<div class="form-group col-md-2">
				<label for="inputzip">Zip</label>
				<input type="text" class="form-control" id="inputzip" name="inputzip" placeholder="inputzip" value="<?php
				if(isset($zip)){ echo $zip; } ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" readonly value="<?php
				if(isset($email)){ echo $email; }?>">
			</div>
			<div class="form-group col-md-4">
				<label for="mobile">Mobile Number</label>
				<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php
				if(isset($mobile)){ echo $mobile; } ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="assigntech">Assign to Technician</label>
				<input type="text" class="form-control" id="assigntech" name="assigntech" placeholder="Technician">
			</div>
			<div class="form-group col-md-6">
				<label for="date">Date</label>
				<input type="date" class="form-control" id="date" name="date" placeholder="Date">
			</div>
		</div>
		<div class="float-right">
			<button type="submit" class="btn btn-success" name="submit_request">Assign</button>
			<button type="reset" class="btn btn-secondary ml-3">Reset</button>
		</div>

	</form>
</div>
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
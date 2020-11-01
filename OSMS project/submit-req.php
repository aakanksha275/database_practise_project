
<?php
	define('title','Submit Request');
	define('page','submit-req');
	include('dbconnect.php');
	session_start();
	if($_SESSION['is_login']){
	$email = $_SESSION['email'];

}
else{
	echo "<script> location.href='login.php'</script>";
}

if($_SERVER['REQUEST_METHOD']=="POST"){
	$r_info = $_POST["request_info"];
	$r_desc = $_POST["description"];
	$r_name = $_POST["name"];
	$r_address = $_POST["address"];
	$r_city = $_POST["inputcity"];
	$r_state = $_POST["inputstate"];
	$r_zip = $_POST["inputzip"];
	$r_mobile = $_POST["mobile"];

	$sql = "INSERT INTO `submit_request` (`r_info`, `r_desription`, `name`, `r_address`, `r_city`, `r_state`, `r_zip`, `r_email`, `r_mobile`) VALUES ('$r_info', '$r_desc', '$r_name', '$r_address', '$r_city', '$r_state', '$r_zip', '$email', '$r_mobile')";
	$result = mysqli_query($con , $sql);
	if($result){
		$gen_id = mysqli_insert_id($con);
		echo "<script> location.href='request_success.php' </script>";
		$_SESSION['my_id']=$gen_id;
		}
	else{
		echo "<script> alert('failed')</script>";
	}


}






include('sidebar.php');
?>




		<!--Start Submit Request-->

		<div class="col-sm-10 px-5 mt-5">

			<form action="#" method="POST" class="mt-5">
  				<div class="form-group">
  				  <label for="request_info">Request Info</label>
  				  <input type="text" class="form-control" id="request_info" name="request_info" placeholder="Request Info">
  				</div>
  				<div class="form-group">
  				  <label for="description">Description</label>
  				  <input type="text" class="form-control" id="description" name="description" placeholder="Description">
  				</div>
  				<div class="form-group">
  				  <label for="name">Name</label>
  				  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
  				</div>
  				<div class="form-group">
    				<label for="address">Address</label>
    				<input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor" name="address">
  				</div>
  				<div class="form-row">
    				<div class="form-group col-md-6">
				      <label for="inputcity">City</label>
				      <input type="text" class="form-control" id="inputcity" name="inputcity" placeholder="City">
				    </div>
				    <div class="form-group col-md-4">
				     <label for="inputstate">State</label>
				      <input type="text" class="form-control" id="inputstate" name="inputstate" placeholder="State">
				     </div>
				    <div class="form-group col-md-2">
				      <label for="inputzip">Zip</label>
				      <input type="text" class="form-control" id="inputzip" name="inputzip" placeholder="inputzip">
				    </div>
				 </div>
				 <div class="form-row">
    				<div class="form-group col-md-6">
				      <label for="email">Email</label>
				      <input type="email" class="form-control" id="email" name="email" readonly value="<?php echo $email ?>">
				    </div>
				    <div class="form-group col-md-4">
				     <label for="mobile">Mobile Number</label>
				      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile">
				     </div>
				    <div class="form-group col-md-2">
				      <label for="date">Date</label>
				      <input type="date" class="form-control" id="date" name="date" placeholder="date">
				    </div>
				  </div>
  				<button type="submit" class="btn btn-danger" name="submit_request" onclick="isInputNumber()">Submit</button>
  				<button type="reset" class="btn btn-secondary">Reset</button>
			</form>

		</div>

		<!--start of function to check only number for mobile input-->

		<script>
			function isInputNumber(){
				var text = document.getElementById("mobile").value;
				var reg = /^[6-9]\d{9}$/;
				if(reg.test(text)){
					exit;
				}
				else{
					alert("Wrong");
				}
			};
		</script>

		<!--end of function to check only number for mobile input-->

		<!--End Submit Request-->

	</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

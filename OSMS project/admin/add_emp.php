<?php

define('PAGE','technician.php');
define('title','technician');
include('admin-sidebar.php');
include('../dbconnect.php');
?>
<div class="m-5 col-md-5 jumbotron">
	<h3 class=" text-center">Add Technician</h3>


<?php
	
	if(isset($_REQUEST['add_emp'])){
		$name = $_REQUEST['name'];
		$email =  $_REQUEST['email'];
		$city =  $_REQUEST['city'];
		$mobile =  $_REQUEST['mobile'];
		$sql = "INSERT INTO `technician`(`emp_name`, `emp_email`, `emp_city`, `emp_mobile`) VALUES ('$name','$email','$city','$mobile')";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "<script>location.href='technician.php';</script>";
		}
		else{
			echo mysqli_error($con);
		}
	}

?>


<form>
	<div class="form-group">
    	<label for="name">Name</label>
    	<input type="text" class="form-control" id="name" name="name" required>
  	</div>
  		<div class="form-group">
    	<label for="email">Email address</label>
    	<input type="email" class="form-control" id="email" name="email" required>
  	</div>
  	<div class="form-group">
    	<label for="city">City</label>
    	<input type="text" class="form-control" id="city" name="city" required>
  	</div>
  	<div class="form-group">
    	<label for="mobile">mobile</label>
    	<input type="text" class="form-control" id="mobile" name="mobile" required>
  	</div>
  <button type="submit" class="btn btn-danger" name="add_emp">Add</button>
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
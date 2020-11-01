<?php
define('title','profile');
define('page','user_profile');
include('dbconnect.php');
session_start();
//To show name and email of user who has loged in
if($_SESSION['is_login']){
	$email = $_SESSION['email'];
}
else{
	echo "<script> location.href='login.php'</script>";
}
$sql="SELECT `c_email`, `c_name` FROM `customer_login` WHERE `c_email` = '$email'";
$result = mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
if($num == 1){
	$row = mysqli_fetch_assoc($result);
	$name = $row['c_name'];
}

//for updation of name
$blnkname = false;
$update = false;
if (isset($_REQUEST['nameupdate'])) {
	if($_REQUEST['name'] == ""){
		$blnkname = true;
	}
	else{
		$name = $_REQUEST['name'];
		$sql= "UPDATE `customer_login` SET `c_name`= '$name' WHERE `c_email` = '$email'";
		$result = mysqli_query($con , $sql);
		if($result){
			$update = true;
		}
		else{
			echo '<div class="mt-5 pt-5">error</div>'.mysqli_error($con);
		}
	}
}


include('sidebar.php');
?>




		<!--Start Profile Area-->

		<div class="col-sm-6">
			<form action="#" method="POST" class="mt-5 offset-md-6">
          		<div class="form-group pt-5">
          		  <i class="fas fa-envelope mr-2"></i>
          		  <label for="email" class="font-weight-bold">Email address</label>
          		  <input type="email" class="form-control" id="email" name="email" required readonly value="<?php echo $email ?>"> 
          		  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          		</div>
          		<div class="form-group">     
          		  <i class="fas fa-key mr-2"></i>
          		  <label for="name" class="font-weight-bold">Name</label>
          		  <input type="name" class="form-control" id="name" name="name"  value="<?php echo $name ?>">
          		</div>
          		<button type="submit" class="btn btn-danger btn-block mt-4" name="nameupdate">Update</button>
          		<?php
          		if($blnkname){
          			echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
          					<strong>Name cannot be blank!</strong>
          					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
          					</button>
        				</div>';
          			}
          			if($update){
          			echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
          					<strong>Name Updated successfully!</strong>
          					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
          					</button>
        				</div>';
          			}
          		?>
        </form>
			
		</div>

		<!--End Profile Area-->

	</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

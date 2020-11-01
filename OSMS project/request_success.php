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
include 'sidebar.php';

?>
<div class="col-sm-10 mt-5">
	<?php
	$sql= "SELECT * FROM submit_request WHERE `r_id` = {$_SESSION['my_id']}";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
	if($num == 1){
	$row = mysqli_fetch_assoc($result);

		echo '<div class="col-sm-10 px-5 mt-5">
			<table class="table">
			  <tbody>
			    <tr>
			      <th>Request ID</th>
			      <td>'.$row['r_id'].'</td>
			    </tr>
			     <tr>
			      <th>Name</th>
			      <td>'.$row['name'].'</td>
			    </tr>
			    <tr>
			      <th>Email ID</th>
			      <td>'.$row['r_email'].'</td>
			    </tr>
			    <tr>
			      <th>Description</th>
			      <td>'.$row['r_desription'].'</td>
			    </tr>
			    <tr>
			      <td><form class="d-print-none"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form></td>
			    </tr>
			  </tbody>
			</table>';
	}
	else{
		echo "<script>alert('failed')</script>";
	}


?>


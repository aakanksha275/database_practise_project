<?php
define('title','check');
define('page','check');

include('sidebar.php');
include('dbconnect.php');
	session_start();
	if($_SESSION['is_login']){
	$email = $_SESSION['email'];

}
else{
	echo "<script> location.href='login.php'</script>";
}
?>




<!--Start Profile Area-->

<div class="container mt-5">

	<form action="#" method="POST" class="p-2 d-print-none">
		<div class="form-group form-inline">
			<i class="fas fa-envelope mr-2"></i>
			<label for="rid" class="font-weight-bold">Request ID</label>
			<input type="text" class="form-control ml-2" id="rid" name="rid">
		
		<button type="submit" class="btn btn-danger font-weight-bold ml-4" name="search_btn">Search</button></div>
	</form>



<?php

if(isset($_REQUEST['search_btn'])){
	$check_id = $_REQUEST['rid'];
	 $sql1 = "SELECT * FROM `assign_work` WHERE `r_id` = $check_id";
	 $result1 = mysqli_query($con,$sql1);
	 $row = mysqli_fetch_assoc($result1);
		if(($row['r_id']) == $check_id){
			$sql = "SELECT * FROM `assign_work` WHERE `r_id` = $check_id";
     		$result = mysqli_query($con,$sql);
    			while ($row = mysqli_fetch_assoc($result)){
				$id = $check_id;
				$rinfo = $row['r_info'];
				$rdes = $row['r_desription'];
				$rname = $row['name'];
				$rassign = $row['r_assign'];
			

?>
<h3 class="mt-5 text-center">Assigned Work Detail</h3>
<table class="table mt-5">
  <tbody>
    <tr>
        <th scope="row">Request ID</th>
        <td><?php if(isset($id)){echo $id; }?></td>
    </tr>
     <tr>
        <th scope="row">Request Information</th>
        <td><?php if(isset($rinfo)){echo $rinfo; }?></td>
    </tr>
     <tr>
        <th scope="row">Request Description</th>
        <td><?php if(isset($rdes)){echo $rdes; } ?></td>
    </tr>
     <tr>
        <th scope="row">Request Name</th>
        <td><?php if(isset($rname)){echo $rname; } ?></td>
    </tr>
     <tr>
		<th scope="row">Technician Assigned</th>
        <td><?php if(isset($rassign)){echo $rassign; } ?></td>
    </tr>
</tbody>
</table>
	<form action="" method="post" class="d-print-none">
		<input type="submit" name="print" class="btn btn-danger" value="Print" onclick="window.print()">
		<input type="submit" name="close" class="btn btn-secondary ml-3" value="Close">
	</form>

<?php
}
}
else{
	echo "<div class='alert alert-warning'>Technician does not Assigned</div>";
	}
}
?>
</div>
<!--End Profile Area-->
</div>

</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

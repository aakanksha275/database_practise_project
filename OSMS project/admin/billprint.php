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
$sql = "SELECT * FROM `customer` WHERE `cust_id` = {$_SESSION['myid']}";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
	$row = mysqli_fetch_assoc($result);
	echo'<div class="m-5">
	<h3 class="text-center">Customer Bill</h3>
	<table class="table">
		<tbody>
			<tr>
				<th>Customer ID</th>
				<th>'.$row['cust_id'].'</th>
			</tr>
			<tr>
				<th>Customer Name</th>
				<th>'.$row['cust_name'].'</th>
			</tr>
			<tr>
				<th>Customer Address</th>
				<th>'.$row['cust_add'].'</th>
			</tr>
			<tr>
				<th>Customer Product Name</th>
				<th>'.$row['cpname'].'</th>
			</tr>
			<tr>
				<th>Quantity</th>
				<th>'.$row['cpquantity'].'</th>
			</tr>
			<tr>
				<th>Cost Of each product</th>
				<th>'.$row['cpeach'].'</th>
			</tr>
			<tr>
				<th>Total Cost</th>
				<th>'.$row['cptotal'].'</th>
			</tr>
			<tr>
				<th>Date</th>
				<th>'.$row['cpdate'].'</th>
			</tr>
			<tr>
				<td>
					<form class="d-print-none" method="POST" action= "">
						<input type="submit" class="btn btn-danger ml-3" name="print" value="print" onClick="window.print()">
				  	</form>
				</td>
				<td>
					<a href="asset.php" class="btn btn-secondary d-print-none">Close</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>';
}
else{
	echo mysqli_error($con);
}
?>


</div>
</div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
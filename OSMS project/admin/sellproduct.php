<?php
 
session_start();
if(isset($_SESSION['is_adminlogin'])){
	   $a_email = $_SESSION['a_email'];
}
 
define('PAGE','sellproduct.php');
define('title','Sell Product');
include('admin-sidebar.php');
include('../dbconnect.php');
?>

<div class="m-5 col-md-9 text-center">
	<form action="" method="post">
		<div class="form-row">
			<div class="form-group col-md-2">
           		<input type="date" class="form-control" id="sdate" name="sdate">
       		</div>
          <span> to </span>
			<div class="form-group col-md-2">
            	<input type="date" class="form-control" id="edate" name="edate">
        	</div>
			<div class="form-group col-md-2">
        		<input type="submit" name="search" value="Search" class="btn btn-secondary">
        	</div>
		</div>
	</form>


			
<?php

if(isset($_REQUEST['search'])){
	$sdate = $_REQUEST['sdate'];
	$edate = $_REQUEST['edate'];

	$sql = "SELECT * FROM customer WHERE `cpdate` BETWEEN '$sdate' AND '$edate'";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
	if($num > 0)	{
		echo '<p class="bg-dark mt-4 p-2 text-white"> Details </p> 
		<table class="table">
				<thead>
					<tr>
						<th scope="col">Customer ID</th>
						<th scope="col">Customer Name</th>
						<th scope="col">Customer Address</th>
						<th scope="col">Product Name</th>
						<th scope="col">Quantity</th>
						<th scope="col">Price Each</th>
						<th scope="col">Total</th>
						<th scope="col">Date</th>
					</tr>
				</thead>
				<tbody>';
		while($row = mysqli_fetch_assoc($result) ){
			echo '<tr>
					<td>'.$row['cust_id'].'</td>
					<td>'.$row['cust_name'].'</td>
					<td>'.$row['cust_add'].'</td>
					<td>'.$row['cpname'].'</td>
					<td>'.$row['cpquantity'].'</td>
					<td>'.$row['cpeach'].'</td>
					<td>'.$row['cptotal'].'</td>
					<td>'.$row['cpdate'].'</td>

				</tr>';
		}

	}
	else{
			echo "No record Found";
		}
}

?>
</tbody>
			</table>
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
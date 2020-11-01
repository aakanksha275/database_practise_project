<?php
 
session_start();
if(isset($_SESSION['is_adminlogin'])){
	   $a_email = $_SESSION['a_email'];
}
else{ echo"<script>location.href = 'adminlogin.php'</script>";}
define('PAGE','asset.php');
define('title','asset');
include('admin-sidebar.php');
include('../dbconnect.php');
?>


<div class="m-5 col-md-9 text-center">
	<p class="bg-dark text-white p-2">Products Part Details</p>
<table class="table">
				  	<thead>
				  		<tr>
				  			<th scope="col">Product ID</th>
				  			<th scope="col">Name</th>
				  			<th scope="col">DOP</th>
				  			<th scope="col">Available</th>
				  			<th scope="col">Quantity</th>
				  			<th scope="col">Original price</th>
				  			<th scope="col">Selling price</th>
				  			<th scope="col">Action</th>
				  		</tr>
				  	</thead>
				  	<tbody>


	<?php

	$sql = "SELECT * FROM `product`";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
	if($num > 1){
		while($row = mysqli_fetch_assoc($result))
			echo '
				  	<tr>
				  		<th scope="row">'.$row['pid'].'</th>
				  		<td>'.$row['pname'].'</td>
				  		<td>'.$row['pdop'].'</td>
				  		<td>'.$row['pavailable'].'</td>
				  		<td>'.$row['ptotal'].'</td>
				  		<td>'.$row['pocost'].'</td>
				  		<td>'.$row['pscost'].'</td>
				  		<td>	
				  		    <form action="editprod.php" class="d-inline" method="POST">
								<input type="hidden" name="iid" value='.$row["pid"].'>
								<button type="submit" class="btn btn-info ml-3 text-white" name="edit" value="edit"><i class="fas fa-pen"></i></button>
				  			</form>
				  			<form class="d-inline" method="POST" action= "">
								<input type="hidden" name="iid" value='.$row["pid"].'>
								<button type="submit" class="btn btn-danger ml-3 text-white" name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button>
				  			</form>
				  			<form class="d-inline" method="POST" action= "sell.php">
								<input type="hidden" name="iid" value='.$row["pid"].'>
								<button type="submit" class="btn btn-warning ml-3 text-white" name="issue" value="issue"><i class="fas fa-handshake"></i></button>
				  			</form>
				  		</td>
				  	</tr>';
	}
	else{
		echo "No Product Here";
	}

	?>
<!-- Button trigger modal -->


<!-- Modal -->

	</tbody>
	 </table>

</div>

<?php

if(isset($_REQUEST['delete'])){
	

	$sql = "DELETE FROM `product` WHERE pid = {$_REQUEST['iid']}";
	$result = mysqli_query($con,$sql);
	if($result){
		    echo "<script>alert('Deleted')</script>";
	}
	else{
		    echo "<script>alert('not deleted')</script>";
	}
	
}
?>


</div>

</div>
<div class="float-right mr-5"><a href="add_product.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>


</div>
</div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
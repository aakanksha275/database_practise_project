<?php

define('PAGE','technician.php');
define('title','technician');
include('admin-sidebar.php');
include('../dbconnect.php');
?>

<div class="m-5 col-md-9 text-center">
	<p class="bg-dark text-white p-2">List of Technician</p>
<table class="table">
				  	<thead>
				  		<tr>
				  			<th scope="col">ID</th>
				  			<th scope="col">Name</th>
				  			<th scope="col">Email</th>
				  			<th scope="col">City</th>
				  			<th scope="col">Mobile</th>
				  			<th scope="col">Action</th>
				  		</tr>
				  	</thead>
				  	<tbody>


	<?php

	$sql = "SELECT * FROM `technician`";
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result);
	if($num > 1){
		while($row = mysqli_fetch_assoc($result))
			echo '
				  	<tr>
				  		<th scope="row">'.$row['emp_id'].'</th>
				  		<td>'.$row['emp_name'].'</td>
				  		<td>'.$row['emp_email'].'</td>
				  		<td>'.$row['emp_city'].'</td>
				  		<td>'.$row['emp_mobile'].'</td>
				  		<td>	
				  			<form action="edit_emp.php" class="d-inline" method="POST">
								<input type="hidden" name="my_id" value='.$row["emp_id"].'>
								<button type="submit" class="btn btn-info ml-3 text-white" value="edit" name="edit"><i class="fas fa-pen"></i></button>
				  			</form>
				  			<form action="#" class="d-inline" method="POST">
								<input type="hidden" name="my_id" value='.$row["emp_id"].'>
								<button type="submit" class="btn btn-danger ml-3 text-white" name="delete"><i class="fas fa-trash-alt"></i></button>
				  			</form>
				  		</td>
				  	</tr>';
	}
	else{
		echo "No Technician Here";
	}

	?>
<!-- Button trigger modal -->


<!-- Modal -->

	</tbody>
	 </table>

</div>

<?php

if(isset($_REQUEST['delete'])){
	

	$sql = "DELETE FROM `technician` WHERE `emp_id` = {$_REQUEST['my_id']}";
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
<div class="float-right mr-5"><a href="add_emp.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
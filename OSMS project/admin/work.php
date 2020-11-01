<?php
 
define('PAGE','work.php');
define('title','work');
include('admin-sidebar.php');
include('../dbconnect.php');
?>

<div class="m-5 col-md-9">
<table class="table">
<thead>
<tr>
 	<th scope="col">ID</th>
   <th scope="col">Information</th>
   <th scope="col">Description</th>
   <th scope="col">Name</th>
   <th scope="col">Technician Assign</th>
   <th scope="col">Action</th>
</tr>
  </thead>
  <tbody>
   
	<?php
	
		$sql = "SELECT * FROM `assign_work`";
		$result = mysqli_query($con,$sql);
		$num = mysqli_num_rows($result);
		if($num > 1){
			while($row = mysqli_fetch_assoc($result)){
				echo ' <tr>
							<th scope="row">'.$row['r_id'].'</th>
      						<td>'.$row['r_info'].'</td>
      						<td>'.$row['r_desription'].'</td>
      						<td>'.$row['name'].'</td>
      						<td>'.$row['r_assign'].'</td>
      						<td>
      							<form action="viewassignwork.php" class="d-inline">
      								<input type="hidden" name="id" value='.$row["r_id"].'>
									<button class="btn btn-warning" type="submit" name="view"><i class="far fa-eye"></i></button>
       							</form>
      							<form action="" class="d-inline">
      								<input type="hidden" name="id" value='.$row["r_id"].'>
      								<button class="btn ml-3 btn-danger" type="submit" name="delete"><i class="far fa-trash-alt"></i> </button>
      							</form>
      						</td>
      					</tr>';
			}
		}
		else{
			echo "0 Result";
		}

	if(isset($_REQUEST['delete']))	{
		$sql = "DELETE FROM `assign_work` WHERE `r_id` = {$_REQUEST['id']}";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "<script>alert('Deleted')</script>";
		}
		else{
			echo mysqli_error($con);
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
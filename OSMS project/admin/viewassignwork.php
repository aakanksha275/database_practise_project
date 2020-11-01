<?php
 
define('PAGE','work.php');
define('title','work');
include('admin-sidebar.php');
include('../dbconnect.php');
?>

<div class="m-5 col-md-5">
	<h3>Assign Work Detials</h3>
<table class="table table-bordered mt-5">
  <tbody>
   
   
	<?php
		if(isset($_REQUEST['view'])){
		
			$sql = "SELECT * FROM `assign_work` WHERE `r_id` = {$_REQUEST['id']}";
			$result = mysqli_query($con,$sql);
				$num = mysqli_num_rows($result);
			$row = mysqli_fetch_assoc($result);
			$id = $row['r_id'];
			echo ' <tr><td>ID</td><td>'.$row['r_id'].'</td></tr>
      			   <tr><td>Information</td> <td>'.$row['r_info'].'</td></tr>
      				<tr><td>Description</td><td>'.$row['r_desription'].'</td></tr>
      				<tr><td>Name</td><td>'.$row['name'].'</td></tr>
      				<tr><td>Technician Assign</td><td>'.$row['r_assign'].'</td></tr></tbody>
					</table>
      				<form method="POST" class="d-inline">
						<input type="submit" class="btn btn-danger text-white" value="Print" name="print" onClick=window.print()>
					</form>
					<form method="POST" action="work.php" class="d-inline">
						<input type="submit" class="btn btn-secondary ml-3 text-white" value="Close" name="close">
					</form>
      					';
			}
		else{
				echo "0 result";
			}

	
	?>    
      
  
  
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
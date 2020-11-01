<?php
 
session_start();
if(isset($_SESSION['is_adminlogin'])){
     $a_email = $_SESSION['a_email'];
}
 define('PAGE','dashboard.php');
  define('title','Dashboard');
 include('admin-sidebar.php');
include('../dbconnect.php');
 


?>


        <!---2nd column-->
        <div class="col-sm-9 col-md-10 mt-5 p-5">
          <?php
$sql = "SELECT max(r_id) FROM `submit_request`";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);
$subreq = $row[0];

$sql = "SELECT max(r_no) FROM `assign_work`";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);
$work_ass = $row[0];

$sql = "SELECT max(emp_id) FROM `technician`";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);
$tech = $row[0];

          ?>
          <div class="row">
            <div class="col-sm-4">
              <div class="card  text-center bg-danger text-white mb-3">
                <div class="card-header">Request Received</div>
                <div class="card-body">
                  <h4 class="card-title"><?php  echo $subreq; ?></h4>
                  <a href="request.php" class="btn text-white">View</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card  text-center bg-success text-white mb-3">
                <div class="card-header">Assigned Work</div>
                <div class="card-body">
                  <h4 class="card-title"><?php echo $work_ass;  ?></h4>
                  <a href="viewassignwork.php" class="btn text-white">View</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-info  text-center text-white mb-3">
                <div class="card-header">No. of Technicians</div>
                <div class="card-body">
                  <h4 class="card-title"><?php  echo $tech; ?></h4>
                  <a href="technician.php" class="btn text-white">View</a>
                </div>
              </div>
            </div>
          </div>


          <div class="mx-5 text-center mt-5">
            <p class="text-white bg-dark p-2 text-center">List of Requesters</p>
          </div>
          <table class="table text-center">
                    <thead>
                      <tr>
                        <th scope="col">Requester ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
          <?php

          include('../dbconnect.php');

          $sql = "SELECT * FROM `customer_login`";
          $result = mysqli_query($con,$sql);
          while ($rows = mysqli_fetch_assoc($result)){
            
            echo '<tr>
                        <td>'. $rows['c_login_id'] .'</td>
                        <td>'. $rows['c_name'] .'</td>
                        <td>'. $rows['c_email'] .'</td>
                      </tr>';
                    
          }

          ?>

          </tbody>
          </table>
        </div>
        <!---End 2nd column-->

</div>
</div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('Location:admin.php');
      // echo "<script> window.open('admin.php')</script>";
}
?>

<?php
$conn=mysqli_connect("localhost","root","","hms");
?>



<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1 ">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<title></title>
  <style type="text/css">
    .admin_panel .first{float: left;height: 200px;width: 100%}
    .admin_panel .second{float: left;height: 200px;width: 100%}
  
    .admin_panel .fourth{float: left;height: 200px;}
  </style>
</head>
<body>
      <div class="admin_panel">
      	<div class="background">
      	<div class="container_fluid">
      		<div class="row">
      				<div class="col-md-12 col-12">
      				<h1 class="text-center text-light pt-3">Welcome to Admin Panel</h1>
      			   </div>
      			<div class="col-md-2 col-3 ml-4 ">
      				<div class="menu bg-light">
      					<img src="image.jpg">
      					<a href="patient_details_in_table.php" class="text-info pl-2 pt-0">Patient info</a><br>
      					<a href="doctors_info.php" class="text-info pl-2 pt-0">Add doctor</a><br>
                <a href="clinic_info.php" class="text-info pl-2 pt-0">Add clinic</a><br>
      					<a href="appointmemts_in_table.php" class="text-info pl-2 pt-0">Appointment</a><br>
                <a href="change.php" class="text-info pl-2 ">Change appointment</a><br>
                <a href="appointment_task.php" class="text-info pl-2 ">No of appointments</a><br>
                
                <a href="total_patients_with_amount.php" class="text-info pl-2 ">Total Patients with amount</a><br>
                <p>

      				</div>
                     </div>
              <div class="col-md-8 mt-5 ">
                <div class="first"><img src="image3.jfif"></div>
                <div class="second"><img src="image5.jfif"></div>
              
                <div class="fourth"><img src="image8.jfif"></div>
              </div>

      			
            
      			<div class="logout ml-auto">
              <form method="POST">
      				<button class=" btn btn-light text-info" name="logout">Log-out</button>
      			  </form>
            </div>
      		<!-- 	 <div class="col-md-3">ferger</div>
       <div class="col-md-3"> </div>
       <div class="col-md-3"></div>
       <div class="col-md-3"></div>
       <div class="col-md-3"></div>
       <div class="col-md-3"></div> -->
      		</div>
      	</div>
      </div>
      
  </div>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

                   <?php
                  if (isset($_POST['logout'])) {
                
                    header("Location:homepage.php");  
                  }
                  // session_start();
                
                     // $query="SELECT * from adminlogin where admin_id='".$_SESSION['admin_id']."' ";
                     // $result=mysqli_query($conn,$query);
                     // $row=mysqli_fetch_assoc($result);

                  
?> 
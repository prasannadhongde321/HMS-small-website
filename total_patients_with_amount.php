<?php
$conn=mysqli_connect("localhost","root","","hms");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ">
  <link rel="stylesheet" type="text/css" href="homepage.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">

 /*table tr{padding: 20px;} */
</style>
  <title></title>
</head>
<body>
      <div class="apt_task">
      <div class="container-fluid">
      <div class="jumbotron bg-info">

      <table class="table table-hover">
      <h3 class="text-light text-center">Appointment</h3>
    
      <div><a href="homepage.php" style="text-decoration: none;" class="text-light">Go to home</a></div> 
  <thead>

    <tr>
    
      <th  class="text-center">Patient ID</th>
      <th></th>
      <th  class="text-center">Patient name</th>
      <th></th>
      <th  class="text-center">Gender</th>
      <th></th>
      <th  class="text-center">Mobile no</th>
      <th></th>
      <th  class="text-center">Age</th>
      <!-- <th></th> -->
      <th  class="text-center">Patient group</th>
      <!-- <th></th> -->
      <th  class="text-center">Apt Id</th>
      <!-- <th></th> -->
      <th  class="text-center">Date</th>
      <!-- <th></th> -->
      <th  class="text-center">Time</th>
      <!-- <th></th> -->
      <th  class="text-center">Clinic name</th>
      <!-- <th></th> -->
      <th  class="text-center">Amount</th>
      <!-- <th></th> -->


    </tr>
  </thead>
  <tbody>
    <tr>
     <?php patient_details(); ?>
  
 </tr>

  </tbody>
</table>  
    </div>
  </div>
</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
function patient_details()
{
global $conn;

$query="select pat_name,mobile_no,age,p_group,pat_id,amount,p_date,clinic_name,gender,p_date,p_time,a_id from pat_registration AS pr inner join appointment_data AS ad on pr.pat_id=ad.p_id INNER JOIN clinic_info AS ci ON pr.pat_id=ci.p_id";
$result=mysqli_query($conn,$query); 
while($row=mysqli_fetch_array($result))
{  
  
   $pat_name=$row['pat_name']; 
   $mobile_no=$row['mobile_no']; 
   $age=$row['age'];                                  
   $gender=$row['gender'];
 
   $patient_group=$row['p_group'];
   $pat_id=$row['pat_id'];
   $a_id=$row['a_id'];
   $p_date=$row['p_date'];
   $p_time=$row['p_time'];
   $clinic_name=$row['clinic_name'];
   $amount=$row['amount'];


      echo "
      <tr><td>$pat_id<td>
      <td>$pat_name<td>
      <td>$gender<td>
      <td>$mobile_no<td>
      <td>$age</td>
      <td>$patient_group</td>
      <td>$a_id</td>
      <td>$p_time</td>
      <td>$p_date</td>
      <td>$clinic_name</td>
      <td>$amount<td>
 

      </tr>";


}

}

?>
     
























<!-- select * from pat_registration AS pr inner join appointment_data AS ad on pr.pat_id=ad.p_id -->
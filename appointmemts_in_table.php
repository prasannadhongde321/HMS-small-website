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
  table td{padding: 15px;
}
a{text-decoration: none;color: white}
</style>
  <title></title>
</head>
<body>
      <div class="apt_task mt-5">
      <div class="container">
      <div class="jumbotron bg-info">
      <table class="table-hover" >
        <h3 class="text-light text-center">Patient Info</h3>
      <div><a href="homepage.php" style="text-decoration: none;" class="text-light">Go to home</a></div> 
  <thead>

    <tr>
    
      <th scope="col">APT ID</th>
      <th scope="col">Pat ID</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Status</th>
      <th scope="col">Pat Name</th>
      <th scope="col">Clinic Name</th>
      <th scope="col">Clinic ID</th>
      <th scope="col">Amount</th>

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

$query="SELECT * FROM appointment_data ORDER BY p_name ASC";
$result=mysqli_query($conn,$query); 
while($row=mysqli_fetch_array($result))
{
   $a_id=$row['a_id'];
   $p_id=$row['p_id'];
   $p_date=$row['p_date'];
   $p_time=$row['p_time'];
   $status=$row['status'];
   $p_name=$row['p_name'];
   $clinic_name=$row['clinic_name1'];
   $clinic_id=$row['clinic_id'];
   $amount=$row['amount'];


      echo "
      <tr>
      <td>$a_id</td>
      <td>$p_id</td>
      <td>$p_date</td>
      <td>$p_time</td>
      <td>$status</td>
      <td>$p_name</td>
      <td>$clinic_name</td>
      <td>$clinic_id</td>
      <td>$amount<td>
      <td><a href='delete.php'>Delete</a></td>
      </tr>";


}

}

?>


























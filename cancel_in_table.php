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

  <title></title>
</head>
<body>
      <div class="apt_task mt-5">
      <div class="container">
      <div class="jumbotron bg-info" style="border: 2px solid lightgray;">
      <table class="table table-hover">
        <h3 class="text-light text-center">Doctor Info</h3>
      <div><a href="homepage.php" style="text-decoration: none;" class="text-light">Go to home</a></div> 
  <thead>

    <tr>
    
      <th scope="col">Patient Name</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment time</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <?php get_appointment(); ?>
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
function get_appointment()
{
global $conn;

$query="SELECT p_date,p_time,p_name,clinic_name FROM appointment_data";
$result=mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($result)) {
   $p_name=$row['p_name'];
   $p_date=$row['p_date'];
   $p_time=$row['p_time'];
   $clinic_name=$row['clinic_name'];

      echo "
      <tr>
      <td>$p_name</td>
      <td>$p_date</td>
      <td>$p_time</td>
      <td>$clinic_name</td>
      </tr>";


}

}

?>


























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
      <div class="apt_task">
    <div class="container">
      <div class="jumbotron" style="border: 2px solid lightgray;">
      <table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Full name</th>
      <th scope="col">Appointment date</th>
      <th scope="col">Appointment time</th>
    </tr>
  </thead>
  <tbody>
    <?php get_appointment(); ?>
 

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

$query="SELECT * FROM appointment_data";
$result=mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($result)) {

   $fullname=$row['p_name'];
   $aptdate=$row['p_date'];
   $apttime=$row['p_time'];

   echo "
      <tr>
      <td>$fullname</td>
      <td>$aptdate</td>
      <td>$apttime</td>
    </tr>";


}

}

?>


























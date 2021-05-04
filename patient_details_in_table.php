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
</style>
  <title></title>
</head>
<body>
      <div class="apt_task mt-5">
      <div class="container">
      <div class="jumbotron bg-info">
      <table class="table table-hover" >
        <h3 class="text-light text-center">Patient Info</h3>
      <div><a href="homepage.php" style="text-decoration: none;" class="text-light">Go to home</a></div> 
  <thead>

    <tr>
    
      <th scope="col">ID</th>
      <th scope="col">Patient name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthdate</th>
      <th scope="col">City</th>
      <th scope="col">Mobile no</th>
      <th scope="col">Age</th>
      <th scope="col">Patient group</th>

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

$query="SELECT * FROM pat_registration ORDER BY pat_name ASC";
$result=mysqli_query($conn,$query);
// $row=mysqli_fetch_array($result); 
while($row=mysqli_fetch_array($result))
{
   $pat_id=$row['pat_id'];
   $pat_name=$row['pat_name'];
   $email=$row['email'];
   $gender=$row['gender'];
   $birthdate=$row['birthdate'];
   $city=$row['city'];
   $mobile_no=$row['mobile_no'];
   $age=$row['age'];
   $patient_group=$row['p_group'];


      echo "
      <tr>
      <td>$pat_id</td>
      <td>$pat_name</td>
      <td>$email</td>
      <td>$gender</td>
      <td>$birthdate</td>
      <td>$city</td>
      <td>$mobile_no</td>
      <td>$age</td>
      <td>$patient_group<td>
      </tr>";


}

}

?>


























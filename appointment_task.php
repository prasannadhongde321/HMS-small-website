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
			<div class="jumbotron bg-info" style="border: 2px solid lightgray;">
			<table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Patient name</th>
      <th scope="col">Clinic Name</th>
      <th scope="col">Date</th>

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

$query="SELECT clinic_name1,p_date,COUNT(a_id) as A FROM `appointment_data` GROUP BY clinic_name1,p_date";
$result=mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($result)) {

   $p_date=$row['p_date'];
   $cname=$row['clinic_name1'];
   $Number_of_appointments=$row['A'];

   echo "
      <tr>
      <td>".$p_date."</td>
      <td>".$cname."</td>
      <td>".$Number_of_appointments."</td>
    </tr>";


}

}

?>


























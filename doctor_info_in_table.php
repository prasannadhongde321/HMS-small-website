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

<style tyspe="text/css">
  #search{
    border: 1px solid black;
  }
  #search:focus{
    outline: none!important;
  }
  .main button{
    outline: none;
    border: none;
  }
</style>
  <title></title>
</head>
<body>
      <div class="apt_task mt-5">
      <div class="container bg-info">
      <!-- <div class="jumbotron" style="border: 2px solid lightgray; width: 100%"> -->
      <table class="table table-hover">
        <form method="POST">
        <div class="main">
       <h3 class="text-light text-center">Doctor Info</h3>
        <input type="search" name="search1" id="search" placeholder="enter lname">
        <button class="b tn btn-light pl-3 pr-3" name="search_submit">search</button>
        </div>
    <div><a href="homepage.php" style="text-decoration: none;" class="text-light">Go to home</a>
      <h6 class="text-center text-light">You can book appointment from homepage</h6></div> </form>
  <thead>

    <tr>
    
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Clinic_id</th>
      <th scope="col">Contact</th>

    </tr>
  </thead>
  <tbody>

    <?php get_appointment();?>

  </tbody>
</table>  
    </div>
  </div>
</div>
<div class="container bg-light">
    <table class="table table-hover">
    <?php get_info(); ?>
    </table>
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

$query="SELECT * FROM doctor_info";
$result=mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($result)) {

   $idno=$row['idno'];
   $fname=$row['fname'];
   $lname=$row['lname'];
   $city=$row['city'];
   $state=$row['state'];
   $clinic_id=$row['clinic_id'];
   $contact=$row['contact'];

   echo "
      <tr>
      <td>$idno</td>
      <td>$fname</td>
      <td>$lname</td>
      <td>$city</td>
      <td>$state</td>
      <td>$clinic_id</td>
      <td>$contact </td> 
      </tr>";
}

}

?>
<?php
function get_info()
{
global $conn;
$city=$_POST['search1'];

if (isset($_POST['search_submit'])) {
    $query="SELECT * FROM  doctor_info WHERE city='$city'";
    $result=mysqli_query($conn,$query);
   
    echo "
      <th scope='col'>Id</th>
      <th scope='col'>Firstname</th>
      <th scope='col'>Lastname</th>
      <th scope='col'>City</th>
      <th scope='col'>State</th>
      <th scope='col'>Clinic_id</th>
      <th scope='col'>Contact</th>

    </tr>";


    while ($row=mysqli_fetch_array($result)) {

   $idno=$row['idno'];
   $fname=$row['fname'];
   $lname=$row['lname'];
   $city=$row['city'];
   $state=$row['state'];
   $clinic_id=$row['clinic_id'];
   $contact=$row['contact'];     
   
   echo "<tr>
   <td>$idno</td>
   <td>$fname</td>
   <td>$lname</td>
   <td>$city</td>
   <td>$state</td>
   <td>$clinic_id</td>
   <td>$contact</td>
   </tr>"; 

    }
  
}
}
?>


























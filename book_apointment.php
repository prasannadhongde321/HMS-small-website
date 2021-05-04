<?php
$conn=mysqli_connect("localhost","root","","hms");
session_start();
if(!isset($_SESSION['email']))
{
  header('Location:patient_login.php');
      // echo "<script> window.open('admin.php')</script>";
}

?>



<!DOCTYPE html>
<html>
<head>

     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ">
  <link rel="stylesheet" type="text/css" href="homepage.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>

  <div class="book_ap">
    <div id="login">
        <h3 class="text-center text-white">Book Appointment form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-light">Book Appointment</h3>
                             <div class="form-group">
                                <label for="aptdate" class="text-light">Enter full n ame</label><br>
                                <input type="text" name="fullname" id="username" class="form-control" required="" autocomplete="open">
                            </div>
                             <div class="form-group">
                              <label for="aptdate" class="text-light">Enter clinic name</label><br>
                              <input type="text" name="clinic_name" id="username" class="form-control" required="" autocomplete="open">
                            </div>

                            <div class="form-group">
                                <label for="aptdate" class="text-light">Appointment Date:</label><br>
                                <input type="Date" name="aptdate" id="username" class="form-control" required="" autocomplete="open">
                            </div>
                            <div class="form-group">
                                <label for="apttime" class="text-light">Appointment time</label><br>
                                <input type="time" name="apttime" id="email" class="form-control"  required="" autocomplete="open">
                            </div>
                               <div class="form-group">
                                <label for="amount" class="text-light">Amount</label>
                                <select name="amt" class="form-control">
                                <option>Select amount</option>
                                <option >0</option>
                                <option>40</option>
                                <option>30</option>
                                <option>10</option>
                                <option >100</option>
                                <option >200</option>
                                <option >500</option>
                                <option >1000</option>
                                <option >greater then 1000</option>
                                </select>

                               
                            </div>
                               <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-light btn-md" value="Book">
                            </div>
                              <div id="register-link">
                                <a href="homepage.php" class="text-light text-center">Go to home</a>
                            </div>
                               <div id="register-link">
                                <a href="homepage.php" class="text-light text-center" name="log-out">Log-out</a>
                            </div>
                           
                       
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                    <?php
                                      if (isset($_POST['log-out'])) {
                                        
                                      echo "<script>window.open('adminpanel.php')</script>";  

                                      }

                                if(isset($_POST['submit']))
                                { 
                                  $clinic_name=$_POST['clinic_name'];
                                  $query="SELECT clinic_id FROM `clinic_info` WHERE clinic_name='$clinic_name'";
                                  $result=mysqli_query($conn,$query);
                                  // $row=mysqli_fetch_assoc($result);
                                  while($row=mysqli_fetch_assoc($result))
                                  {
                                 // session_start();

                                      $_SESSION['clinic_id']=$row['clinic_id'];
                                      // $a=$_SESSION['clinic_id'];
                                      // print_r("$a");
                                      // $clinic_id=$_SESSION['clinic_id'];
                                      // print_r("$a");

                                    
                                  
                                }
                              }

                                     if (isset($_POST['submit'])) {
                                      $clinic_id=$_SESSION['clinic_id'];
                                      
                                      $fullname=$_POST['fullname'];
                                      $aptdate=$_POST['aptdate'];
                                      $apttime=$_POST['apttime'];
                                      $clinic_name=$_POST['clinic_name'];
                                      $amt=$_POST['amt'];
                                
                                      $patient_id=$_SESSION['patientid'];
                                      // echo "<script>alert('".$patient_id."')</script>";

                                      // $clinic_id=$_SESSION['clinic_id'];
                                      // $fullname=$_POST['fullname'];
                                      // $aptdate=$_POST['aptdate'];
                                      // $apttime=$_POST['apttime'];
                                      // $clinic_name=$_POST['clinic_name'];
                                      // $amt=$_POST['amount'];

                                      $query="INSERT INTO `appointment_data`(p_id,`p_date`, `p_time`,`status`,`p_name`,clinic_name1,clinic_id,amount) VALUES ('$patient_id','$aptdate','$apttime','pending','$fullname','$clinic_name','$clinic_id','$amt')";

                                       $result=mysqli_query($conn,$query);
                                       

                                        
                                        echo "<script>alert('Appointement registered')</script>";
                                        echo "<script> window.open('transaction_info.php','_self')</script>";


                                       
                               
                                      }
                               
                                       // }



                                      ?>

                                     <!--    
                              
                                    

                                      





















</body>
</html>






















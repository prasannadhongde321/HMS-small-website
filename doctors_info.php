<?php
$conn=mysqli_connect("localhost","root","","hms");
session_start();
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
<div class="doctor_info">
   
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-light mt-5">Add Doctor</h3>
                            <div class="form-group">
                                <label for="username" class="text-light">Enter Doctor's Firstname:</label><br>
                                <input type="text" name="fname" id="username" required="required" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="username" class="text-light">Enter Doctor's Lastname:</label><br>
                                <input type="text" name="lname" id="username" required="required" class="form-control">
                            </div>
                           <div class="form-group">
                                <label for="username" class="text-light">City</label><br>
                                <input type="text" name="city" id="username" required="required" class="form-control">
                            </div>
                               <div class="form-group">
                                <label for="username" class="text-light">State</label><br>
                                <input type="text" name="state" id="username" required="required" class="form-control">
                            </div>
                                  <div class="form-group">
                                <label for="special" class="text-light">Specialization</label><br>
                                <input type="text" name="special" required="required" class="form-control">
                            </div>
                       
                
                           <div class="form-group">
                                <label for="contact" class="text-light">Contact</label><br>
                                <input type="text" name="contact" id="contact" class="form-control" pattern="[0-9]{10}" maxlength="10"required="required">
                            </div>                       
                         
                            <br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-light btn-md" value="Add">
                            </div>
                                  <div id="register-link">
                                <a href="homepage.php" class="text-light">Go to home</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>			 <?php

                    if (isset($_POST['submit'])) {
                      $fname=$_POST['fname'];
                      $lname=$_POST['lname'];
                      $state=$_POST['state'];
                      $contact=$_POST['contact'];
                      $city=$_POST['city'];
                      $special=$_POST['special'];

                      $clinic_id=$_SESSION['clinic_id'];

                         $query="INSERT INTO `doctor_info`(`fname`, `lname`, `city`, `state`,clinic_id, `contact`,`special`) VALUES (' $fname', '$lname', '$city','$state','$clinic_id','$contact','$special')";
                            $result=mysqli_query($conn,$query);
                            echo "<script>alert('successfully added doctor')</script>";
                            echo "<script> window.open('adminpanel.php')</script>";
                    }
                       ?>
               



</body>
</html>













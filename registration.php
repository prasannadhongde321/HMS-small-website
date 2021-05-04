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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
<div class="register">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-light">Patient Registration</h3>
                            <div class="form-group">
                                <label for="username" class="text-light">Enter your name:</label><br>
                                <input type="text" name="username" id="username" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-light">Enter Email</label><br>
                                <input type="text" name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="email should contain @symbol and at least 5 character long" minlength="5" required="required">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Create Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="minimum 6 chars,at least 1 number,
                                at least 1 Capital letter."  required="required">
                                <!-- An element to toggle between password visibility -->
                                <input type="checkbox" onclick="myFunction()" class="mt-2"> <span class="text-light"> Show Password</span>
                            </div>


                            <div class="form-group">
                                <label for="contact" class="text-light">Contact</label><br>
                                <input type="text" name="contact" id="contact" class="form-control" pattern="[0-9]{10}" maxlength="10"   required="required">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-light">Gender</label><br>
                                <input type="radio" name="gender" value="Male" readonly="">Male 
                                <input type="radio" name="gender" value="female"  required="required">Female
                               
                            </div>
                            <div class="form-group">
                                <label for="birthdate" class="text-light">birthdate</label><br>
                                <input type="date" name="date" id="age" class="form-control"  required="required">
                            </div>
                            <div class="form-group">
                                <label for="city" class="text-light">City</label><br>
                                <input type="text" name="city" id="city" class="form-control" required="required">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-light btn-md" value="Register">
                            </div>
                               <div id="register-link">
                                <a href="#" class="text-light">Log-in to your account</a>
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
</div>
                    <script type="text/javascript">
                        function myFunction() {
                      var x = document.getElementById("password");
                      if (x.type === "password") {
                        x.type = "text";
                      } else {
                        x.type = "password";
                      }
                    }
                    </script>


            <?php

                    if (isset($_POST['submit'])) {
                      $username=$_POST['username'];
                      $email=$_POST['email'];
                      $pass=$_POST['password'];
                      $contact=$_POST['contact'];
                      $gender=$_POST['gender'];
                      $date=$_POST['date'];
                      $city=$_POST['city'];

        
                        $date2 =  date("Y/d/m");

                        $diff = abs(strtotime($date2) - strtotime($date));

                        $age = floor($diff / (365*60*60*24));
                        if ($age>"18") {
                            $msg="Adult";
                        }
                        else
                        {
                            $msg="Minor";
                        }

                       $query="SELECT * from pat_registration where email='$email' and pat_name='$username'";
                       $result= mysqli_query($conn,$query);
                       $row=mysqli_fetch_assoc($result);
                       if ($row>0)
                       {
                        echo "<script>alert('already register please login')</script>";
                            echo "<script> window.open('patient_login.php','_self')</script>";
                       }
                       else
                       {
                         // $result1=mysqli_query($conn,$age);
                         $query="INSERT INTO `pat_registration`(`pat_name`, `email`, `password`, `gender`, `birthdate`, `city`, `mobile_no`,age,p_group) VALUES ('$username','$email','$pass','$gender','$date','$city','$contact','$age','$msg')";
                         $result=mysqli_query($conn,$query);
                            echo "<script>alert('successfully registered please login')</script>";
                            echo "<script> window.open('patient_login.php','_self')</script>";

                            // $age=TIMESTAMPDIFF(YEAR,$date,CURDATE()) 
                    }

                                     
                                      

                    }
                       ?>
                       

                   
                     <!-- $query="SELECT p_name,birthdate,CURDATE(),TIMESTAMPDIFF(YEAR,birthdate,CURDATE())  FROM `patient_registration1`"; -->
                  

</body>
</html>













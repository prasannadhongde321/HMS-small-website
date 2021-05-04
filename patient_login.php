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
<div class="patientlogin">
    <div id="login" class="mt-5">
         <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="" method="POST" autocomplete="off">
                            <h3 class="text-center text-light">Patient Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-light">Email:</label><br>
                                <input type="text" name="email" id="username" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="email should contain @symbol and at least 5 character long" minlength="5" required="required" autocomplete="open">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" required="required" autocomplete="off">
                                <input type="checkbox" onclick="myFunction()" class="mt-2"> <span class="text-light"> Show Password</span>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <input type="submit" name="login" class="btn btn-light btn-md" value="Login">
                            </div>
                                  <div class="text-center">
                                <a href="homepage.php" class="text-light ">Go to home</a>
                            </div>
                                <div class="text-center">
                                <a href="registration.php" class="text-light ">Register</a>
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

                	   if (isset($_POST['login'])) {
                    
                      $email=$_POST['email'];
                      $pass=$_POST['password'];
                      

           
                       $query="SELECT * from  pat_registration where email='$email' and password='$pass'";
                       $result= mysqli_query($conn,$query);
                       $row=mysqli_fetch_assoc($result); 	
                       // print_r($row);
                       if($row['pat_id']!=0)
                     
                       {

                       	
                      $_SESSION['email']=$row['email'];
                       	// session_start();

                       	$_SESSION['patientid']=$row['pat_id'];
                       
                       	// echo $_SESSION['patientid'];
                       	// $_SESSION['pat_id']=1;

                        echo "<script>window.open('book_apointment.php','_self')</script>";

                      }
                       else
                       {
                         // $_SESSION['pat_id']=0;
                       	 echo "<script>alert('Invalid user name or password')</script>";
                       	 echo "<script> window.open('patient_login.php','_self')</script>";
                      
                         
                    }
                }

                
                    
                   ?>		

</body>
</html>




















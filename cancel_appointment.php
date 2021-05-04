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

  <div class="cancel_ap">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-light">Cancel Appointment</h3>
                                <div class="form-group">
                                <label for="aptdate" class="text-light"> Enter Full Name</label><br>
                                <input type="text" name="fullname" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="aptdate" class="text-light">Appointment Date:</label><br>
                                <input type="Date" name="aptdate" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="apttime" class="text-light">Appointment time</label><br>
                                <input type="time" name="apttime" id="email" class="form-control"  required="">
                            </div>
                               <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-light btn-md" value="submit">
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


                       <?php

                       if (isset($_POST['submit']))
                        {

                       $fullname=$_POST['fullname'];
                       $aptdate=$_POST['aptdate'];
                       $apttime=$_POST['apttime'];

                       $query="DELETE FROM `appointment_data` WHERE p_name='$fullname' AND p_date='$aptdate'";
                       $result=mysqli_query($conn,$query);
                       if ($result==true) {

                        echo "<script>alert('cancel successfully')</script>";
                                                
                       }
                       else
                       {
                        echo "<script>alert('$username does not exist')</script>";

                       }

                       }


                       ?>











</body>
</html>











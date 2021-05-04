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

  <div class="change_ap mt-5">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-light mt-5">change Appointment</h3>
                               <div class="form-group">
                                <label for="aptdate" class="text-light"> Enter Full Name</label><br>
                                <input type="text" name="fullname" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="aptdate" class="text-light">Appointment Date:</label><br>
                                <input type="Date" name="aptdate" id="username" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="apttime" class="text-light">Appointment time</label><br>
                                <input type="time" name="apttime" id="email" class="form-control"  required="">
                            </div>
                      
                               <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-light btn-md" value="change">
                            </div>
                              <div id="register-link">
                                <a href="homepage.php" class="text-light text-center">Go to home</a>
                            </div>
                            <!--    <div id="register-link">
                                <a href="homepage.php" class="text-light text-center" name="log-out">Log-out</a>
                            </div> -->
                           
                       
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                      <?php
                       if (isset($_POST['submit']))
                        {

                       $fullname=$_POST['fullname'];
                       $aptdate=$_POST['aptdate'];
                       $apttime=$_POST['apttime'];

                       $query="UPDATE `appointment_data` SET `p_date`='$aptdate',`p_time`=' $apttime' WHERE p_name='$fullname'";
                       $result=mysqli_query($conn,$query);
                       if ($result==true) {

                        echo "<script>alert('changed successfully')</script>";

                       }
                       else
                       {
                        echo "<script>alert('$username does not exist')</script>";

                       }
                     }
                         ?>


  </body>
</html>

                               

           

                                    

                                      


























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
<div class="transaction mt-5">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-light">Payment</h3>
                            <div class="form-group">
                                <label for="username" class="text-light">Enter your name:</label><br>
                                <input type="text" name="username" id="username" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-light">Enter Email</label><br>
                                <input type="text" name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="email should contain @symbol and at least 5 character long" minlength="5" required="required">
                            </div>


                     
                            <div class="form-group">
                                <label for="payment" class="text-light">Payment type</label><br>
                                <input type="radio"  name="payment" value="Online" readonly=""><span class="text-light"> Online</span> 
                                <input type="radio" name="payment" value="Offline"  required="required"><span class="text-light">Offline</span>
                               
                            </div>
                       <!--            <div class="form-group">
                                <label for="gender" class="text-light" class="form-control" name="amount">Amount</label>
                                <select name="name">
                                <option >less than 50</option>
                                <option >100</option>
                                <option >200</option>
                                <option >500</option>
                                <option >1000</option>
                                <option >greater then 1000</option>
                                </select>

                               
                            </div> -->
                         
                            <br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-light btn-md" value="submit">
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


            <?php

                           
                     if (isset($_POST['submit'])) {
          
                      // $patientid=$_SESSION['patientid'];
                      $username=$_POST['username'];
                      $email=$_POST['email'];
                      $payment=$_POST['payment'];

                      $query1="SELECT * from  pat_registration where email='$email'";
                      $result1= mysqli_query($conn,$query1);
                      $row1=mysqli_fetch_assoc($result1); 
                      $patient_id=$row1['pat_id'];
                


                       $query="INSERT INTO `transaction_info`( `p_name`, `email`, `payment_type`,pat_id) VALUES ('$username','$email','$payment','$patient_id')";
                       $result= mysqli_query($conn,$query);
                     

                       echo "<script>alert('payment successful')</script>";
                            echo "<script> window.open('appointment_for_patient_table.php','_self')</script>";
                           

                                      

                    }
                       ?>
                     


</body>
</html>

<!-- select * from pat_registration AS pr inner join appointment_data AS ad on pr.pat_id=ad.pat_id  -->
<!-- where date(ad.p_date) and ad.table_name!=1 < now(); -->
<!-- select * from pat_registration AS pr inner join appointment_data AS ad on pr.pat_id=ad.p_id -->
<!-- where date(ad.p_date) < now() -->
<!-- select * from pat_registration AS pr inner join appointment_data AS ad on pr.pat_id=ad.p_id -->













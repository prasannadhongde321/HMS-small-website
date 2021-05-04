<?php

$conn=mysqli_connect("localhost","root","","hms");
// $sel=mysqli_select_db($conn,"hms");

if (isset($_POST['login']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];

   $query="SELECT * from adminlogin where Adminname='$username' and pass='$password' ";
   $result=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($result);
   if(isset($row['Adminname']))
   {
   	session_start();

   	$_SESSION["user"]=$username;
   	$_SESSION['admin_id']=$row['admin_id'];
   	header("Location:adminpanel.php");
   }
   else
   {
   	echo "<script>alert('Invalid username or password')</script>";
   	echo "<script> window.open('admin.php','_self')</script>";
   
   }

}




?>











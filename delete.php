<?php
$conn=mysqli_connect("localhost","root","","hms");
?>

<?php
$query="SELECT amount FROM appointment_data";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if ($row) {
		$amt=$row['amount'];
	    // print_r($amt);
	    echo "<script>confirm('want to delete?')</script>";
		$query="DELETE FROM appointment_data WHERE amount='$amt'";
		$result=mysqli_query($conn,$query);

		echo "<script>confirm('successfuly deleted?')</script>";
		echo "window.open('appointment_for_patient_table.php')";
	}	
 

?>
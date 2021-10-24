<?php 
include("dbconnection.php");                                            
$a=mysqli_real_escape_string($conn,$_REQUEST['name']);
$b=mysqli_real_escape_string($conn,$_REQUEST['address']);
$c=mysqli_real_escape_string($conn,$_REQUEST['h_no']);
$d=mysqli_real_escape_string($conn,$_REQUEST['c_number']);
$e=mysqli_real_escape_string($conn,$_REQUEST['dat']);
$f=mysqli_real_escape_string($conn,$_REQUEST['complaint']);
$sql="INSERT INTO complaint_tb(name,address,h_no,c_number,dat,complaint) values('$a','$b','$c','$d','$e','$f')";

if (mysqli_query($conn,$sql)) 
{
	echo "Record Added Successfully";
	header("location:customerhome.php");
}
else
{
	echo "Connection Failed";
	mysqli_error($conn);
}
mysqli_close($conn);





 ?>
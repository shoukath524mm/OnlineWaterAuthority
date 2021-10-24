<?php 
include("dbconnection.php");                                            
$a=mysqli_real_escape_string($conn,$_REQUEST['c_number']);
$b=mysqli_real_escape_string($conn,$_REQUEST['name']);
$c=mysqli_real_escape_string($conn,$_REQUEST['area']);
$d=mysqli_real_escape_string($conn,$_REQUEST['complaint']);

$sql="INSERT INTO complaint_tb(c_number,name,area,complaint) values('$a','$b','$c','$d')";

if (mysqli_query($conn,$sql)) 
{
	echo "Record Added Successfully";
	header("location:addcomplaint.php");
}
else
{
	echo "Connection Failed";
	mysqli_error($conn);
}
mysqli_close($conn);





 ?>
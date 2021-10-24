<?php 
  include("dbconnection.php");

   $a=mysqli_real_escape_string($conn,$_REQUEST['name']);
   $b=mysqli_real_escape_string($conn,$_REQUEST['mobile']);
   $c=mysqli_real_escape_string($conn,$_REQUEST['address']);
   $d=mysqli_real_escape_string($conn,$_REQUEST['aadhar']);
   $e=mysqli_real_escape_string($conn,$_REQUEST['c_number']);
   $f=mysqli_real_escape_string($conn,$_REQUEST['dat']);
   $g=mysqli_real_escape_string($conn,$_REQUEST['h_no']);
  
 $sql="INSERT INTO approval_tb(name,mobile,address,aadhar,c_number,dat,h_no) values('$a','$b','$c','$d','$e','$f','$g')";
 $sql1=$conn->query("UPDATE customer_tb SET status='1' where mobile='$b'") or die(mysqli_error());

   if (mysqli_query($conn,$sql)) 
   {
   	 echo "recorded added successfully";
   	 header("location:viewcustomer.php");

   }
   else
   {
   	echo "connection failed";
   	mysqli_error($conn);
   }
   mysqli_close($conn);



 ?>
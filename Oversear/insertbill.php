<?php 
  include("dbconnection.php");

   $a=mysqli_real_escape_string($conn,$_REQUEST['name']);
   $b=mysqli_real_escape_string($conn,$_REQUEST['mobile']);
   $c=mysqli_real_escape_string($conn,$_REQUEST['address']);
   $d=mysqli_real_escape_string($conn,$_REQUEST['aadhar']);
   $e=mysqli_real_escape_string($conn,$_REQUEST['c_number']);
   $f=mysqli_real_escape_string($conn,$_REQUEST['dat']);
   $g=mysqli_real_escape_string($conn,$_REQUEST['h_no']);
   $h=mysqli_real_escape_string($conn,$_REQUEST['amount']);
   $i=mysqli_real_escape_string($conn,$_REQUEST['l_date']);


  
 $sql="INSERT INTO bill_tb(name,mobile,address,aadhar,c_number,dat,h_no,amount,l_date) values('$a','$b','$c','$d','$e','$f','$g','$h','$i')";


   if (mysqli_query($conn,$sql)) 
   {
   	 echo "recorded added successfully";
   	 header("location:addbill.php");

   }
   else
   {
   	echo "connection failed";
   	mysqli_error($conn);
   }
   mysqli_close($conn);



 ?>
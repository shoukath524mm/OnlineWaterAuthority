<?php 
 include("dbconnection.php");
 
   $a=mysqli_real_escape_string($conn,$_REQUEST['name']);
   $b=mysqli_real_escape_string($conn,$_REQUEST['mobile']);
   $c=mysqli_real_escape_string($conn,$_REQUEST['address']);
   $d=mysqli_real_escape_string($conn,$_REQUEST['username']);
   $e=mysqli_real_escape_string($conn,$_REQUEST['aadhar']);

   $sql="INSERT INTO customer_tb(name,mobile,address,username,aadhar) values('$a','$b','$c','$d','$e')";

   if (mysqli_query($conn,$sql)) 
   {
      echo "Record Added Successfully";
      header("location:customer.php");
   }
   else
   {
     echo "Connection Failed";
     mysqli_error($conn);
   }
   mysqli_close($conn);

 
 

 ?>
<?php 
 include("dbconnection.php");

 $p=mysqli_real_escape_string($conn,$_REQUEST['status']);

 $sql=$conn->query("UPDATE bill_tb SET status='1' where") or die(mysqli_error());

  if (mysqli_query($conn,$sql)) 
   {
   	 echo "recorded added successfully";
   	 header("location:paybill.php");

   }
   else
   {
   	echo "connection failed";
   	mysqli_error($conn);
   }
   mysqli_close($conn);

 ?>
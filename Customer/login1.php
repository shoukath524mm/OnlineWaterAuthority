<?php 
  session_start();
  include("dbconnection.php");

 if ($_SERVER["REQUEST_METHOD"]=="POST") 
 {
   $a=$_POST['c_number'];
   $b=$_POST['mobile'];
  $query=mysqli_query($conn,"SELECT * FROM approval_tb WHERE c_number='$a' and mobile='$b'");

   if (mysqli_num_rows($query)<1) 
   {
   	 $_SESSION['msg']="login Failed,user not found!";
   	 header('location:customerlogin.php');
   }
   else
   {
   	$row=mysqli_fetch_array($query);
   	$_SESSION['id']=$row['id'];
    $_SESSION['mobile']=$row['mobile'];    
   	header('location:customerhome.php');
   }

 }
 

 ?>
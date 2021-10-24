<?php 
  session_start();
  include("dbconnection.php");

 if ($_SERVER["REQUEST_METHOD"]=="POST") 
 {
   $a=$_POST['username'];
   $b=$_POST['password'];
  $query=mysqli_query($conn,"SELECT * FROM admin_tb WHERE username='$a' and password='$b'");

   if (mysqli_num_rows($query)<1) 
   {
   	 $_SESSION['msg']="login Failed,user not found!";
   	 header('location:admin.php');
   }
   else
   {
   	$row=mysqli_fetch_array($query);
   	$_SESSION['id']=$row['id'];
   	header('location:adminhome.php');
   }

 }
 

 ?>
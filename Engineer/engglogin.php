<?php 
  session_start();
  include("dbconnection.php");

 if ($_SERVER["REQUEST_METHOD"]=="POST") 
 {
   $a=$_POST['e_id'];
   $b=$_POST['phone'];
  $query=mysqli_query($conn,"SELECT * FROM engg_tb WHERE e_id='$a' and phone='$b'");

   if (mysqli_num_rows($query)<1) 
   {
   	 $_SESSION['msg']="login Failed,user not found!";
   	 header('location:engg.php');
   }
   else
   {
   	$row=mysqli_fetch_array($query);
   	$_SESSION['id']=$row['id'];
   	header('location:engghome.php');
   }

 }
 

 ?>
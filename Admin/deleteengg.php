<?php 
  include("dbconnection.php");

 if (isset($_GET['id'])) 
 {
  	$id=$_GET['id'];
  	$result=$conn->query("DELETE FROM engg_tb WHERE id=$id");
  	header('location:addengineer.php');
  }
  else 
  {
   	header("location:deleteengg.php? task=failed");
  } 
 ?>
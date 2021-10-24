<?php 
  include("dbconnection.php");

 if (isset($_GET['id'])) 
 {
  	$id=$_GET['id'];
  	$result=$conn->query("DELETE FROM oversear_tb WHERE id=$id");
  	header('location:addoversear.php');
  }
  else 
  {
   	header("location:deleteoversear.php? task=failed");
  } 
 ?>
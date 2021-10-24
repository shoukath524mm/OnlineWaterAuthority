<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "water_db");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['photo']['name'];
  	// Get text
  $a=mysqli_real_escape_string($db,$_POST['o_id']);
  $b=mysqli_real_escape_string($db,$_POST['name']);
  $c=mysqli_real_escape_string($db,$_POST['gender']);
  $d=mysqli_real_escape_string($db,$_POST['mail']);
  $e=mysqli_real_escape_string($db,$_POST['phone']);
  $f=mysqli_real_escape_string($db,$_POST['address']);
 

  	// image file directory
  	$target = "oversear/".basename($image);

  	$sql="INSERT INTO oversear_tb(o_id,name,gender,mail,phone,photo,address) values ('$a','$b','$c','$d','$e','$image','$f')";
	
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['photo']['tmp_name'],$target)) {
  		
  	
  	}else{
  		$msg = "Failed to upload image";
  	}
    header("location:addoversear.php");
  }

?>




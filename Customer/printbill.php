 <?php

 session_start();
     include("dbconnection.php");
   $sql="SELECT * FROM bill_tb where mobile='".$_SESSION['mobile']."'";
   $result=$conn->query($sql);
   $row=$result->fetch_assoc();
    $a=$row['name'];
    $b=$row['mobile'];
    $c=$row['address'];
    $d=$row['aadhar'];
    $e=$row['c_number'];
    $f=$row['dat'];
    $g=$row['h_no'];
    $h=$row['amount'];
    $i=$row['l_date'];

    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Water Authority</title>
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 15px;
		}
	</style>
</head>
<body  onload="myFunction();">
	
	  <table align="center" border="0" width="100" cellpadding="3">
	  	<tr>
	  	<th colspan="3"><img src="Banner_Ed1.gif" width="300" height="75" align="center">
	  		</th>
	  </tr>
	  <tr><td><td></td></td></tr>
	  
	  	<tr>
	  		<td>Consumer Number:</td>
	  		<td><?php echo $e?></td>
	  	</tr>

	  	<tr>
	  		<td>Consumer Name:</td>
	  		<td><?php echo $a?></td>
	  	</tr>

	  	<tr>
	  		<td>Mobile:</td>
	  		<td><?php echo $b?></td>
	  	</tr>

	  	<tr>
	  		<td>Aadhar:</td>
	  		<td><?php echo $d?></td>
	  	</tr>

	  	<tr>
	  		<td>House Number:</td>
	  		<td><?php echo $g?></td>
	  	</tr>
	  		<tr>
	  		<td>Bill Amount:</td>
	  		<td><?php echo $h?></td>
	  	</tr>
	  		<tr>
	  		<td>Last Date:</td>
	  		<td><?php echo $i?></td>
	  	</tr>
	  	
	  		
	  </table>

	  <script>
	  	function myFunction(){
	  		window.print();
	  	}
	  </script>


</body>
</html>
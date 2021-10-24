<?php 
include('dbconnection.php');
if (isset($_GET["task"])) 
{
	if($_GET["task"]=="update")
	{
		$id=@$_GET['id'];
		$a=@$_POST['status'];

		$update=$conn->query("UPDATE complaint_tb SET status='$a' where id=$id")or die(mysqli_error());

		if ($update>0) 
		{
			header("location:viewcomplaint.php?task=successfully");
		}
		else
		{
			header("location:action.php?task=failed");
		}
	}
}


 ?>
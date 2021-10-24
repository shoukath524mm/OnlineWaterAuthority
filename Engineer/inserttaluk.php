<?php 
include('dbconnection.php');
if (isset($_GET["task"])) 
{
	if($_GET["task"]=="update")
	{
		$id=@$_GET['id'];
		$a=@$_POST['taluk'];
		$b=@$_POST['item1'];
		$c=@$_POST['item2'];
		$d=@$_POST['item3'];
		$e=@$_POST['item4'];
		$f=@$_POST['budget'];
		$g=@$_POST['i_date'];
		



		$update=$conn->query("UPDATE oversear_tb SET taluk='$a',items='$b,$c,$d,$e',budget='$f',i_date='$g' where id=$id")or die(mysqli_error());

		if ($update>0) 
		{
			header("location:viewoversear.php?task=successfully");
		}
		else
		{
			header("location:addtaluk.php?task=failed");
		}
	}
}


 ?>
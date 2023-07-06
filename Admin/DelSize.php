<?php
	$id=$_GET['id'];
	
	include("Db_Connect.php");
	$sql="delete from Size where SizeId='$id'";
	mysql_query($sql);
	header("location:Size.php");


?>
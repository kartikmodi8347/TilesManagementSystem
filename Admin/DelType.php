<?php
	$id=$_GET['id'];
	
	include("Db_Connect.php");
	$sql="delete from Type where TypeId='$id'";
	mysql_query($sql);
	header("location:Type.php");


?>
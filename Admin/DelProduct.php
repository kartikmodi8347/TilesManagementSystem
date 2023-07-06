<?php
	$id=$_GET['id'];
	
	include("Db_Connect.php");
	$sql="delete from Product where ProductId='$id'";
	mysql_query($sql);
	header("location:product.php");


?>
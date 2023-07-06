<?php
	$id=$_GET['id'];
	
	include("Db_Connect.php");
	$sql="delete from Images where ImageId='$id'";
	mysql_query($sql);
	header("location:Gallery.php");


?>
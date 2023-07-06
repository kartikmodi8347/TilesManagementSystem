<?php
	include("Db_Connect.php");

	$qty = $_POST['qty1'];
	$id = $_POST['id'];
	$price = $qty * $_POST['id1'];
	$sql = "UPDATE Kart SET Quantity = $qty, Amount = $price WHERE ProductId = '$id'";
	
	$conn->query($sql);

	header("location: AK.php");
?>

<?php
	session_start();

	unset($_SESSION['uname']);
	empty($_SESSION['uname']);

	session_destroy();	
	header("location:index.php");



?>
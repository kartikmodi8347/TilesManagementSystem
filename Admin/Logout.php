<?php
	session_start();
	
	
	empty($_SESSION['uname']);
	unset($_SESSION['uname']);
	session_destroy();
	
	header("location:index.php");
	


?>
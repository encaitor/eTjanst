<?php
	session_start();

	if(!isset($_SESSION['user'])){ 
		header("Location: index.php");
	}
	
	session_destroy();
	echo $_SESSION['user'];
	header("location: index.php");
	exit();
?>
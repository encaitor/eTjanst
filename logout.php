<?php
	session_start();

	if(!isset($_SESSION['user'])){ 
		header("Location: start.html");
	}
	
	session_destroy();
	echo $_SESSION['user'];
	header("location: start.html");
	exit();
?>
<?php
	session_start();

	if(!isset($_SESSION['user'])){ 
		header("Location: index.html");
	}
	
	session_destroy();
	echo $_SESSION['user'];
	header("location: index.html");
	exit();
?>
<?php
	session_start();
	if(isset($_SESSION['user']));{
        setcookie('loggedin', true, time()+3600);
		header("Location: feed.php");
	}
	$error='';
	$mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
	
	$error = $mysqli->connect_error;
	if ($error) {
		$code  = $mysqli->connect_errno;
		die("Error: ($code) $error");
	}
	
	$loginEmail = mysqli_real_escape_string($mysqli, $_POST['inputEmail']);
	$loginPW = mysqli_real_escape_string($mysqli, $_POST['loginPassword']);
	
	$retrieveSalt = "SELECT salt FROM users WHERE email = '$loginEmail'";
	$results = $mysqli->query($retrieveSalt);
	$results_array = mysqli_fetch_assoc($results);
	$retrievedSalt = $results_array['salt'];
	
	$decodeHash = hash("sha256", $loginPW . $retrievedSalt);

	$retrieveUser = "SELECT * FROM users WHERE password = '$decodeHash'";
	$user = $mysqli->query($retrieveUser);
	
	$rows = mysqli_num_rows($user);
    $userResult = mysqli_fetch_assoc($user);


	if ($rows == 1){
		$_SESSION['user'] = $userResult['username'];
        $_SESSION['email'] = $userResult['email'];
        $_SESSION['admin'] = $userResult['permission'];
        $_SESSION['valid_until'] = time() + 1800; // stay logged in for 30min
        header('Location: profilePage.php');
	} else {
        header('Location: index.php#openErrorModal');
	}
	
	exit;
?>
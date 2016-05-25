<?php
	$mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
	
	$error = $mysqli->connect_error;
	if ($error) {
		$code  = $mysqli->connect_errno;
		die("Error: ($code) $error");
	}
	
    $userName = mysqli_real_escape_string($mysqli, $_POST['registerUsername']);
	$userEmail = mysqli_real_escape_string($mysqli, $_POST['registerEmail']);
	$userPW = mysqli_real_escape_string($mysqli, $_POST['registerPassword']);
    $validatePW = mysqli_real_escape_string($mysqli, $_POST['validatePassword']);

    if ($userPW == $validatePW){
        $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
        $salt = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
	
	    $hash = hash("sha256", $userPW . $salt);
	
	    $checkEmail = "SELECT email FROM users WHERE email = '$userEmail'";
	    $emailCheck = $mysqli->query($checkEmail);
        $emailRows = mysqli_num_rows($emailCheck);
	
        $checkUsername = "SELECT username FROM users WHERE username ='$userName'";
        $usernameCheck = $mysqli->query($checkUsername);
        $usernameRows = mysqli_num_rows($usernameCheck);
	
	   if ($emailRows == 0 && $usernameRows == 0){
		  $addUserToDB = ("INSERT INTO users (username, email, password, salt) VALUES('$userName', '$userEmail', '$hash', '$salt')");
		  $mysqli->query($addUserToDB);
	
		  header('Location: index.html');
	   } else {
		  header('Location: start.html');
	   }
    }
    else {
        header('Location: start.html');
    }
	exit;
?>
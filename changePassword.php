<?php
    session_start();
    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
	
	$error = $mysqli->connect_error;
	if ($error) {
		$code  = $mysqli->connect_errno;
		die("Error: ($code) $error");
	}

    $user = $_SESSION['user'];
    $oldPW = mysqli_real_escape_string($mysqli, $_POST['oldPassword']);
    $newPW = mysqli_real_escape_string($mysqli, $_POST['newPassword']);
    $verifyPW = mysqli_real_escape_string($mysqli, $_POST['verifyPassword']);

    if ($newPW == $verifyPW) {
        $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
        $salt = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
	
	    $updPW = hash("sha256", $newPW . $salt);
        
        $userExist = "SELECT * FROM users WHERE username = '$user'";
        $userExistCheck = $mysqli->query($userExist);
        $userExistArray = mysqli_fetch_assoc($userExistCheck);
        $retrieveSalt = $userExistArray['salt'];
        $retrievePW = $userExistArray['password'];

        $decodeHash = hash("sha256", $oldPW . $retrieveSalt);
        
        if ($decodeHash == $retrievePW) {
            $updatePassword = "UPDATE users SET password='$updPW', salt='$salt' WHERE username='$user' AND password='$decodeHash'";
            $updated = $mysqli->query($updatePassword);
            header('Location: profilePage.html');
        } else {
            //echo '<script type="text/javascript" src="assets/js/pwError.js">',  'wrongPW();', '</script>';
            header('Location: account.php');
        }
    } else {
        //echo '<script type="text/javascript" src="assets/js/pwError.js">',  'pwNotSame();', '</script>';
        header('Location: account.php');
    }
    exit;
?>
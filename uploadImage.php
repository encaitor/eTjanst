<?php
    session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
	
	$error = $mysqli->connect_error;
	if ($error) {
		$code  = $mysqli->connect_errno;
		die("Error: ($code) $error");
	}





/* --- IMAGE QUERY --- */

    $username = $_SESSION['user'];
    $fileName = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    $uploadOk = 1;

    $fp      = fopen($tmpName, 'r');
    if(!($fp))
    {
        echo 'could not open file';
    }

    
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if ($_FILES["userfile"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    $sqlHasImage = "SELECT * FROM user_images WHERE username = '$username'";
    $hasImage = $mysqli->query($sqlHasImage);
    $userRows = mysqli_num_rows($hasImage);


    if($userRows == 0)
    {    
    $uploadUserImg = "INSERT INTO `user_images` (filename, type, size, content, username) VALUES ('$fileName', '$fileType', '$fileSize', '$content','$username')";
    $mysqli->query($uploadUserImg);
    }
    else{
        $updateUserImg = "UPDATE user_images SET filename='$fileName', type='$fileType', size='$fileSize', content='$content', username='$username' WHERE username = '$username'";
        
        $mysqli->query($updateUserImg);
    }

    header('location: account.php');

exit;
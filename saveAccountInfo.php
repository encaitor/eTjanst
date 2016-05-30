<?php
    session_start();
	$mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
	
	$error = $mysqli->connect_error;
	if ($error) {
		$code  = $mysqli->connect_errno;
		die("Error: ($code) $error");
	}

    $user = $_SESSION['user'];

    $userBio = mysqli_real_escape_string($mysqli, $_POST['bio']);

    if (isset($_POST['weekends'])) {
        $weekends = "yes";
    } else {
        $weekends = "no";
    }

    if (isset($_POST['weekdays'])) {
        $weekdays = "yes";
    } else {
        $weekdays = "no";
    }

    if (isset($_POST['morning'])) {
        $morning = "yes";
    } else {
        $morning = "no";
    }

    if (isset($_POST['afternoon'])) {
        $afternoon = "yes";
    } else {
        $afternoon = "no";
    }

    if (isset($_POST['evenings'])) {
        $evenings = "yes";
    } else {
        $evenings = "no";
    }

    if (isset($_POST['nights'])) {
        $nights = "yes";
    } else {
        $nights = "no";
    }

    $userExist = "SELECT username FROM bio WHERE username = '$user'";
    $userExistCheck = $mysqli->query($userExist);
    $userRows = mysqli_num_rows($userExistCheck);

    if ($userRows == 0){
        $accountInfoToDB = ("INSERT INTO bio (username, bio, weekends, weekdays, morning, afternoon, evenings, nights) VALUES('$user', '$userBio', '$weekends', '$weekdays', '$morning', '$afternoon', '$evenings', '$nights')");
        $mysqli->query($accountInfoToDB);
    } else {
        $editUser = "UPDATE bio SET bio='$userBio', weekends='$weekends', weekdays='$weekdays', morning='$morning', afternoon='$afternoon', evenings='$evenings', nights='$nights' WHERE username='$user'";
        $mysqli->query($editUser);  
        
        
    }
	header('Location: profilePage.php');

    exit;
?>
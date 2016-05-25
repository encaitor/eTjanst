<?php
    session_start();
	$mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
	
	$error = $mysqli->connect_error;
	if ($error) {
		$code  = $mysqli->connect_errno;
		die("Error: ($code) $error");
	}
    
    $user = $_SESSION['user'];
    $title = mysqli_real_escape_string($mysqli, $_POST['title']);
    $msg = mysqli_real_escape_string($mysqli, $_POST['message']);

    if (isset($_POST['optionsGames'])){
        $game = $_POST['optionsGames'];
    }
    if (isset($_POST['optionsPlaytype'])){
        $playtype = $_POST['optionsPlaytype'];
    }

    if (isset($_POST['LF_Newbie'])) {
        $lfNewbie = "yes";
    } else {
        $lfNewbie = "no";
    }
    if (isset($_POST['LF_Casual'])) {
        $lfCasual = "yes";
    } else {
        $lfCasual = "no";
    }
    if (isset($_POST['LF_Semipro'])) {
        $lfSemipro = "yes";
    } else {
        $lfSemipro = "no";
    }
    if (isset($_POST['LF_Hardcore'])) {
        $lfHardcore = "yes";
    } else {
        $lfHardcore = "no";
    }

    $timezone = mysqli_real_escape_string($mysqli, $_POST['timezone']);
    $s_hour = mysqli_real_escape_string($mysqli, $_POST['startHour']);
    $s_min = mysqli_real_escape_string($mysqli, $_POST['startMin']);
    $s_time = $s_hour . $s_min;

    $e_hour = mysqli_real_escape_string($mysqli, $_POST['endHour']);
    $e_min = mysqli_real_escape_string($mysqli, $_POST['endMin']);
    $e_time = $e_hour . $e_min;

    $region = mysqli_real_escape_string($mysqli, $_POST['region']);

    if (isset($_POST['lang_eng'])) {
        $lang_eng = "yes";
    } else {
        $lang_eng = "no";
    }
    if (isset($_POST['lang_chi'])) {
        $lang_chi = "yes";
    } else {
        $lang_chi = "no";
    }
    if (isset($_POST['lang_spa'])) {
        $lang_spa = "yes";
    } else {
        $lang_spa = "no";
    }
    if (isset($_POST['lang_ara'])) {
        $lang_ara = "yes";
    } else {
        $lang_ara = "no";
    }
    $lang_other = mysqli_real_escape_string($mysqli, $_POST['otherLanguages']);

    $publishAd = ("INSERT INTO ads (title, msg, game, skill, skill_newbie, skill_casual, skill_semipro, skill_hardcore, timezone, s_time, e_time, region, lang_eng, lang_chi, lang_spa, lang_ara, lang_other, username) VALUES('$title', '$msg', '$game', '$playtype', '$lfNewbie', '$lfCasual', '$lfSemipro', '$lfHardcore', '$timezone', '$s_time', '$e_time', '$region', '$lang_eng', '$lang_chi', '$lang_spa', '$lang_ara', '$lang_other', '$user')");
    $mysqli->query($publishAd);
    
    header('Location: ')
    exit;
?>
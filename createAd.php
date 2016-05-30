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

    $game = mysqli_real_escape_string($mysqli, $_POST['game']);

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

    $publishAd = ("INSERT INTO ads (title, username, msg, game, skill, skill_newbie, skill_casual, skill_semipro, skill_hardcore, region, lang_eng, lang_chi, lang_spa, lang_ara, lang_other) VALUES('$title', '$user', '$msg', '$game', '$playtype', '$lfNewbie', '$lfCasual', '$lfSemipro', '$lfHardcore', '$region', '$lang_eng', '$lang_chi', '$lang_spa', '$lang_ara', '$lang_other')");
    $mysqli->query($publishAd);
    
    header('Location: feed.php');
    exit;
?>
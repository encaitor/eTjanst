<?php

$mysqli = new mysqli('localhost', 'root', '', 'db-projekt');


$error = $mysqli->connect_error;
	if ($error) {
		$code  = $link->connect_error;
		die("Error: ($code) $error");
	}

$game = mysqli_real_escape_string($mysqli, $_POST['game']);

//Hämtar data från "kommentaer"
$findGame = ("SELECT GameName FROM games WHERE GameName LIKE '%$game%'");
$foundGames = $mysqli->query($findGame);

//$foundGamesArray = mysqli_fetch_assoc($foundGames);
//$row_count=mysqli_num_rows($foundGames);

//echo $row_count;
//echo $foundGamesArray['GameName'];

while ($foundGamesArray = mysqli_fetch_assoc($foundGames)) {
    echo $foundGamesArray['GameName'];
}



?>
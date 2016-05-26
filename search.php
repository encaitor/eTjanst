<?php

$host = '127.0.0.1:8889';
$user = 'root';
$password = 'root';
$name ='Spel';



$link = mysql_connect($host, $user, $password);
mysql_select_db($name);

$error = $link->connect_error;
	if ($error)
	{
		$code  = $link->connect_error;
		die("Error: ($code) $error");
	}

//Hämtar data från "kommentaer"
$result = $link->query("SELECT * FROM games WHERE GameName LIKE'%$game%") or die() ("Could not find");

if($result ->num_rows)
{
	$rows = $result ->fetch_all(MYSQLI_ASSOC);
	
	foreach ($rows as $row)
	{
		echo $row['GameName'], '<br>','<br>';
	}

}



?>


	
	

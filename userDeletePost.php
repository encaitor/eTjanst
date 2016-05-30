<?php

    $adToRemove = $_POST['adID'];

    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
    
    $sql = "DELETE FROM ads WHERE adID = '$adToRemove' ";
    $mysqli->query($sql);
    
    
    header('location: profilePage.php');
    exit;
    
?>
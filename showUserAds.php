<?php
function printUserPosts($username){
    
    
    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
    
    $sql = "SELECT * FROM ads WHERE username = '$username' ORDER BY adID DESC";
    $sth = $mysqli->query($sql);
    
    
    while($row = mysqli_fetch_array($sth))
    {
        echo "<tr> <td>" . $row['title'] . "</td>";
        echo "<td>" . $row['game'] . "</td>";
        echo "<td>" . $row['msg'] . "</td>";
        echo "<td>" . $row['adID'] . "</td>";
        echo "<td id='postDelete'><form name='userDeletePost' method='POST' action='userDeletePost.php'><input name='adID' type='hidden' value='" . $row['adID'] . "'> <input type='submit' class='btn_red' value='Delete'></form></td> </tr>";
    }
}
?>
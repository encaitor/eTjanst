<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/adminTable.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        
        <link rel="stylesheet" type="text/css" href="css/adminTable.css">

         <title>Admin tabel</title>

    
    <body>
        <div class="=header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><img src="assets/img/Controller-52.png"></a>
                
                <ul class="pure-menu-list">
                    <li class="pure-menu-item" ><a href="index.php" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="feed.php" class="pure-menu-link">Ads</a></li>
                    <li class="pure-menu-item"><a href="adForm.php" class="pure-menu-link">Create Ad</a></li>
                    <li class="pure-menu-item"><a href="profilePage.php" class="pure-menu-link">My Profile</a></li>
                    <li class="pure-menu-item"><a id="" href="logout.php" class="pure-menu-link ">Log Out</a></li>
                </ul>
            </div>
        </div>
     <div class="pure-g">
       <div class="feed pure-u-1 pure-u-sm-3-4">
        <!--Feed--> 
                <section class="post">
                    <header class="post-header">
                        <?php
                        session_start();  
                        showPosts();
                        ?>
                    </header>




                </section>
        </div>      

        <!--Sidebar-->
        <div class="sidebar pure-u-1 pure-u-sm-1-4">
            
            <?php
            echo "<p class='loggedIn'>Logged in as " . $_SESSION['user'] . "</p>";
            ?>
            
            <br>
            <br>
            <!--Search box-->
             <form id="searchform" method="post">
                <input id="gameSearch" type="text" name="gameSearch" placeholder="Search for games.." class="pure-input-1">
                <input type="submit" name="submit" value="Search">
             </form>
            <!--Play type-->
 
            <form class ="myform" method="post">
                <label>Games</label>
                <br>
                <input type="checkbox" name="dota2" value="dota"> Dota 2<br>
                <input type="checkbox" name="csgo" value="csgo"> Counter-Strike: Global Offensive<br>
                <input type="checkbox" name="lol" value="lol"> League of Legends<br>
                <input type="checkbox" name="wow" value="wow"> World of Warcraft<br>
                <input type="checkbox" name="hearthstone" value="hearthstone"> Hearthstone<br>
                <input type="checkbox" name="diablo3" value="diablo3"> Diablo 3<br>
                <input type="checkbox" name="minecraft" value="minecraft"> Minecraft<br>
                <input type="checkbox" name="overwatch" value="overwatch"> Overwatch<br>
                <input type="submit" name="submit" value="Filter">
                </form>
                <p>
                </div>              
        </div>

        <br>
        
    </body>


    <!--Pop-up-->

      <a href="#openModal"></a>       
        <div id="openModal" class="modalDialog">
            <div id="loginDialog">
                <header class="popupHeader">
                <span class="header_title">Warning</span>
                </header>
                <section class="popupBody">
                    <div class="user_login">
                        <form name="loginForm" method="POST" action="adminTable.php">
                            <label>Are you sure you want to delete the post permanently?</label>
                            <br>
                            <div class="action_btns">
                                <input type="submit" class="btn btn_red" value="Delete">  
                                <input type="submit" class="btn btn_grey" value="Cancel">  
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>      

</html>


<?php
function showPosts() {
    
    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
    $error = $mysqli->connect_error;
    if ($error) {
        $code  = $mysqli->connect_errno;
        die("Error: ($code) $error");
    }
    
    
    $ads = filterSearch();
    //$ads = $mysqli->query($retrieveAds);
    if($ads == false) {
        die("Query failed: ".mysqli_error().PHP_EOL.$retrieveAds);
    }
                        
                        
    while($row = mysqli_fetch_array($ads))
    {
        if ($row['skill'] == 'semipro') {
            $skillevel = 'Semi-pro';
        } elseif ($row['skill'] == 'hardcore') {
            $skillevel = 'Hardcore';
        } elseif ($row['skill'] == 'casual') {
            $skillevel = 'Casual';
        } else {
            $skillevel = 'Newbie';
        }
                            
        echo "<div class='post-description'>";
        echo "<div class='rubrik' id='tid'>";
        echo "<a id='modal_trigger' href='#openModal' class='delete' title='Delete'class='pure-menu-item'>Delete</a>";
        echo "<div style='clear: both;'></div>";
        echo "</div>";
        echo "<table class='admin'border='5' cellspacing='8' >";
        echo "<tr>";
        echo "<td style ='padding: 5px'> Username: " . $row['username']  . "</td>";
        echo "<td style ='padding: 5px'> Title: " . $row['title'] . "</td>";
        echo "<td style ='padding: 5px'> Game: " . $row['game'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style ='padding: 5px'> Skill: ". $row['skill']. "</td>";
        echo "<td style ='padding: 5px'> Region: ". $row['region']. "</td>";
        echo "<td style ='padding: 5px'> English: " .$row['lang_eng'] . "</td>"; 
        echo "</tr>";
        echo "<tr>";
        echo "<td style ='padding: 5px'> Spanish: " .$row['lang_spa'] . "</td>";
        echo "<td style ='padding: 5px'> Arabic: " .$row['lang_ara'] . "</td>"; 
        echo "<td style ='padding: 5px'> Mandarin: " .$row['lang_chi'] . "</td>"; 
        echo "</tr>";
        echo "<tr>";
        echo "<td style ='padding: 5px'> Looking for Newbie: " .$row['skill_newbie'] . "</td>";
        echo "<td style ='padding: 5px'> Looking for Casual: " .$row['skill_casual'] . "</td>"; 
        echo "<td style ='padding: 5px'> Looking for Semi-pro: " .$row['skill_semipro'] . "</td>"; 
        echo "</tr>";
        echo "<tr>";
        echo "<td style ='padding: 5px'> Looking for Hardcore: " .$row['skill_hardcore'] . "</td>"; 
        echo "<td style ='padding: 5px' class ='other'colspan='2'> Other: " .$row['lang_other'] . "</td>"; 
        echo "</tr>";
        echo "<tr>";
        echo "<td style ='padding: 5px' class='msg' colspan='3'> Message: " . $row['msg'] . "</td>";
        echo "</table>";
        echo "</div>";
    }
    $mysqli->close();
}
function filterSearch() {
    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
    $error = $mysqli->connect_error;
    if ($error) {
        $code  = $mysqli->connect_errno;
        die("Error: ($code) $error");
    }
    
    $gameSearch = null;
    
    if (isset($_POST['gameSearch'])){
        $gameSearch = mysqli_real_escape_string($mysqli, $_POST['gameSearch']);
    }
    
    
    if ($gameSearch == null || $gameSearch == "") {
        //FILTER - GAMES
        $games = '';
        if (isset($_POST['dota2'])) {
            $games .= "'" . $_POST['dota2'] . "', ";
        }
        if (isset($_POST['csgo'])) {
            $games .= "'" . $_POST['csgo'] . "', ";
        }
        if (isset($_POST['lol'])) {
            $games .= "'" . $_POST['lol'] . "', ";
        }
        if (isset($_POST['wow'])) {
            $games .= "'" . $_POST['wow'] . "', ";
        }
        if (isset($_POST['hearthstone'])) {
            $games .= "'" . $_POST['hearthstone'] . "', ";
        }
        if (isset($_POST['diablo3'])) {
            $games .= "'" . $_POST['diablo3'] . "', ";
        }
        if (isset($_POST['overwatch'])) {
            $games .= "'" . $_POST['overwatch'] . "', ";
        }
        if (isset($_POST['minecraft'])) {
            $games .= "'" . $_POST['minecraft'] . "', ";
        }
        $trimGames = substr($games, 0, -2);
        if (isset($_POST['dota2']) || isset($_POST['csgo']) || isset($_POST['lol']) || isset($_POST['wow']) || isset($_POST['hearthstone']) || isset($_POST['diablo3']) || isset($_POST['minecraft']) || isset($_POST['overwatch'])) {
            $filterGames = "SELECT * FROM ads WHERE game in ($trimGames) ORDER BY adID DESC";
        } else {
            $filterGames = "SELECT * FROM ads ORDER BY adID DESC";
        }
        $filterSearch = $mysqli->query($filterGames);
    } else {
        $query_searchGame = "SELECT * FROM ads WHERE game='$gameSearch' ORDER BY adID DESC";
        $filterSearch = $mysqli->query($query_searchGame);
    }
    return $filterSearch;
    $mysqli->close();
}   
?>

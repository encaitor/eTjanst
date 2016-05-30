<!doctype HTML>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

        <link rel="stylesheet" href="css/feed.css">
    

         <title>Ads</title>

    
    </head>
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
                <h2></h2>
                    <section class="post">
                        <header class="post-header">
                            <?php
                            session_start();  
                            showPosts();
                            ?>
                        </header>
                    </section>
            </div>		
            <div class="sidebar pure-u-1 pure-u-sm-1-4">
                <br>
                <br>
                <?php
                echo "<p class='loggedIn'>Logged in as " . $_SESSION['user'] . "</p>";
                ?>

                <a href="adForm.php" class="create">Create ad</a>
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
                    <input type="checkbox" name="diablo_3" value="diablo_3"> Diablo 3<br>
                    <input type="checkbox" name="minecraft" value="minecraft"> Minecraft<br>
                    <input type="checkbox" name="overwatch" value="overwatch"> Overwatch<br>
                    <input type="submit" name="submit" value="Filter">
                </form>
            </div>
        </div>
        <br>
        <div class="pure-u-3-4">
            <div class="footer l-box is-center">
                <div class="pure-menu pure-menu-horizontal">
                <a href="FAQ.html" class="pure-menu-heading pure-menu-link">FAQ</a>
                <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="contactUs.html" class="pure-menu-link">CONTACT US</a></li>
                </ul>
                </div>
            </div>
        </div>
	</body>
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

        if ($row['region'] == 'Europe'){
            $region = 'Europe';
        }
        elseif ($row['region'] == 'North America'){
                $region = 'North America';
        }                           
        elseif ($row['region'] == 'South America'){
                $region = 'South America';
        }                            
        elseif ($row['region'] == 'Central America'){
                $region = 'Central America';
        }                            
        elseif ($row['region'] == 'Africa'){
                $region = 'Africa';
        }                            
        elseif ($row['region'] == 'Asia'){
                $region = 'Asia';
        }                            
        elseif ($row['region'] == 'Oceania'){
                $region = 'Oceania';
        }      

        $lang = '';
        if ($row['lang_eng'] === 'yes'){
            $lang .= "English <br>";
        }
        if ($row['lang_chi'] == 'yes'){
            $lang .= 'Chinese <br>';
        }                           
        if ($row['lang_spa'] == 'yes'){
            $lang .= 'Spanish <br>';
        }                            
        if ($row['lang_ara'] == 'yes'){
            $lang .= 'Arabic <br>';
        }                            
        if ($row['lang_other']){
            $lang .= ' '.$row['lang_other'];
        }

        $gameImg = '';
        if ($row['game'] === 'dota'){
            $gameImg = 'assets/img/dotalogo.jpg';
        } 
        if ($row['game'] === 'lol'){
            $gameImg = 'assets/img/LoL.png';
        } 
        if ($row['game'] === 'tf2'){
            $gameImg = 'assets/img/tf2logo.jpg';
        }
        if ($row['game'] === 'diablo_3'){
            $gameImg = 'assets/img/diablo3logo.png';
        }
        if ($row['game'] === 'wow'){
            $gameImg = 'assets/img/wowlogo.jpg';
        }
        if ($row['game'] === 'overwatch'){
            $gameImg = 'assets/img/overwatchlogo.png';
        }
        if ($row['game'] === 'minecraft'){
            $gameImg = 'assets/img/minecraftlogo.png';
        }
        if ($row['game'] === 'csgo'){
            $gameImg = 'assets/img/csgologo.jpg';
        }

        $lookingSkill = '';
        if ($row['skill_newbie'] === 'yes'){
            $lookingSkill .= "Newbie <br>";
        }
        if ($row['skill_casual'] === 'yes'){
            $lookingSkill .= 'Casual <br>';
        }                           
        if ($row['skill_semipro'] === 'yes'){
           $lookingSkill .= 'Semipro <br>';
        }                            
        if ($row['skill_hardcore'] === 'yes'){
            $lookingSkill .= 'Hardcore <br>';
        }            


        $usernameEmailFetch = $row['username'];

        $fetchEmail = "SELECT username, email FROM users WHERE username='$usernameEmailFetch'";
        $resultFetchEmail = $mysqli->query($fetchEmail);
        $email = mysqli_fetch_array($resultFetchEmail);


        echo "<div class='post-description'>";
        echo "<div class='rubrik' id='tid'>";
        echo "<div class='feedGameimg'><img class='feedGameimg' src='$gameImg' heigth='100' width='100'> </div>";
        echo "<p class='feedTitle'>" . $row['title'] . "</p>";
        echo "<p class='feedUser'>Posted by: " . $row['username'] . "</p>";  
        echo "<div style='clear: both;'></div>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='messageBox pure-u-1 pure-u-lg-2-3'><p class='feed'>" . $row['msg'] . "</p>";
        echo "<p class='feed'>My current skillevel: " . $skillevel . "</p>";
        echo "<div id='postBtn' class='action_btn'><form class='pure-form' action=''>
        <input class='btn' type='Submit' value='Contact'/></form>
        <form action='' class='pure-form'>
        <input class='btn btn_red' type='Submit'value='Report Ad'/>
        </form></div>";
        echo "</div>";
        echo "<div class='postInfotable pure-u-1 pure-u-lg-1-3'> 
            <table class='pure-table'> 
            <thead>
                <th> Region </th>
                <th> Language </th>
            </thead>
            <tbody>
                <td>$region</td>
                <td>$lang</td>
            </tbody>
            </table> 
            <table class='pure-table'>
            <thead>
                <th> Looking for </th>
            </thead>
            <tbody>
                <td> $lookingSkill </td>
            </tbody>
            </table>
        </div>";
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
        if (isset($_POST['diablo_3'])) {
            $games .= "'" . $_POST['diablo_3'] . "', ";
        }
        if (isset($_POST['overwatch'])) {
            $games .= "'" . $_POST['overwatch'] . "', ";
        }
        if (isset($_POST['minecraft'])) {
            $games .= "'" . $_POST['minecraft'] . "', ";
        }
        $trimGames = substr($games, 0, -2);

        if (isset($_POST['dota2']) || isset($_POST['csgo']) || isset($_POST['lol']) || isset($_POST['wow']) || isset($_POST['hearthstone']) || isset($_POST['diablo_3']) || isset($_POST['minecraft']) || isset($_POST['overwatch'])) {
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


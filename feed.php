


<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/feed.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

         <title>start</title>

    <header>
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                
                <ul class="pure-menu-list">
                    <li class="pure-menu-item" ><a href="index.html" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="gamesPage.html" class="pure-menu-link">Ads</a></li>
                    <li class="pure-menu-item"><a href="adForm.php" class="pure-menu-link">Create Ad</a></li>
                    <li class="pure-menu-item"><a href="profilePage.html" class="pure-menu-link">My Profile</a></li>
                    <li class="pure-menu-item"><a id="" href="logout.php" class="pure-menu-link ">Log Out</a></li>
                </ul>
            </div>
    </header>

    <body>

	 <div class="pure-g">
			
	   <div class="feed pure-u-1 pure-u-sm-3-4">
			
		<!--Feed-->	
            <h2>Ads</h2>
       
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
            
            <?php
            echo "<p class='loggedIn'>Logged in as " . $_SESSION['user'] . "</p>";
            ?>
            
            <a href="adForm.php" class="create">Create ad</a>
            <br>
            <br>
       <!--Search box-->
     <form id="searchform"  action="search.php" method="post" >
        <input type="text" name="game" placeholder="Search for games..">
        <input type="submit" name="submit" value="Search">
     </form>

        <?php print("output"); ?>


       <!--Play type-->

        <div class="pure-menu pure-menu-horizontal" id="SearchDown">
            <ul class="pure-menu-list">
                <form id="filter" name="filter" action="" method="post">
                    <label>Skillevel</label>
                    <p class="skillevel"><input type="checkbox" name="skill_Newbie" value="newbie">Newbie
                    <input type="checkbox" name="skill_Casual" value="casual" >Casual<br>
                    <input type="checkbox" name="skill_Semipro" value="semipro">Semi-pro
                    <input type="checkbox" name="skill_Hardcore" value="hardcore">Hardcore<br></p>
                    
                    <label>Region</label>
                    <p class="region"><input type="checkbox" name="northamerica" value="northamerica">North America
                    <input type="checkbox" name="centralamerica" value="centralamerica">Central America<br>
                    <input type="checkbox" name="southamerica" value="southamerica">South America
                    <input type="checkbox" name="europe" value="europe">Europe<br>
                    <input type="checkbox" name="africa" value="africa">Africa
                    <input type="checkbox" name="asia" value="asia">Asia<br>
                    <input type="checkbox" name="oceania" value="oceania">Oceania</p>
                    <br>

                    <input type="submit" value="Submit">
                </form>
                
            </ul>
        </div>

        <br>
        <br>
        <br>

       

        </div>
    </div>
    
        <div class="footer l-box is-center">
            ***** Här kan vi ha lite allmäna länkar till t.ex användaravtal. *****
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

    
    $retrieveAds = filterSearch();
    $ads = $mysqli->query($retrieveAds);
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
        echo "<p class='feedTitle'>" . $row['title'] . "</p>";
        echo "<p class='feedUser'>Posted by: " . $row['username'] . "</p>";
        echo "<div style='clear: both;'></div>";
        echo "</div>";
        echo "<hr>";
        echo "<p class='feed'>" . $row['msg'] . "</p>";
        echo "<p class='feed'>My current skillevel: " . $skillevel . "</p>";
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
    
    $filterSearch = "SELECT * FROM ads ORDER BY adID DESC";

    $skill = '';
    
    if (isset($_POST['skill_Newbie'])) {
        $skill .= "'" . $_POST['skill_Newbie'] . "', ";
    }
    if (isset($_POST['skill_Casual'])) {
        $skill .= "'" . $_POST['skill_Casual'] . "', ";
    }
    if (isset($_POST['skill_Semipro'])) {
        $skill .= "'" . $_POST['skill_Semipro'] . "', ";
    }
    if (isset($_POST['skill_Hardcore'])) {
        $skill .= "'" . $_POST['skill_Hardcore'] . "', ";
    }
    $trimSkill = substr($skill, 0, -2);                 

    if (isset($_POST['skill_Newbie']) || isset($_POST['skill_Casual']) || isset($_POST['skill_Semipro']) || isset($_POST['skill_Hardcore'])) {
        $filterSearch = "SELECT * FROM ads WHERE skill in ($trimSkill) ORDER BY adID DESC";
    } else {
        $filterSearch = "SELECT * FROM ads ORDER BY adID DESC";
    }
    return $filterSearch;
    
    $mysqli->close();
}   
?>



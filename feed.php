


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

        <div id="spacer"></div>

    </header>

    <body>

	 <div class="pure-g">
			
	   <div class="feed pure-u-1 pure-u-sm-3-4">
			
		<!--Feed-->	
            <h2>Ads</h2>
       
                <section class="post">

                    <header class="post-header">
                    
                        <?php
                        showPosts();
                    ?>
                        
                    </header>
                        
                </section>
		</div>
				
        <div class="sidebar pure-u-1 pure-u-sm-1-4">
            
            <?php
            session_start();
            echo "<p class='loggedIn'>Logged in as " . $_SESSION['user'] . "</p>";
            ?>
            
            <a href="adForm.php" class="create">Create ad</a>
            <br>
            <br>

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
                <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
                    <a href="#" id="menuLink1" class="pure-menu-link">Play type</a>
                    
                    <ul class="pure-menu-children">
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Newbie</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Casual</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Semi-pro</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Hardcore</a></li>
                    </ul>

                </li>
            </ul>
        </div>

        <br>
        <br>
        <br>

        <!--Region-->

        <div class="pure-menu pure-menu-horizontal">
            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
                    <a href="#" id="menuLink1" class="pure-menu-link">Region</a>

                    <ul class="pure-menu-children">
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">North America</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Central America</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">South America</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Europe</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Africa</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Asia</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-links">Oceania</a></li>
                    </ul>

                </li>
            </ul>
         </div>

        </div>
    </div>
    
        <div class="footer l-box">
            <div class="pure-menu pure-menu-horizontal">
            
            <ul class="pure-menu-list">
                 <li class="pure-menu-item"><a href="FAQ.html" class="pure-menu-link">FAQ</a></li>
                <li class="pure-menu-item"><a href="contactUs.html" class="pure-menu-link">CONTACT US</a></li>
            </ul>
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

                        $retrieveAds = "SELECT * FROM ads ORDER BY adID DESC";
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




?>



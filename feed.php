


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

                    <li class="pure-menu-item" ><a href="profilePage.php" class="pure-menu-link">My Profile</a> "Användarnamn"</li>
               
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
                    ?>
                    </header>
                        
                </section>
		</div>
				
        <div class="sidebar pure-u-1 pure-u-sm-1-4">

            <a href="adForm.php" class="create">Create ad</a>
            <br>
            <br>

	   <br>
       <br>
       <!--Search box-->
     <form>
  <input type="text" name="search">
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
                    <div class="footer">
                
                <div class="foot pure-menu pure-menu-horizontal pure-u-1-2">

                    <ul>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">FAQ</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link"> TEST</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link"> TEST</a></li>
                    </ul>

                </div>
	</body>

</html>

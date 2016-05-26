


<html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="index.css">
        
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
                                        
                        <div class="post-description">
                            <div class="picture" >
                                <div class="user">Oskar</div>
                                <img src="http://ichef.bbci.co.uk/news/660/cpsprodpb/025B/production/_85730600_monkey2.jpg">
                            </div>
                            <div class="rubrik" id="tid">
                                Spela med mig!      -skriv ut tid och datum t.v.-
                            </div>
                            <hr>
                            Hej, Jag heter Oskar och är en kille på 15 jordsnurr och som bor i Malmö. <br>
                            Mitt favoritspel är WoW och jag söker en person som gillar att springa omkring med roliga gubbar. <br>
                            Du ska helst vara en aktiv spelare som bara är ute etfer att ha roligt.
                        </div>
                        
                        <div class="post-description">
                            <div class="rubrik">
                                Filosofen      -skriv ut tid och datum t.v.-
                            </div>
                            <hr>
                            Att vara eller inte vara, det är frågan...
                        </div>
                        <div class="post-description">
                            <div class="rubrik">
                                Tagga!      -skriv ut tid och datum t.v.-
                            </div>
                            <hr>
                            Vi ska bada nakna på Sergelstorg och leva livet utan sorg! Woho! :D
                        </div>
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
     <form id="searchform"  action="search.php" method="post" >
        <input type="text" name="game" placeholder="Search for games..">
        <input type="submit" name="submit" value="Search">
    </form>


       <!--Play type-->

        <div class="dropdown pure-menu pure-menu-horizontal" id="SearchDown">
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

                    <ul class ="color"> 
                        <li class=" pure-menu-item"><a href="#" class="pure-menu-link">FAQ</a></li>
                        <li class=" pure-menu-item"><a href="#" class="pure-menu-link"> Contact us</a></li>
                    </ul>

                </div>
	</body>

    <?php include 'search.php'

    ?>

</html>


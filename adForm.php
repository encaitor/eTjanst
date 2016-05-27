<!doctype HTML>
<html>
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

        <link rel="stylesheet" href="css/formStyles.css">

        <title>Create Ad</title>
    </head>    
        
    <body>
        <?php
            session_start();
			if(!isset($_SESSION['user'])){
				header("Location: index.html");
			}
		?>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><img src="assets/img/Controller-52.png"></a>
                
                <ul class="pure-menu-list">
                    <li class="pure-menu-item" ><a href="index.html" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="feed.php" class="pure-menu-link">Ads</a></li>
                    <li class="pure-menu-item"><a href="adForm.php" class="pure-menu-link">Create Ad</a></li>
                    <li class="pure-menu-item"><a href="profilePage.php" class="pure-menu-link">My Profile</a></li>
                    <li class="pure-menu-item"><a id="" href="logout.php" class="pure-menu-link ">Log Out</a></li>
                </ul>
            </div>
        </div>
        
        <div clas="banner">
            <h1 class="banner-head">Create Ad</h1>
        </div>
        
        
        
        <div class="l-content">
            <div class="games-table pure-g">
                    <div class="side-box pure-u-1 pure-u-md-1-6">
                         
                    </div>
                    
                    <div class="info-box pure-u-1 pure-u-md-16-24">
                        <div class="adForm">
                            <form class="pure-form" method="POST" action="createAd.php">
                                <label for= "title">Title</label><br>
                                <input id="title" class="pure-input-1-2" name="title" type="text" placeholder="Title"><br>
                                <br>
                                <label for="message">Message</label>
                                <textarea id="message" class="pure-input-1" name="message" placeholder="Message"></textarea>
                                <br>
                                <label for="game">Game</label>
                                <select id="game" name="game">
                                    <option>DOTA 2</option>
                                    <option>League of Legends</option>
                                    <option>Team Fortress 2</option>
                                    <option>CS-GO</option>
                                    <option>World of Warcraft</option>
                                    <option>Diablo 3</option>
                                    <option>Minecraft</option>
                                    <option>Starcraft 2</option>
                                </select>
                                <label for="my-play-type-option-one" class="pure-radio"> My play type </label>
                                    <input id="my-play-type-option-one" type="radio" name="optionsPlaytype" value="newbie">
                                    Newbie
                                    <input id="my-play-type-option-two" type="radio" name="optionsPlaytype" value="casual">
                                    Casual
                                    <input id="my-play-type-option-three" type="radio" name="optionsPlaytype" value="semipro">
                                    Semi-pro
                                    <input id="my-play-type-option-four" type="radio" name="optionsPlaytype" value="hardcore">
                                    Hardcore
                                <label for="other-play-type-option-one" class="pure-checkbox"> Looking for play type </label>
                                    <input id="other-play-type-option-one" type="checkbox" name="LF_Newbie" value="">
                                    Newbie
                                    <input id="other-play-type-option-two" type="checkbox" name="LF_Casual" value="">
                                    Casual
                                    <input id="other-play-type-option-three" type="checkbox" name="LF_Semipro" value="">
                                    Semi-pro
                                    <input id="other-play-type-option-four" type="checkbox" name="LF_Hardcore" value="">
                                    Hardcore
                                <label for="play-time-option-one" class="pure-checkbox"> I usually play </label>
                                    <input id="play-time-option-one" type="checkbox" name="" value="">
                                    Weekends
                                    <input id="play-time-option-two" type="checkbox" name="" value="">
                                    Weekdays
                                    <input id="play-time-option-three" type="checkbox" name="" value="">
                                    Morning
                                    <input id="play-time-option-four" type="checkbox" name="" value="">
                                    Afternoon
                                    <input id="play-time-option-four" type="checkbox" name="" value="">
                                    Evening
                                    <input id="play-time-option-four" type="checkbox" name="" value="">
                                    Nights
                                <br>
                                <label for="region">Region</label>
                                <select id="region" name="region">
                                    <option value="North America">North America</option>
                                    <option value="South America">South America</option>
                                    <option value="Europe">Europe</option>
                                    <option value="Africa">Africa</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Oceania">Oceania</option>
                                </select><br>
                                <label for="option-one" class="pure-checkbox"> Languages </label>
                                    <input id="option-one" type="checkbox" name="lang_eng" value="">
                                    English
                                    <input id="option-two" type="checkbox" name="lang_chi" value="">
                                    Mandarin
                                    <input id="option-three" type="checkbox" lang="lang_spa" value="">
                                    Spanish
                                    <input id="option-four" type="checkbox" name="lang_ara" value="">
                                    Arabic
                                <p><input id="otherLanguages" class="pure-input-1-2" type="text" name="otherLanguages" placeholder="Other languages"></p>
                                <br>
                                <button class="pure-button">Publish Ad</button>
                            </form>
                        </div>
                    </div>
                
                    
                    
                    
                    <div class="side-box pure-u-1 pure-u-md-1-6">
                        
                    </div>
            </div>
        </div>
        
        <div class="footer l-box is-center">
            <div class="pure-menu pure-menu-horizontal">
            <a href="FAQ.html" class="pure-menu-heading pure-menu-link">FAQ</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="contactUs.html" class="pure-menu-link">CONTACT US</a></li>
            </ul>
            </div>
        </div>
        
        
    </body>
    
    
    




</html>

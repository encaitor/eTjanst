<!doctype HTML>
<html>
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

        <link rel="stylesheet" href="css/formStyles.css">

        <title>Game ads</title>
    </head>    
        
    <body>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><img src="assets/img/Controller-52.png"></a>
                
                <ul class="pure-menu-list">
                    <li class="pure-menu-item" ><a href="index.html" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="gamesPage.html" class="pure-menu-link">Ads</a></li>
                    <li class="pure-menu-item"><a href="adForm.php" class="pure-menu-link">Create Ad</a></li>
                    <li class="pure-menu-item"><a href="profilePage.php" class="pure-menu-link">My Profile</a></li>
                    <li class="pure-menu-item"><a id="" href="logout.php" class="pure-menu-link ">Log Out</a></li>
                </ul>
            </div>
        </div>
        
        <div clas="banner">
            <h1 class="banner-head"> Games Library</h1>
        </div>
        
        
        
        <div class="l-content">
            <div class="games-table pure-g">
                    <div class="side-box pure-u-1 pure-u-md-1-6">

                    </div>
                    
                    <div class="info-box pure-u-1 pure-u-md-16-24">
                        <div class="accountSettings">
                            <?php
					           session_start();
					           if(!isset($_SESSION['user'])){
						          header("Location: index.html");
					           }
					           echo "<p> You are logged in as " . $_SESSION['user'] . "!</p>";
				            ?>
                            <h2>Your user information.</h2>
                            <div class="basicInfo pure-u-1 pure-u-md-2-5">
                                <form class="pure-form pure-form-stacked" method="POST" action="changePassword.php">
                                    <fieldset>
                                        <label for="name">Name</label>
                                        <input id="name" type="text" placeholder="Sebastian" class="pure-input-1" readonly>

                                        <label for="email">Email</label>
                                        <input id="email" type="email" placeholder="Email" class="pure-input-1" readonly>

                                        <label for="password">Password</label>
                                        <input id="newPassword" type="password" name="newPassword" placeholder="New Password" class="pure-input-1">
                                        <input id="verifyPassword" type="password" name="verifyPassword" placeholder="Verify Password" class="pure-input-1">
                                        <label for="verifypassword">Enter your old password to confirm changes.</label>
                                        <input id="oldPassword" type="password" name="oldPassword" placeholder="Password" class="pure-input-1">
                                    </fieldset>
                                    <p><button class="pure-button">Save new password</button></p>
                                </form>
                            
                            </div>
                            
                            <div class="picture pure-u-1 pure-u-md-1-2">
                                <form action="uploadimage.php" enctype="multipart/form-data" class="pure-form pure-form-stacked" method="POST">
                                    <fieldset>
                                        <label for="userfile">Select Picture to Upload</label>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                        <input type="file" name="userfile" id="pictureUpload"/>
                                        
                                        <output id="uploadedPicture">
                                            <div class="picturePreview pure-u-1" id="picturePreview"></div>
                                        </output>
                                        <p><input type="submit" value="Upload picture"/></p>
                                    </fieldset>
                                </form>
                            </div>
                            
                            <div class="generalInfo pure-u-1">
                                <form name="bioForm" class="pure-form pure-form-stacked" method="POST" action="saveAccountInfo.php">
                                    <fieldset>
                                        <label for="bio">Bio</label>
                                        <textarea id="bio" name="bio" placeholder="Please write something about yourself here!" class="pure-input-2-3"><?php
                                            $username = $_SESSION['user'];
                                            getUserBio($username);
                                        ?></textarea>

                                        <br>
                                        <label for="time">Usual gamingtimes</label>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="weekends" class="pure-checkbox">
                                                <input id="weekends" name="weekends" type="checkbox" 
                                                value="" 
                                                       <?php
                                                       
                                                       $weekend = "weekends";
                                                       if(getUserPlaytimes($username,$weekend) === 'yes')
                                                       {
                                                       echo 'checked';
                                                       }

                                                       ?>
                                                       
                                                       >
                                                Weekends
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="weekdays"  class="pure-checkbox">
                                                <input id="weekdays"  name="weekdays" type="checkbox" value=""
                                                       <?php
                                                       
                                                       $weekday = "weekdays";
                                                       if(getUserPlaytimes($username,$weekday) === 'yes')
                                                       {
                                                       echo 'checked';
                                                       }
                                                       ?>
                                                       
                                                       >
                                                Weekdays
                                            </label>
                                        </div>
                                        <br>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="morning" class="pure-checkbox">
                                                <input id="morning" name="morning" type="checkbox" value="" 
                                                       
                                                       <?php
                                                       
                                                       $morning = "morning";
                                                       if(getUserPlaytimes($username,$morning) === 'yes')
                                                       {
                                                       echo 'checked';
                                                       }

                                                       ?>
                                                       >
                                                Morning
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="afternoon" class="pure-checkbox">
                                                <input id="afternoon" name="afternoon" type="checkbox" value=""
                                                       
                                                       <?php
                                                       
                                                       $afternoon = "afternoon";
                                                       if(getUserPlaytimes($username,$afternoon) === 'yes')
                                                       {
                                                       echo 'checked';
                                                       }
                                                       ?>
                                                       
                                                       >
                                                Afternoon
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="evenings" class="pure-checkbox">
                                                <input id="evenings" name="evenings" type="checkbox" value=""
                                                       
                                                       <?php
                                                       $evenings = "evenings";
                                                       if(getUserPlaytimes($username,$evenings) === 'yes')
                                                       {
                                                       echo 'checked';
                                                       }
                                                       ?>
                                                       >
                                                Evenings
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="nights" class="pure-checkbox">
                                                <input id="nights" name="nights" type="checkbox" value=""
                                                       
                                                       <?php
                                                       $nights = "nights";
                                                       if(getUserPlaytimes($username,$nights) === 'yes')
                                                       {
                                                       echo 'checked';
                                                       }
                                                       ?>
                                                       >
                                                Nights
                                            </label>
                                        </div>
                                    </fieldset>
                                    <p><button class="pure-button">Save user information</button></p>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="side-box pure-u-1 pure-u-md-1-6">

                    </div>
            </div>
        </div>
        
        <div class="footer l-box is-center">
            ***** Här kan vi ha lite allmäna länkar till t.ex användaravtal. *****
        </div>
        <script src="assets/js/uploadPicture.js"></script>
    </body>
</html>

<?php
                                   
function getUserBio($username){
    
    
    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
                                    
    $sql =  "SELECT bio FROM bio WHERE username = '$username'";
    $sth =  $mysqli->query($sql);
    $result = mysqli_fetch_array($sth);
    
        if(mysqli_num_rows($sth) == 0)
        {
            echo 'This is a user without a story...';
        }
        else
        {
            echo $result['bio'];
        }
    }

function getUserPlaytimes($username,$time){
    
    $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
    
    $sql = "SELECT $time FROM bio WHERE username = '$username'";
    $sth = $mysqli->query($sql);
    $result = mysqli_fetch_array($sth);
    
    return $result[$time];
}
?>




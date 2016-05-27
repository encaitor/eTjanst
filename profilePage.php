<?php
    session_start();
    $username = $_SESSION['user'];

?>


<!doctype HTML>
<html>
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A layout example that shows off a responsive product landing page.">

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

        <link rel="stylesheet" href="css/formStyles.css">

        <title>Profile</title>
    </head>    
        
    <body>
        <div class="header">
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
        
        <div clas="banner">
            <h1 class="banner-head"> Profile</h1>
        </div>
        
        
        
        <div class="l-content">
            <div class="games-table pure-g">
                    <div class="side-box pure-u-1 pure-u-md-1-6">

                    </div>
                    
                    <div class="info-box pure-u-1 pure-u-md-16-24">
                        <div class="pofilePage">
                            <p><?php echo 'Welcome: ' . $username ?></p>
                            <form class="pure-form pure-form-stacked">
                                <fieldset> 
                                    <legend></legend>
                                    <div class="pictureBox">
                                        
                                         <?php
                                /* --- KOD FÖR HÄMTNING AV BILDER. --- */ 
                                
        
                                 function displayImage(){

                                        $username = $_SESSION['user'];

                                        $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
                                        $imgRequest = "2";
                                        $sql =  "SELECT * FROM user_images WHERE username = '$username'";
                                        $sth =  $mysqli->query($sql);

                                        $result = mysqli_fetch_array($sth);

                                        echo '<img height="300" width="250" src="data:image/jpeg;base64,'.base64_encode( $result['content'] ).'"/>';

                                    }
                                    displayImage();

                                ?>
                                    </div>
                                    
                                    <label for="bio">Bio</label>
                                    <textarea id="bio" class="pure-input-2-3" readonly><?php
                                        getUserBio($username);
                                        ?></textarea>
                                    
                                    <br>
                                    <label for="time">Usual gamingtimes:</label>
                                    
                                    <table class="pure-table">
                                        <thead>
                                            <tr>
                                            <th>Weekends</th>
                                            <th>Weekdays</th>
                                            <th>Mornings</th>
                                            <th>Afternoon</th>
                                            <th>Evenings</th>
                                            <th>night</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>
                                            <?php
                                                $weekend = "weekends";
                                                echo getUserPlaytimes($username,$weekend);      
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                $weekday = "Weekdays";
                                                echo getUserPlaytimes($username,$weekday);
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                $morning = "morning";
                                                echo getUserPlaytimes($username,$morning);
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                $afternoon = "Afternoon";
                                                echo getUserPlaytimes($username,$afternoon);
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                $evening = "Evenings";
                                                echo getUserPlaytimes($username,$evening);
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                $night = "nights";
                                                echo getUserPlaytimes($username,$night);
                                            ?>
                                            </td>
                                        </tbody>
                                    
                                    
                                    </table>
                                    
                                    <br>
                                    <a class="pure-button" href="account.php">Edit profile</a>
                                </fieldset>
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




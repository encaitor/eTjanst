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
                    <li class="pure-menu-item" ><a href="start.html" class="pure-menu-link">Home</a></li>
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
                            <p>You are logged in as ________________.</p>
                            <h2>Your user information.</h2>
                            <div class="basicInfo pure-u-1 pure-u-md-2-5">
                                <form class="pure-form pure-form-stacked">
                                    <fieldset>
                                        <label for="name">Name</label>
                                        <input id="name" type="text" placeholder="Sebastian" class="pure-input-1" readonly>

                                        <label for="email">Email</label>
                                        <input id="email" type="email" placeholder="Email" class="pure-input-1" readonly>

                                        <label for="password">Password</label>
                                        <input id="password" type="password" placeholder="Change Password" class="pure-input-1">
                                    </fieldset>
                                    <p><button class="pure-button">Save new password</button></p>
                                </form>
                            
                            </div>
                            
                            <div class="picture pure-u-1 pure-u-md-1-2">
                                <form class="pure-form pure-form-stacked">
                                    <fieldset>
                                        <label for="pictureUpload">Select Picture to Upload</label>
                                        <input type="file" name="pictureUpload" id="pictureUpload"/>
                                        
                                        <output id="uploadedPicture">
                                            <div class="picturePreview pure-u-1" id="picturePreview"></div>
                                        </output>
                                        <p><input type="submit" value="Upload picture"/></p>
                                    </fieldset>
                                </form>
                            </div>
                            
                            <div class="generalInfo pure-u-1">
                                <form class="pure-form pure-form-stacked">
                                    <fieldset>
                                        <label for="bio">Bio</label>
                                        <textarea id="bio" placeholder="Please write something about yourself here!" class="pure-input-2-3"></textarea>

                                        <br>
                                        <label for="time">Usual gamingtimes</label>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="weekends" class="pure-checkbox">
                                                <input id="weekends" type="checkbox" value="">
                                                Weekends
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="weekdays" class="pure-checkbox">
                                                <input id="weekdays" type="checkbox" value="">
                                                Weekdays
                                            </label>
                                        </div>
                                        <br>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="morning" class="pure-checkbox">
                                                <input id="morning" type="checkbox" value="">
                                                Morning
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="afternoon" class="pure-checkbox">
                                                <input id="afternoon" type="checkbox" value="">
                                                Afternoon
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="evenings" class="pure-checkbox">
                                                <input id="evenings" type="checkbox" value="">
                                                Evenings
                                            </label>
                                        </div>
                                        <div class="pure-u-1 pure-u-md-1-5">
                                            <label for="nights" class="pure-checkbox">
                                                <input id="nights" type="checkbox" value="">
                                                Nights
                                            </label>
                                        </div>

                                        <label for="verifypassword">Enter password to confirm changes.</label>
                                        <input id="confirmPassword" type="password" placeholder="Password" class="pure-input-1-3">
                                        <input id="verifyPassword" type="password" placeholder="Verify Password" class="pure-input-1-3">


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
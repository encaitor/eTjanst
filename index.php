
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    
    <link rel="stylesheet" href="css/index.css">
    
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    
    
    
    <title>GamePortal</title>
</head>

<body>
    <?php
            session_start();
			if(isset($_SESSION['user'])){
				header("Location: feed.php");
			}
    ?>
    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href=""><img src="assets/img/Controller-52.png"></a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="gamesPage.html" class="pure-menu-link">Games</a></li>
                <li class="pure-menu-item"><a href="#register" class="pure-menu-link">Register</a></li>
                <li class="pure-menu-item"><a id="modal_trigger" href="#openModal" class="pure-menu-link ">Log In</a></li>
            </ul>
        </div>
    </div>

    <div class="splash-container">
        <div class="sidebar pure-u-1 pure-u-sm-1-4">
			<div class="sidebar">
				
			</div>
		</div>
        
        <div>
            <div class="splash">
                <h1 class="splash-head">It's Dangerous to play alone. Find your backup</h1>  
            </div>
        </div>
    </div>
    
    <div class="content-wrapper">
        <div class="content">
            <h2 class="content-head is-center">A reliable way to find new teammembers.</h2>
            
            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-3">
                    <h3 class="content-subhead">
                        <i class="fa fa-users"></i>
                        
                        Make new contacts.
                    </h3>
                    <p> 
                        Find new friends from all corners of the earth to play with. Match up with players matching your skillevel and playstyle to create the ultimate and best gaming experiences. Maybe even finding new lifelong gaming buddies.
                    </p>
            
                </div>
                
                <div class="l-box pure-u-1 pure-u-md-1-3">
                   
                    <h3 class="content-subhead">
                         <i class="fa fa-gamepad"></i>
                        Create new memories
                       
                    </h3>
                    <p>
                            Här kan det också stå lite kul saker. men jag vet inte riktigt vad!
                    </p>
                </div>
                
                <div class="l-box pure-u-1 pure-u-md-1-3">
                    <h3 class="content-subhead">
                        <i class="fa fa-rocket"></i>
                        Easy to set up.
                    </h3>
                    <p> 
                        Ett två tre, fanta och rosé! Här kan det stå en massa kul grejer, typ att man kan köpa mattor för halva priset på persiska mattbutiken.
                    </p>
                </div>
            </div>    
        </div> 
        
        
        <div class="ribbon l-box-lrg pure-g">
            <div class="l-box-lrg is-center pure-u-1">
                
                <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id est luctus, sodales orci et, pretium mauris. Ut sem sem, venenatis imperdiet pretium sed, tristique elementum diam. Nulla sit amet nulla neque. Phasellus tincidunt elementum urna vitae iaculis. Praesent ac nunc nulla. Pellentesque gravida tellus eget convallis dignissim. Quisque sit amet felis pellentesque, pharetra arcu eget, fringilla nibh.
                </p>
                <p>
                Nunc vitae venenatis nibh. Mauris dapibus lectus id felis tincidunt, vitae scelerisque tellus iaculis. Suspendisse at ipsum eget est sodales blandit. Duis quam lectus, lacinia eu ipsum non, tempor vehicula ante. Ut sed sodales nisi. Nullam tristique aliquet elit sed hendrerit. Curabitur fringilla, mi ac porttitor blandit, nisl risus bibendum lorem, sit amet molestie nunc leo semper purus.
                </p>
            </div>
        </div>
    
        <div class="content">
            <div class="l-box-lrg pure-u-1-4"></div>
            <div class="l-box-lrg pure-u-1 pure-u-md-1-2">
                <h2 class="content-subhead is-center">Join the fun!</h2>
                
                    <a name="register"></a> 
                    <form name="registerForm" class="pure-form pure-form-stacked" method="POST" action="signUp.php" >
                        
                        <fieldset> 
                            <div id="formBox" class="pure-g">    
                                
                                <div class="pure-u-1-2 ">
                                    <label for="nameInput"> What should we call you?</label>
                                    <input id="nameInput" type="text" name="registerUsername" placeholder="Your callsign" required>

                                    <label for="email"> Email </label>
                                    <input id="emailInput" type="text" name="registerEmail" placeholder="Email" required>
                                </div>
                                
                                <div class="pure-u-1-2 ">
                                    <label for="passwordInput"> Password</label>
                                    <input id="passwordInput" type="password"  name="registerPassword" placeholder="Enter Password" required>

                                    <label>Re-enter Password</label>
                                    <input id="passwordReIn" type="password"  name="validatePassword" placeholder="Enter Password Again" required>
                                </div>
                                    
                                <div id="submitBtn" class="pure-u-1 pure-md-1">
                                    <button type="submit" class="pure-button">Sign Up!</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
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
        
        
        <!--Popup Code-->
        
        <a href="#openModal"></a>
        
        <div id="openModal" class="modalDialog">
            <div id="loginDialog">
                <header class="popupHeader">
                <span class="header_title">Login</span>
                <a href="#"><span class="modalClose"><i class="fa fa-close"></i></span></a>
                </header>
                <section class="popupBody">
                    <div class="user_login">
                        <form name="loginForm" method="POST" action="login.php">
                            <label>E-mail</label>
                            <input name="inputEmail" type="text" />
                            <br />

                            <label>Password</label>
                            <input name="loginPassword" type="password" />
                            <br />

                            <div class="action_btns">
                                <input type="submit" value="Log In" class="btn btn_blue"/>
                                </form>
                            <form name="registerRedirect" action="#register">    
                                <input type="submit"  class="btn btn_red" value="Register">
                            </form>
                            </div>
                    </div>
                </section>
            </div>
        </div>
        
        <!--Error LoginPopUp-->
        <a href="#openErrorModal"></a>
        
        <div id="openErrorModal" class="modalErrorDialog">
            <div id="loginDialog">
                <header class="errorPopupHeader">
                <span class="header_title">Login failed, please try again!</span>
                <a href="#"><span class="modalClose"><i class="fa fa-close"></i></span></a>
                </header>
                <section class="popupBody">
                    <div class="user_login">
                        <form name="loginForm" method="POST" action="login.php">
                            <label>E-mail</label>
                            <input name="inputEmail" type="text" />
                            <br />

                            <label>Password</label>
                            <input name="loginPassword" type="password" />
                            <br />

                            <div class="action_btns">
                                <input type="submit" value="Log In" class="btn btn_blue"/>	
                                <a href="#" class="forgot_password">Forgot password?</a>
                            </div>
                            </form>
                        
                            <form name="registerRedirect" action="#register">    
                                <input type="submit"  class="btn btn_red" value="Register">
                            </form>
                        
                    </div>
                </section>
            </div>
        </div>
        
    </div>
</body>
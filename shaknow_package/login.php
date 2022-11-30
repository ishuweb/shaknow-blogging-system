<!--- LAST UPDATE 24 NOV 22 -->
<!--- COMPLETED --->


<!DOCTYPE html>
<html lang="en">
<head>
    <!--- BASE -->
    <base href="http://127.0.0.1/shaknow_package/"/>

    <!--- JAVASCRIPT -->
    <script defer="true" type="text/javascript" src="script/login.js"></script>
    
    <!--- FAVICON -->
    <link rel="icon" type="image/x-icon" href="favicon/shaknow_favicon.png">

    <!--- FONT AWESOME API -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="style/login/login_desktop.css" media="screen and (min-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/login/login_tablet.css" media="screen and (min-width: 500px) and (max-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/login/login_mobile.css" media="screen and (max-width: 500px)"/>
    
    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> Login | Shaknow </title>

    <!--- GOOGLE FONTS API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@500&family=Hind+Siliguri:wght@500&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@500&family=Hind+Siliguri:wght@500&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@500&family=Arimo&family=Hind+Siliguri:wght@500&family=Kanit:wght@300&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@500&family=Arimo&family=Heebo&family=Hind+Siliguri:wght@500&family=Kanit:wght@300&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;500&family=Arimo&family=Heebo&family=Hind+Siliguri:wght@500&family=Kanit:wght@300&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;500&family=Arimo&family=Heebo&family=Hind+Siliguri:wght@500&family=Kanit:wght@300&family=Montserrat:wght@600&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;500&family=Arimo&family=Heebo&family=Hind+Siliguri:wght@500&family=Inter&family=Kanit:wght@300&family=Montserrat:wght@600&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@500&family=Arimo&family=Hind+Siliguri:wght@500&family=Oswald:wght@500&family=Patrick+Hand&family=Roboto&family=Secular+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body onload="loader()" onload="scrollfunonload()">


<!--- loading image -->
<div id="loader_box">
    <img src="loading/loader.svg" class="loader_img"/>
</div>




<!---- DESKTOP DIVISION -->
<div id="desktop">

<!--- top blue strip box -->
<div class="topbox">

    <!--- nav list -->
    <ul class="nav_list">
        <a href="about.html" class="nav_link">
            <li class="listitem"> About </li>
        </a>
        <a href="privacy_policy.html" class="nav_link">
            <li class="listitem"> Privacy Policy </li>
        </a>
        <a href="cookies.html" class="nav_link">
            <li class="listitem"> Cookies </li>
        </a>
        <a href="publish_policy.html" class="nav_link">
            <li class="listitem"> Publish Policy </li>
        </a>
        <a href="contact.php" class="nav_link">
            <li class="listitem"> Contact </li>
        </a>
        <a href="https://www.facebook.com/shaknow" class="nav_link">
            <li class="listitem"> Follow </li>
        </a>
    </ul>
                
    <!--- signup button -->
    <button onclick="window.location.href='signup.html';" class="signup-button"> Create New Account </buttton>
</div>

<!--- This box has logo img, logo text and login form -->
<div class="banner">

    <!--- #1 logo box -->
    <div class="banner_img_overflow"></div>
    <div class="logo_box_desktop">
        <a href="https://shaknow.com/" class="logo_link_desktop">
            <img src="graphics/logo.png" class="logo_image_desktop">
            <p class="logo_text_desktop"> Shaknow.com </p>
        </a>
    </div>	

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">
    
    <!--- #3 login form box -->
    <div class="login_box">
        <form action="response/login.php" method="POST">
            <p class="login_tag"> Contribute to the Knowledge. Login with the Email or Username. </p>

                <div class="user_icon_container">
                    <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
                </div>

                <input id="01" type="text" class="login_email_in" name="f_email_username" required/>
                <label for="01" class="label-1"> Email or Username </label>

                <div class="password_icon_container">
                    <i class="fa fa-envelope" style="color:grey; font-size:18px; position: absolute;""></i>
                </div>

                <input id="02" type="password" class="login_password_in" required/>
                <label for="02" class="label-2"> Password </label>

                <div class="sign_with_facebook">
                    <img src="graphics/facebook-logo.png" class="facebook_login_api_img"/>
                    <p class="facebook_login_api_text">
                        <a href="google_login_api" class="login_api_link">
                            Continue with Facebook
                        </a>
                    </p>
                </div>

                <div class="sign_with_google">
                    <img src="graphics/google-logo.png" class="google_login_api_img"/>
                    <p class="google_login_api_text">
                        <a href="google_login_api" class="login_api_link">
                        Continue with Google
                        </a>
                    </p>
                </div>

                <div class="sign_with_apple">
                    <img src="graphics/apple-logo.png" class="apple_login_api_img"/>
                    <p class="apple_login_api_text">
                        <a href="google_login_api" class="login_api_link">
                        Continue with Apple
                        </a>
                    </p>
                </div>
                <a href="reset-password.html" class="forgot_login_password"> Forgot Password?</a>
                <button id="login_submit_button" value="submited" name="f_login_submit"> Login </button>
        </form>
                    
        <p class="agreement_text"> 
            By signing In, you agree to our  
            <a class="agreement_link" href="privacy_policy.html">
                <u> Privacy Policy</u>
            </a> and 
            <a class="agreement_link" href="cookies.html">
                <u> Cookies Policy</u>. 
            </a>
        </p>
    </div> <!--- login form box end -->
</div>  <!--- Banner box end -->



<!--- Include footer script --->
<?php
require "common/desktop-footer.php";
?>


</div>
<!--- DESKTOP DIVISION END -->










<!--- TABLET DIVISION START -->
<div id="tablet">

<!-- Blue strip and nav will be include here  -->
<?php
require "common/tablet-nav.php";
?>



<div class="banner">

    <!--- #1 logo box -->
    <div class="banner_img_overflow"></div>
    <div class="logo_box">
        <a href="https://shaknow.com/" class="logo_link">
            <img src="graphics/logo.png" class="logo_image">
            <p class="logo_text"> Shaknow.com </p>
        </a>
    </div>	

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">
    
    <!--- #3 login form box -->
    <div class="login_box">
        <form action="response/login.php" method="POST">
            <p class="login_tag"> Contribute to the Knowledge. Login with the Email or Username. </p>

                <div class="user_icon_container">
                    <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
                </div>

                <input id="01" type="text" class="login_email_in" name="f_email_username" required/>
                <label for="01" class="label-1"> Email or Username </label>

                <div class="password_icon_container">
                    <i class="fa fa-envelope" style="color:grey; font-size:18px; position: absolute;""></i>
                </div>

                <input id="02" type="password" class="login_password_in" required/>
                <label for="02" class="label-2"> Password </label>

                <div class="sign_with_facebook">
                    <img src="graphics/facebook-logo.png" class="facebook_login_api_img"/>
                    <p class="facebook_login_api_text">
                        <a href="google_login_api" class="login_api_link">
                            Continue with Facebook
                        </a>
                    </p>
                </div>

                <div class="sign_with_google">
                    <img src="graphics/google-logo.png" class="google_login_api_img"/>
                    <p class="google_login_api_text">
                        <a href="google_login_api" class="login_api_link">
                             Continue with Google
                        </a>
                    </p>
                </div>

                <div class="sign_with_apple">
                    <img src="graphics/apple-logo.png" class="apple_login_api_img"/>
                    <p class="apple_login_api_text">
                        <a href="google_login_api" class="login_api_link">
                             Continue with Apple
                        </a>
                    </p>
                </div>
                <a href="reset-password.html" class="forgot_login_password"> Forgot Password?</a>
                <button id="login_submit_button" value="submited" name="f_login_submit"> Login </button>
        </form>
                    
        <p class="agreement_text"> 
            By signing In, you agree to our  
            <a class="agreement_link" href="privacy_policy.html">
                <u> Privacy Policy</u>
            </a> and 
            <a class="agreement_link" href="cookies.html">
                <u> Cookies Policy</u>. 
            </a>
        </p>
    </div>
</div>

<!-- Include the tablet footer -->
<?php
require "common/tablet-footer.php";
?>

<!--- TABLET DIVISION ENDS --->
</div>








<!--- MOBILE DIVISION START -->
<div id="mobile">


<?php
require "common/mobile-nav.php";
?>

    
<div class="banner">
    
    <!--- #1 banner overflow -->
    <div class="banner_img_overflow"></div>

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img"/>
    
    <!--- #3 banner text -->
    <p class="login_tag"> Contribute to the Knowledge. Login with the Email or Username </p>
    
    <!--- #4 login form box -->
    <div class="login_box">
        <form action="response/login.php" method="POST">

            <div class="user_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
    
            <input id="01" type="text" class="login_email_in" name="f_email_username" required/>
            <label for="01" class="label-1"> Email or Username </label>
    
            <div class="password_icon_container">
                <i class="fa fa-envelope" style="color:grey; font-size:18px; position: absolute;""></i>
            </div>
    
            <input id="02" type="password" class="login_password_in" required/>
            <label for="02" class="label-2"> Password </label>
    
            <div class="sign_with_facebook">
                <img src="graphics/facebook-logo.png" class="facebook_login_api_img"/>
                <p class="facebook_login_api_text">
                    <a href="google_login_api" class="login_api_link">
                        Continue with Facebook
                    </a>
                </p>
            </div>
    
            <div class="sign_with_google">
                <img src="graphics/google-logo.png" class="google_login_api_img"/>
                <p class="google_login_api_text">
                    <a href="google_login_api" class="login_api_link">
                        Continue with Google
                    </a>
                </p>
            </div>
    
            <div class="sign_with_apple">
                <img src="graphics/apple-logo.png" class="apple_login_api_img"/>
                <p class="apple_login_api_text">
                    <a href="google_login_api" class="login_api_link">
                        Continue with Apple
                    </a>
                </p>
            </div>
            <a href="reset-password.html" class="forgot_login_password"> Forgot Password?</a>
            <button id="login_submit_button" value="submited" name="f_login_submit"> Login </button>
        </form>
                        
        <p class="agreement_text"> 
            By signing In, you agree to our  
            <a class="agreement_link" href="privacy_policy.html">
                <u> Privacy Policy</u>
            </a> and 
            <a class="agreement_link" href="cookies.html">
                <u> Cookies Policy</u>. 
            </a>
        </p>
    </div> <!--- login form box end -->
</div><!--- Banner box -->
    

<!-- Include footer -->
<?php
require "common/mobile-footer.php";
?>



</div>
<!--- MOBILE DIVISION ENDS --->

</body>
</html>









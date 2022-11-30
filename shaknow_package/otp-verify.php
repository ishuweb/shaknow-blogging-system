<!--- LAST UPDATE 24 NOV 22 -->
<!--- COMPLETED --->

<!DOCTYPE html>
<html lang="en">
<head>
    <!--- BASE -->
    <base href="http://127.0.0.1/shaknow_package/"/>

    <!--- JAVASCRIPT -->
    <script defer="true" type="text/javascript" src="script/otpv.js"></script>
    
    <!--- FAVICON -->
    <link rel="icon" type="image/x-icon" href="favicon/shaknow_favicon.png">

    <!--- FONT AWESOME API -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="style/otpv/otpv_desktop.css" media="screen and (min-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/otpv/otpv_tablet.css" media="screen and (min-width: 500px) and (max-width:1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/otpv/otpv_mobile.css" media="screen and (max-width: 500px)"/>
    
    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> OTP Verify | Shaknow </title>

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
<div id="desktop_divison">
    
<!--- top blue strip box -->
<div class="topbox">

    <!--- nav list for only desktop -->
    <ul class="nav_list">
        <a href="about.php" class="nav_link">
            <li class="list_item"> About </li>
        </a>
        <a href="privacy_policy.php" class="nav_link">
            <li class="list_item"> Privacy Policy </li>
        </a>
        <a href="cookies.php" class="nav_link">
            <li class="list_item"> Cookies </li>
        </a>
        <a href="publish_policy.php" class="nav_link">
            <li class="list_item"> Publish Policy </li>
        </a>
        <a href="contact.php" class="nav_link">
            <li class="list_item"> Contact </li>
        </a>
        <a href="https://www.facebook.com/shaknow" class="nav_link">
            <li class="list_item"> Follow </li>
        </a>
    </ul>
                
    <!--- Login button -->
    <button onclick="window.location.href='login.html';" class="login_button"> Login </buttton>
</div>

<!--- This box has logo img, logo text and login form -->
<div class="banner">

    <!--- #1 logo box -->
    <div onclick="hideNav()" class="banner_img_overflow"></div>
    <div class="logo_box">
        <a href="https://shaknow.com/" class="logo_link">
            <img src="graphics/logo.png" class="logo_image">
            <p class="logo_text"> Shaknow.com </p>
        </a>
    </div>	

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">

    <!--- #3 banner text -->
    <p class="banner_text"> Only One Step Away from Become a Memebr Of Millions Of Independent Publisher's Family... </p>

    <!--- #4 OTP Verification box -->
    <div class="verify_signup_box">
        <img src="graphics/email-logo.png" class="sent_email_image"/>
        <p class="verify_text"> OTP Verification </p>
        <p class="user_signup_name_text"> Suman Lal </p> 
        <p class="signup_email_message">
        <p class="user_email_text"> ishugupta7788@gmail.com </p>

        <form action="response/verify_signup.php" method="post">
            <!--- Input box -->
            <div class="signup_otp_icon_container">
                <i class="fa fa-key" style="color:grey; font-size:18px; position: absolute;""></i>
            </div>
            <input id="labell" type="text" class="signup_otp_in" required/>
            <label for="labell" class="label_signup_otp"> Enter OTP  </label>

            <button type="submit" class="verify_signup_submit_button" value="verified" name="f_verify_signup_submit"> Verify </button>
        </form>
        <p class="resend_text"> Didn't received. resend email</p>
        <p class="submit_agreement_text"> In case of OTP already send, new OTP will be generate after 60 seconds. Please do not refresh the page. </p>
    </div>  <!--- OTP Verification box -->
</div>  <!--- Banner box end -->

<!--- Include footer script --->
<?php
require "common/desktop-footer.php";
?>

</div>
<!--- DESKTOP DIVISION END -->






<!--- TABLET Division START -->
<div id="tablet_division">


<!-- Blue strip and nav will be include here  -->
<?php
require "common/tablet-nav.php";
?>


<!--- This box has logo img, logo text and login form -->
<div class="banner">

    <!--- #1 logo box -->
    <div onclick="hideNav_tab()" class="banner_img_overflow"></div>
    <div class="logo_box_desktop">
        <a href="https://shaknow.com/" class="logo_link">
            <img src="graphics/logo.png" class="logo_image">
            <p class="logo_text"> Shaknow.com </p>
        </a>
    </div>	

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">

    <!--- #3 banner text -->
    <p class="banner_text"> Only One Step Away from Become a Memebr Of Millions Of Independent Publisher's Family... </p>

    <!--- #4 OTP Verification box -->
    <div class="verify_signup_box">
        <img src="graphics/email-logo.png" class="sent_email_image"/>
        <p class="verify_text"> OTP Verification </p>
        <p class="user_signup_name_text"> Sushil Kishan </p> 
        <p class="signup_email_message">
        <p class="user_email_text"> ishugupta7788@gmail.com </p>

    <form action="response/verify_signup.php" method="post">
        <!--- Input box -->
        <div class="signup_otp_icon_container">
            <i class="fa fa-key" style="color:grey; font-size:18px; position: absolute;""></i>
        </div>
        <input id="labell" type="text" class="signup_otp_in" required/>
        <label for="labell" class="label_signup_otp"> Enter OTP  </label>

        <button type="submit" class="verify_signup_submit_button" value="verified" name="f_verify_signup_submit"> Verify </button>
    </form>
        <p class="resend_text"> Didn't received. resend email</p>
        <p class="submit_agreement_text"> In case of OTP already send, new OTP will be generate after 60 seconds. Please do not refresh the page. </p>
    </div>  <!--- OTP Verification box -->
</div>  <!--- Banner box end -->


<!-- Include the tablet footer -->
<?php
require "common/tablet-footer.php";
?>


</div>
<!--- TABLET DIVISION ENDS -->







<!--- MOBILE DIVISON START -->
<div id="mobile_division">

<?php
require "common/mobile-nav.php";
?>


<!--- This box has logo img, logo text and login form -->
<div class="banner">

    <!--- #1 logo box -->
    <div onclick="hideNav_mob()" class="banner_img_overflow"></div>

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">

    <!--- #3 banner text -->
    <p class="signup_verify_tag"> Please Enter the OTP Sent To Your Email Address. </p>
   
    <!--- #4 OTP Verification box -->
    <div class="verify_signup_box">
        <img src="graphics/email-logo.png" class="sent_email_image"/>
        <p class="verify_text"> OTP Verification </p>
        <p class="user_signup_name_text"> Sushil Kishan </p> 
        <p class="signup_email_message">
        <p class="user_email_text"> ishugupta7788@gmail.com </p>

    <form action="response/verify_signup.php" method="post">
        <!--- Input box -->
        <div class="signup_otp_icon_container">
            <i class="fa fa-key" style="color:grey; font-size:18px; position: absolute;""></i>
        </div>
        <input id="labell" type="text" class="signup_otp_in" required/>
        <label for="labell" class="label_signup_otp"> Enter OTP  </label>

        <button type="submit" class="verify_signup_submit_button" value="verified" name="f_verify_signup_submit"> Verify </button>
    </form>
        <p class="resend_text"> Didn't received. resend email</p>
        <p class="submit_agreement_text"> In case of OTP already send, new OTP will be generate after 60 seconds. Please do not refresh the page. </p>
    </div>  <!--- OTP Verification box -->
</div>  <!--- Banner box end -->



<!-- Include footer -->
<?php
require "common/mobile-footer.php";
?>



</div>
<!--- MOBILE DIVISION ENDS -->



</body>
</html>
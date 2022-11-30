<?php
// This is mobile navigation common 
?>

<!--- LAST UPDATE 22 NOV 23 -->

<head>
    <!--- BASE -->
    <base href="http://127.0.0.1/shaknow_package/"/>

    <!--- FAVICON -->
    <link rel="icon" type="image/x-icon" href="favicon/shaknow_favicon.png">

    <!--- FONT AWESOME API -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <!--- JAVASCRIPT -->
    <script defer="true" type="text/javascript" src="script/mobile_nav.js"></script>
    
    <!--- STYLESHEET ---> 
    <link rel="stylesheet" type="text/css" href="style/common/mobile_nav.css"/>

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

<div class="topbox">

    <!--- Top box logo -->
    <img src="graphics/logo.png" class="top_logo_image">

    <!--- nav show button -->
    <div onclick="show()" id="show_nav_icon">
        <i class="fa fa-bars" aria-hidden="true" style="font-size: 25px; color:white;"></i>
    </div>
        
    <!--- nav hide button -->
    <div onclick="hide()" id="hide_nav_icon">
        <i class="fa fa-close" style="color: white; font-size:25px;"></i>
    </div>

    <div id="nav_box_container_mob">
        <!--- nav list  -->
        <div id="nav_inbox_mob">

            <div class="nav_btn_box_mob">

                <!--- Top box logo -->
                <img src="graphics/logo.png" class="nav_logo_image_mob">

                <!--- login button -->
                <button onclick="window.location.href='login.html';" class="login_nav_button"> Login </buttton>
                <!--- SignUp button -->
                <button onclick="window.location.href='signup.html';" class="signup_nav_button"> SignUp </buttton>
            </div>

            <div class="link_box">
                <p class="nav_text"> <a href="about.php" class="nav_link"> About </a> </p>
                <p class="nav_text"> <a href="privacy_policy.php" class="nav_link"> Privacy Policy </a> </p>
                <p class="nav_text"> <a href="publish_policy.php" class="nav_link"> Publish Policy </a> </p>
                <p class="nav_text"> <a href="cookies.php" class="nav_link"> Cookies </a> </p>
                <p class="nav_text"> <a href="contact.php" class="nav_link"> Contact </a> </p>
                <p class="nav_text"> <a href="https://www.facebook.com/shaknow" class="nav_link"> Follow </a> </p>
            </div>

            <div class="ftxt_box">
                <p class="copyright_text"> Copyright &copy 2022. All Right Reserved  </p>
                <p class="updated_text"> Last Updated 22 November 2022 </p>
            </div>
        </div>
    </div>
</div> 


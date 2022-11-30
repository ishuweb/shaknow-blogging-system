<!--- LAST UPDATE 23 NOV 22 -->
<!--- COMPLETED --->

<!DOCTYPE html>
<html lang="en">
<head>
    <!--- BASE -->
    <base href="http://127.0.0.1/shaknow_package/"/>

    <!--- FAVICON -->
    <link rel="icon" type="image/x-icon" href="favicon/shaknow_favicon.png">

    <!--- FONT AWESOME API -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <!--- JAVASCRIPT -->
    <script defer="true" type="text/javascript" src="script/cookies.js"></script>
    
    <!--- STYLESHEET ---> 
    <link rel="stylesheet" type="text/css" href="style/cookies/cookies_desktop.css" media="screen and (min-width: 950px)"/>
    <link rel="stylesheet" type="text/css" href="style/cookies/cookies_tablet.css" media="screen and (min-width: 500px) and (max-width:950px)"/>
    <link rel="stylesheet" type="text/css" href="style/cookies/cookies_mobile.css" media="screen and (max-width: 500px)"/>

    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> Cookies | Shaknow.com </title>

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




<!---- DESKTOP SECTION  --->
<div id="desktop_division">

<!--- TOP BLUE STRIP BOX START -->
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

    <!--- login button -->
    <button onclick="window.location.href='login.php';" class="login-button"> Login </buttton>

    <!--- SignUp button -->
    <button onclick="window.location.href='signup.php';" class="signup-button"> Sign Up </buttton>

<!--- TOP BLUE STRIP BOX END -->
</div> 

<!--- Image for background -->
<div class="bk_box">
    <div class="bk_cover"></div>
    <img src="image/library_banner.jpg" class="bk_img">
</div>

<!--- Box contain logo image and text -->
<div class="logo_box">
    <a href="https://shaknow.com/" class="logo_link">
        <img src="graphics/logo.png" class="logo_image">
        <p class="logo_text"> Shaknow.com </p>
    </a>	
</div>

<!--- Box contain banner -->
<div class="banner_box">
    <img src="graphics/cookies.png" class="banner_image">	
</div>


<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Cookies </p>
        <p class="para_text">
            Cookies are a common tool used online to learn about and respond to user website activities. They are stored on your device's web browser by the websites you visit. Most websites, web applications and mobile applications use cookies to improve your user experience and deliver relevant ads to you.
            Whenever you visit a website, the website sends a cookie to the device you're using to access the website. Your device automatically stores the cookie in a file that's located within your web browser.
            When you revisit a site, the website will respond in a more personalized way, remembering your preferences, providing faster page load times and so forth.
            Cookies have many uses. Membership websites and social media platforms like Facebook and Twitter use cookies to remember login credentials (username and password) so you don't have to enter them manually every time you access the website. 
            Cookies can also be used to display custom advertisements based on your previous search history and web browsing behavior. If you've been browsing the Internet searching for travel mugs, then you'll probably see ads for travel mugs on sites that implement custom banner advertisements.
            When you visit Netflix, for example, and view certain categories or programs, Netflix uses cookies to remember your preferences. When you revisit the site, Netflix will make viewing suggestions based on what you viewed previously.
            <br>    
            <br>  
            A Cookies Policy is used to inform your site's visitors that you're using cookies on your website, web app, or mobile app. It should include information about the types of cookies you're using, how you're using them, and how users can control the way cookies are managed on their devices.
            <br>    
            <br>  
            Although cookies are generally used to improve user experience, they've generated a lot of controversy in recent years as users have become increasingly conscious about their online privacy and security.
            Cookies are a potential privacy risk because they have the ability to track, store and share what an individual is doing when they’re on a website. For this reason, it’s now a legal requirement that websites have to get clear consent from visitors in order to store or retrieve information based on their browsing habits.
            You need to notify your sites visitors that youre using cookies, you must get consent for this and consumers also need to be made aware of how they can opt out if they wish. This applies to any business based in the EU or to those who are targeting their services to EU citizens.
            When GDPR came into force last year, it became even more important that website owners have a cookie policy.
            GDPR gives consumers the right to receive specific, up-to date information which details the data that's registered about them, what its being used for, where it's being sent and what options a user has with regards to accepting or rejecting them.
            As long as you do this the first time you set cookies, you don't have to repeat the process every time the same person visits your website. However, bear in mind that devices may be used by different people so you may want to consider repeating this process at suitable intervals
            <br>    
            <br>  
            Shaknow send and/or use cookies to visitors browser and utilies cookies data after user consent. All data uses under user data privacy and completely safe.  
        </p>
    </div>
</div>


<!--- Include footer script --->
<?php
require "common/desktop-footer.php";
?>

</div>
<!---- DESKTOP SECTION END ---->










<!---- TABLET SECTION  --->
<div id="tablet_division">

<!-- Blue strip and nav will be include here  -->
<?php
require "common/tablet-nav.php";
?>



<!--- Image for background -->
<div class="bk_box">
    <div class="bk_cover"></div>
    <img src="image/library_banner.jpg" class="bk_img">
</div>

<!--- Box contain logo image and text -->
<div class="logo_box">
    <a href="https://shaknow.com/" class="logo_link">
        <img src="graphics/logo.png" class="logo_image">
        <p class="logo_text"> Shaknow.com </p>
    </a>	
</div>

<!--- Box contain banner -->
<div class="banner_box">
    <img src="graphics/cookies.png" class="banner_image">	
</div>


<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Cookies </p>
        <p class="para_text">
            Cookies are a common tool used online to learn about and respond to user website activities. They are stored on your device's web browser by the websites you visit. Most websites, web applications and mobile applications use cookies to improve your user experience and deliver relevant ads to you.
            Whenever you visit a website, the website sends a cookie to the device you're using to access the website. Your device automatically stores the cookie in a file that's located within your web browser.
            When you revisit a site, the website will respond in a more personalized way, remembering your preferences, providing faster page load times and so forth.
            Cookies have many uses. Membership websites and social media platforms like Facebook and Twitter use cookies to remember login credentials (username and password) so you don't have to enter them manually every time you access the website. 
            Cookies can also be used to display custom advertisements based on your previous search history and web browsing behavior. If you've been browsing the Internet searching for travel mugs, then you'll probably see ads for travel mugs on sites that implement custom banner advertisements.
            When you visit Netflix, for example, and view certain categories or programs, Netflix uses cookies to remember your preferences. When you revisit the site, Netflix will make viewing suggestions based on what you viewed previously.
            <br>    
            <br>  
            A Cookies Policy is used to inform your site's visitors that you're using cookies on your website, web app, or mobile app. It should include information about the types of cookies you're using, how you're using them, and how users can control the way cookies are managed on their devices.
            <br>    
            <br>  
            Although cookies are generally used to improve user experience, they've generated a lot of controversy in recent years as users have become increasingly conscious about their online privacy and security.
            Cookies are a potential privacy risk because they have the ability to track, store and share what an individual is doing when they’re on a website. For this reason, it’s now a legal requirement that websites have to get clear consent from visitors in order to store or retrieve information based on their browsing habits.
            You need to notify your sites visitors that youre using cookies, you must get consent for this and consumers also need to be made aware of how they can opt out if they wish. This applies to any business based in the EU or to those who are targeting their services to EU citizens.
            When GDPR came into force last year, it became even more important that website owners have a cookie policy.
            GDPR gives consumers the right to receive specific, up-to date information which details the data that's registered about them, what its being used for, where it's being sent and what options a user has with regards to accepting or rejecting them.
            As long as you do this the first time you set cookies, you don't have to repeat the process every time the same person visits your website. However, bear in mind that devices may be used by different people so you may want to consider repeating this process at suitable intervals
            <br>    
            <br>  
            Shaknow send and/or use cookies to visitors browser and utilies cookies data after user consent. All data uses under user data privacy and completely safe.  
        </p>
    </div>
</div>


<!-- Include the tablet footer -->
<?php
require "common/tablet-footer.php";
?>

</div>
<!---- TABLET SECTION END ---->










<!---- MOBILE SECTION  --->
<div id="mobile_division">

<?php
require "common/mobile-nav.php";
?>



<!--- Image for background -->
<div class="bk_box">
    <div class="bk_cover"></div>
    <img src="image/library_banner.jpg" class="bk_img">
</div>

<!--- Box contain logo image and text -->
<div class="logo_box">
    <a href="https://shaknow.com/" class="logo_link">
        <img src="graphics/logo.png" class="logo_image">
        <p class="logo_text"> Shaknow.com </p>
    </a>	
</div>

<!--- Box contain banner -->
<div class="banner_box">
    <img src="graphics/cookies.png" class="banner_image">	
</div>


<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Cookies </p>
        <p class="para_text">
            Cookies are a common tool used online to learn about and respond to user website activities. They are stored on your device's web browser by the websites you visit. Most websites, web applications and mobile applications use cookies to improve your user experience and deliver relevant ads to you.
            Whenever you visit a website, the website sends a cookie to the device you're using to access the website. Your device automatically stores the cookie in a file that's located within your web browser.
            When you revisit a site, the website will respond in a more personalized way, remembering your preferences, providing faster page load times and so forth.
            Cookies have many uses. Membership websites and social media platforms like Facebook and Twitter use cookies to remember login credentials (username and password) so you don't have to enter them manually every time you access the website. 
            Cookies can also be used to display custom advertisements based on your previous search history and web browsing behavior. If you've been browsing the Internet searching for travel mugs, then you'll probably see ads for travel mugs on sites that implement custom banner advertisements.
            When you visit Netflix, for example, and view certain categories or programs, Netflix uses cookies to remember your preferences. When you revisit the site, Netflix will make viewing suggestions based on what you viewed previously.
            <br>    
            <br>  
            A Cookies Policy is used to inform your site's visitors that you're using cookies on your website, web app, or mobile app. It should include information about the types of cookies you're using, how you're using them, and how users can control the way cookies are managed on their devices.
            <br>    
            <br>  
            Although cookies are generally used to improve user experience, they've generated a lot of controversy in recent years as users have become increasingly conscious about their online privacy and security.
            Cookies are a potential privacy risk because they have the ability to track, store and share what an individual is doing when they’re on a website. For this reason, it’s now a legal requirement that websites have to get clear consent from visitors in order to store or retrieve information based on their browsing habits.
            You need to notify your sites visitors that youre using cookies, you must get consent for this and consumers also need to be made aware of how they can opt out if they wish. This applies to any business based in the EU or to those who are targeting their services to EU citizens.
            When GDPR came into force last year, it became even more important that website owners have a cookie policy.
            GDPR gives consumers the right to receive specific, up-to date information which details the data that's registered about them, what its being used for, where it's being sent and what options a user has with regards to accepting or rejecting them.
            As long as you do this the first time you set cookies, you don't have to repeat the process every time the same person visits your website. However, bear in mind that devices may be used by different people so you may want to consider repeating this process at suitable intervals
            <br>    
            <br>  
            Shaknow send and/or use cookies to visitors browser and utilies cookies data after user consent. All data uses under user data privacy and completely safe.  
        </p>
    </div>
</div>


<!-- Include footer -->
<?php
require "common/mobile-footer.php";
?>


</div>
<!---- MOBILE SECTION END ---->


</body>
</html>
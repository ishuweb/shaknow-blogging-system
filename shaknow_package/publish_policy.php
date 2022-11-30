<!--- LAST UPDATE 23 NOV 22 -->
<!-- COMPLETED -->


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
    <script defer="true" type="text/javascript" src="script/publish_policy.js"></script>
    
    <!--- STYLESHEET ---> 
    <link rel="stylesheet" type="text/css" href="style/publish_policy/publish_policy_desktop.css" media="screen and (min-width: 950px)"/>
    <link rel="stylesheet" type="text/css" href="style/publish_policy/publish_policy_tablet.css" media="screen and (min-width: 500px) and (max-width:950px)"/>
    <link rel="stylesheet" type="text/css" href="style/publish_policy/publish_policy_mobile.css" media="screen and (max-width: 500px)"/>

    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> Publish Policy | Shaknow.com </title>

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

<!--- this image use for top mover button -->
<img  id="top-btn" src="graphics/top-img.png" onclick="topfunc()" class="top_arrow_image"/> 







<!---- DESKTOP SECTION  --->
<div id="desktop_division">

<!--- TOP BLUE STRIP BOX START -->
<div class="top-box">

    <!--- nav list for only desktop -->
    <ul class="nav_list_top">
        <a href="about.php" class="nav_link">
            <li class="list_item_top"> About </li>
        </a>
        <a href="privacy_policy.php" class="nav_link">
            <li class="list_item_top"> Privacy Policy </li>
        </a>
        <a href="cookies.php" class="nav_link">
            <li class="list_item_top"> Cookies </li>
        </a>
        <a href="publish_policy.php" class="nav_link">
            <li class="list_item_top"> Publish Policy </li>
        </a>
        <a href="contact.php" class="nav_link">
            <li class="list_item_top"> Contact </li>
        </a>
        <a href="https://www.facebook.com/shaknow" class="nav_link">
            <li class="list_item_top"> Follow </li>
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
    <img src="graphics/publish.png" class="banner_image">	
</div>



<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Publish Policy </p>
        <p class="para_text">
            In the mission of knowledge revolution, we Shaknow provide a platform to the millions of independent publishers to write their articles and let the information to be grows.
            In the absence of correct and trustable source of informartion and knowledge, our Internet is faceing obstracle to let access best source available for all. On the Shaknow platform
            Millions of publisher write their articles and publish on the Internet to gain momentum of information network. Authenticity and aucracy will be the first priority and responsibility 
            of the shaknow plaform regards its users and visitor who consume the knowledge and information provided by publishers. In every publishment of articles our service always ask the content
            creater to ensure the accuracy and truth of content informartion and its knowledge. Publishing on the shaknow platform is and will be always free but there cannot be compromise with the
            accuracy and authenticity of the content. Shaknow platform always ask its independent publishers to create content that is always meet the social standards.
            <br>    
            <br>  
            The correction and accuracy level of content with complete truth would be the lead source of truth in the shaknow by its readers. Shaknow platform always want its readers trust and always 
            ask its publihser to publish content that is accurate and trustable. No any content that is false classified and does not meet the truth standard will be allowed to publish on the shaknow plartform.
            Whenever a publisher write article and proceed to publish then our system check the keywords of articles passage and check weather is it meet the criteria of safe and true informartion being provided.
            Publishing on the Shaknow is open and available to all but before publish the article live on shaknow, our backend service always analyse the standards of content of passage. Only article having trustable
            content and information that is true and accurate will be allowed to be published and share over the platorm. 
            <br>    
            <br>  
            In the mission to provide accurate, trustable and best knowledge source to all, everyone can join our familty of millions of independent publisher and express their knowledge by publishing articles.
            The publisher need to ensure the Accuracy, Trust, Authenticity and Social Standards of content of article otherwise article that doesn't meet standard will be removed from platform.
            All publisher are required to meet the truth of content standard to publish on the shaknow as per shaknow Publish Policy 2022. Because true and real information and knowledge is the only corollary of the shaknow platform.
            The latest release of shaknow Publish Policy is available on shaknow.com/publish_policy.html only. 
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
    <img src="graphics/publish.png" class="banner_image">	
</div>



<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Publish Policy </p>
        <p class="para_text">
            In the mission of knowledge revolution, we Shaknow provide a platform to the millions of independent publishers to write their articles and let the information to be grows.
            In the absence of correct and trustable source of informartion and knowledge, our Internet is faceing obstracle to let access best source available for all. On the Shaknow platform
            Millions of publisher write their articles and publish on the Internet to gain momentum of information network. Authenticity and aucracy will be the first priority and responsibility 
            of the shaknow plaform regards its users and visitor who consume the knowledge and information provided by publishers. In every publishment of articles our service always ask the content
            creater to ensure the accuracy and truth of content informartion and its knowledge. Publishing on the shaknow platform is and will be always free but there cannot be compromise with the
            accuracy and authenticity of the content. Shaknow platform always ask its independent publishers to create content that is always meet the social standards.
            <br>    
            <br>  
            The correction and accuracy level of content with complete truth would be the lead source of truth in the shaknow by its readers. Shaknow platform always want its readers trust and always 
            ask its publihser to publish content that is accurate and trustable. No any content that is false classified and does not meet the truth standard will be allowed to publish on the shaknow plartform.
            Whenever a publisher write article and proceed to publish then our system check the keywords of articles passage and check weather is it meet the criteria of safe and true informartion being provided.
            Publishing on the Shaknow is open and available to all but before publish the article live on shaknow, our backend service always analyse the standards of content of passage. Only article having trustable
            content and information that is true and accurate will be allowed to be published and share over the platorm. 
            <br>    
            <br>  
            In the mission to provide accurate, trustable and best knowledge source to all, everyone can join our familty of millions of independent publisher and express their knowledge by publishing articles.
            The publisher need to ensure the Accuracy, Trust, Authenticity and Social Standards of content of article otherwise article that doesn't meet standard will be removed from platform.
            All publisher are required to meet the truth of content standard to publish on the shaknow as per shaknow Publish Policy 2022. Because true and real information and knowledge is the only corollary of the shaknow platform.
            The latest release of shaknow Publish Policy is available on shaknow.com/publish_policy.html only. 
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
    <img src="graphics/publish.png" class="banner_image">	
</div>



<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Publish Policy </p>
        <p class="para_text">
            In the mission of knowledge revolution, we Shaknow provide a platform to the millions of independent publishers to write their articles and let the information to be grows.
            In the absence of correct and trustable source of informartion and knowledge, our Internet is faceing obstracle to let access best source available for all. On the Shaknow platform
            Millions of publisher write their articles and publish on the Internet to gain momentum of information network. Authenticity and aucracy will be the first priority and responsibility 
            of the shaknow plaform regards its users and visitor who consume the knowledge and information provided by publishers. In every publishment of articles our service always ask the content
            creater to ensure the accuracy and truth of content informartion and its knowledge. Publishing on the shaknow platform is and will be always free but there cannot be compromise with the
            accuracy and authenticity of the content. Shaknow platform always ask its independent publishers to create content that is always meet the social standards.
            <br>    
            <br>  
            The correction and accuracy level of content with complete truth would be the lead source of truth in the shaknow by its readers. Shaknow platform always want its readers trust and always 
            ask its publihser to publish content that is accurate and trustable. No any content that is false classified and does not meet the truth standard will be allowed to publish on the shaknow plartform.
            Whenever a publisher write article and proceed to publish then our system check the keywords of articles passage and check weather is it meet the criteria of safe and true informartion being provided.
            Publishing on the Shaknow is open and available to all but before publish the article live on shaknow, our backend service always analyse the standards of content of passage. Only article having trustable
            content and information that is true and accurate will be allowed to be published and share over the platorm. 
            <br>    
            <br>  
            In the mission to provide accurate, trustable and best knowledge source to all, everyone can join our familty of millions of independent publisher and express their knowledge by publishing articles.
            The publisher need to ensure the Accuracy, Trust, Authenticity and Social Standards of content of article otherwise article that doesn't meet standard will be removed from platform.
            All publisher are required to meet the truth of content standard to publish on the shaknow as per shaknow Publish Policy 2022. Because true and real information and knowledge is the only corollary of the shaknow platform.
            The latest release of shaknow Publish Policy is available on shaknow.com/publish_policy.html only. 
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
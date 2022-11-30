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
    <script defer="true" type="text/javascript" src="script/about.js"></script>
    
    <!--- STYLESHEET ---> 
    <link rel="stylesheet" type="text/css" href="style/about/about_desktop.css" media="screen and (min-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/about/about_tablet.css" media="screen and (min-width: 500px) and (max-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/about/about_mobile.css" media="screen and (max-width: 500px)"/>

    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> About | Shaknow.com </title>

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






<!--- DESKTOP DIVISION -->
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
    <img src="graphics/team.png" class="banner_image">	
</div>

<!--- Body Box Contain About Page -->
<div class="about_container">
    <div class="about_box">
        <p class="about_heading"> About </p>
        <p class="about_text">
            In which age we are living is called the 'Digital Age' but what does it mean? as digital age.. So Digital Age is time of Internet of open resources and open
            opportunities but still there is obstracle we faces to acheive the best and correct information. Information available on the internet is either incorrect or
            not sufficient today. There is thousands of thousands of open and free resources available but are they not copy-pasted or are the really satified the correction of content
            policies. Are the really authentic information and knowledge that what you can believe as true. Here Shaknow is a mission to provide to platform to the millions of article
            writters and publisher who has the passion to express the every point of information that should be share to the world according to the authenticity and accuracy.
            We are a family of independent border-less trustable information and knowledge publisher who research first and with correct of them knowledge write the article and share 
            that informative article to world. We are the family of passionate publisher who write for the knowledge and who publisher for the world. Shaknow also let the hardwork
            to convert from thinking, authinticating and typing to earning. When reader accept the validity of the articles and voted as authenticate content and read the article
            that publisher also paid by the shaknow platform. A vision of provide best and correct knowledge to the world we are working together to make dream of providing best
            knowledge to the global.
            <br>    
            <br>  
                Be a part of our mission. Internet was thinked as a open network of resources and informations but over the time, information was not achieved the path what it was expected.
            Knowledge has revolution itself. Knowledge can be a equal path to the success. Knowledge provides the way of living, the ways of thinking. Get the correct information and 
            knowledge can be markable prosperity and let us to move farward a step of our dreams. There has been vacant position of information on the web. Sometime information was not
            correct and sometime it was not as expected. By using many research and analysis our publisher from around the world has keen to support the online always free information and
            knowledge database to grow and serve the humanity a best source of knowledge. Our publishers from around the world has make a sharp contribution to the information domain. 
            knowledge was never be accessable to everyone but as far as our efforts has make the knowledge easy. Shaknow family work from all edges of the globe as publisher from Asia, India, Europe, 
            America, Africa, Ocenia and all other lands they support the world's information source.
            <br>    
            <br>  
            SignUp today, publish your article and become a part of our family.
        </p>
    </div>
</div>

<!--- Include footer script --->
<?php
require "common/desktop-footer.php";
?>

</div>
<!--- DESKTOP SECTION END -->









<!--- TABLET SECTION --->
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
    <img src="graphics/team.png" class="banner_image">	
</div>

<!--- Body Box Contain About Page -->
<div class="about_container">
    <div class="about_box">
        <p class="about_heading"> About </p>
        <p class="about_text">
            In which age we are living is called the 'Digital Age' but what does it mean? as digital age.. So Digital Age is time of Internet of open resources and open
            opportunities but still there is obstracle we faces to acheive the best and correct information. Information available on the internet is either incorrect or
            not sufficient today. There is thousands of thousands of open and free resources available but are they not copy-pasted or are the really satified the correction of content
            policies. Are the really authentic information and knowledge that what you can believe as true. Here Shaknow is a mission to provide to platform to the millions of article
            writters and publisher who has the passion to express the every point of information that should be share to the world according to the authenticity and accuracy.
            We are a family of independent border-less trustable information and knowledge publisher who research first and with correct of them knowledge write the article and share 
            that informative article to world. We are the family of passionate publisher who write for the knowledge and who publisher for the world. Shaknow also let the hardwork
            to convert from thinking, authinticating and typing to earning. When reader accept the validity of the articles and voted as authenticate content and read the article
            that publisher also paid by the shaknow platform. A vision of provide best and correct knowledge to the world we are working together to make dream of providing best
            knowledge to the global.
            <br>    
            <br>  
                Be a part of our mission. Internet was thinked as a open network of resources and informations but over the time, information was not achieved the path what it was expected.
            Knowledge has revolution itself. Knowledge can be a equal path to the success. Knowledge provides the way of living, the ways of thinking. Get the correct information and 
            knowledge can be markable prosperity and let us to move farward a step of our dreams. There has been vacant position of information on the web. Sometime information was not
            correct and sometime it was not as expected. By using many research and analysis our publisher from around the world has keen to support the online always free information and
            knowledge database to grow and serve the humanity a best source of knowledge. Our publishers from around the world has make a sharp contribution to the information domain. 
            knowledge was never be accessable to everyone but as far as our efforts has make the knowledge easy. Shaknow family work from all edges of the globe as publisher from Asia, India, Europe, 
            America, Africa, Ocenia and all other lands they support the world's information source.
            <br>    
            <br>  
            SignUp today, publish your article and become a part of our family.
        </p>
    </div>
</div>

<!-- Include the tablet footer -->
<?php
require "common/tablet-footer.php";
?>


</div>
<!--- TABLET SECTION ENDS -->





<!--- MOBILE SECTION --->
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
    <img src="graphics/team.png" class="banner_image">	
</div>

<!--- Body Box Contain About Page -->
<div class="about_container">
    <div class="about_box">
        <p class="about_heading"> About </p>
        <p class="about_text">
            In which age we are living is called the 'Digital Age' but what does it mean? as digital age.. So Digital Age is time of Internet of open resources and open
            opportunities but still there is obstracle we faces to acheive the best and correct information. Information available on the internet is either incorrect or
            not sufficient today. There is thousands of thousands of open and free resources available but are they not copy-pasted or are the really satified the correction of content
            policies. Are the really authentic information and knowledge that what you can believe as true. Here Shaknow is a mission to provide to platform to the millions of article
            writters and publisher who has the passion to express the every point of information that should be share to the world according to the authenticity and accuracy.
            We are a family of independent border-less trustable information and knowledge publisher who research first and with correct of them knowledge write the article and share 
            that informative article to world. We are the family of passionate publisher who write for the knowledge and who publisher for the world. Shaknow also let the hardwork
            to convert from thinking, authinticating and typing to earning. When reader accept the validity of the articles and voted as authenticate content and read the article
            that publisher also paid by the shaknow platform. A vision of provide best and correct knowledge to the world we are working together to make dream of providing best
            knowledge to the global.
            <br>    
            <br>  
                Be a part of our mission. Internet was thinked as a open network of resources and informations but over the time, information was not achieved the path what it was expected.
            Knowledge has revolution itself. Knowledge can be a equal path to the success. Knowledge provides the way of living, the ways of thinking. Get the correct information and 
            knowledge can be markable prosperity and let us to move farward a step of our dreams. There has been vacant position of information on the web. Sometime information was not
            correct and sometime it was not as expected. By using many research and analysis our publisher from around the world has keen to support the online always free information and
            knowledge database to grow and serve the humanity a best source of knowledge. Our publishers from around the world has make a sharp contribution to the information domain. 
            knowledge was never be accessable to everyone but as far as our efforts has make the knowledge easy. Shaknow family work from all edges of the globe as publisher from Asia, India, Europe, 
            America, Africa, Ocenia and all other lands they support the world's information source.
            <br>    
            <br>  
            SignUp today, publish your article and become a part of our family.
        </p>
    </div>
</div>


 <!-- Include footer -->
<?php
require "common/mobile-footer.php";
?>

</div>
<!--- MOBILE SECTION ENDS -->

</body>
</html>
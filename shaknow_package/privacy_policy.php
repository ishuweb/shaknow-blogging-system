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
    <script defer="true" type="text/javascript" src="script/privacy_policy.js"></script>
    
    <!--- STYLESHEET ---> 
    <link rel="stylesheet" type="text/css" href="style/privacy_policy/privacy_policy_desktop.css" media="screen and (min-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/privacy_policy/privacy_policy_tablet.css" media="screen and (min-width: 500px) and (max-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/privacy_policy/privacy_policy_mobile.css" media="screen and (max-width: 500px)"/>

    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> Privacy Policy | Shaknow.com </title>

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
    <img src="graphics/privacy.png" class="banner_image">	
</div>


<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Privacy Policy </p>
        <p class="para_text">
            This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the Website Name website.
            If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
            The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Website URL, unless otherwise defined in this Privacy Policy.
            Information Collection and Use For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.
            Log Data We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer's Internet Protocol (“IP”) address, browser version, pages of our Service that you visit, the time and 
            date of your visit, the time spent on those pages, and other statistics. Cookies Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer's hard drive.
            <br>    
            <br>  
            We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.
            ur Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for 
            the content, privacy policies, or practices of any third-party sites or services.
            <br>    
            <br>  
            We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.
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
    <img src="graphics/privacy.png" class="banner_image">	
</div>

<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Privacy Policy </p>
        <p class="para_text">
            This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the Website Name website.
            If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
            The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Website URL, unless otherwise defined in this Privacy Policy.
            Information Collection and Use For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.
            Log Data We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer's Internet Protocol (“IP”) address, browser version, pages of our Service that you visit, the time and 
            date of your visit, the time spent on those pages, and other statistics. Cookies Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer's hard drive.
            <br>    
            <br>  
            We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.
            ur Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for 
            the content, privacy policies, or practices of any third-party sites or services.
            <br>    
            <br>  
            We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.
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
    <img src="graphics/privacy.png" class="banner_image">	
</div>


<!--- Body Box Contain About Page -->
<div class="para_container">
    <div class="para_box">
        <p class="para_heading"> Privacy Policy </p>
        <p class="para_text">
            This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the Website Name website.
            If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
            The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Website URL, unless otherwise defined in this Privacy Policy.
            Information Collection and Use For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.
            Log Data We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer's Internet Protocol (“IP”) address, browser version, pages of our Service that you visit, the time and 
            date of your visit, the time spent on those pages, and other statistics. Cookies Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer's hard drive.
            <br>    
            <br>  
            We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.
            ur Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for 
            the content, privacy policies, or practices of any third-party sites or services.
            <br>    
            <br>  
            We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.
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
<!--- LAST UPDATE 23 NOV 22 -->
<!-- COMPLETED -->

<?php
// start the session
session_start();

if(isset($_SESSION['message_status'])) {
    if($_SESSION['message_status'] == "sent") {

        echo "<title> Message has been sent </title>";
        
        echo "<script>
        alert('Message has been sent successfully.');
        </script>";

    } 
    unset($_SESSION['message_status']);
}

?>

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
    <script defer="true" type="text/javascript" src="script/contact.js"></script>
    
    <!--- STYLESHEET ---> 
    <link rel="stylesheet" type="text/css" href="style/contact/contact_desktop.css" media="screen and (min-width: 950px)"/>
    <link rel="stylesheet" type="text/css" href="style/contact/contact_tablet.css" media="screen and (min-width: 500px) and (max-width:950px)"/>
    <link rel="stylesheet" type="text/css" href="style/contact/contact_mobile.css" media="screen and (max-width: 500px)"/>

    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> Contact Us | Shaknow.com </title>

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



<!--- Body Box Contain About Page -->
<div class="contact_container">
    <div class="contact_box">
        <img src="graphics/email.png" class="banner_image_1">	
        <p class="contact_heading"> Contact Us </p>
        <p class="contact_text">
            There is no distance between readers and publisher gauranteed by Shaknow.com but geography is a fact.  
            In any concert regards content copyright infragments, publishing assistance please contact Shaknow team.
            <br>  
            <br>
            <b> EMAIL US .: </b> <i> CONTACT@SHAKNOW.COM </i>
        </p>
    </div>
</div>


<div class="contact_form_container">
    <div class="contact_from_wrapper">
        <img src="graphics/message.png" class="banner_image_2"/>	
        <p class="contact_form_heading"> Message Now  </p>
        <div class="contact_form_box">
            <form id="contact_form_id" action="response/contact.php" method="get">
                <input id="con_name" type="text" name="fusername" class="contact_name_in" placeholder="Enter Your Name..."/>
                <textarea id="con_msg" type="text" name="fmessage" class="contact_message_in" placeholder="Enter Your Message..."></textarea>
                <button id="con_btn" type="submit" name="fsubmit" value="submitted" class="contact_contact_button"> Send Message </button>
            </form>
        </div>
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

<!--- Body Box Contain About Page -->
<div class="contact_container">
    <div class="contact_box">
        <img src="graphics/email.png" class="banner_image_1">	
        <p class="contact_heading"> Contact Us </p>
        <p class="contact_text">
            There is no distance between readers and publisher gauranteed by Shaknow.com but geography is a fact.  
            In any concert regards content copyright infragments, publishing assistance please contact Shaknow team.
            <br>  
            <br>
            <b> EMAIL US .: </b> <i> CONTACT@SHAKNOW.COM </i>
        </p>
    </div>
</div>


<div class="contact_form_container">
    <div class="contact_from_wrapper">
        <img src="graphics/message.png" class="banner_image_2"/>	
        <p class="contact_form_heading"> Message Now  </p>
        <div class="contact_form_box">
            <form id="contact_form_id" action="response/contact.php" method="get">
                <input id="con_name" type="text" name="fusername" class="contact_name_in" placeholder="Enter Your Name..."/>
                <textarea id="con_msg" type="text" name="fmessage" class="contact_message_in" placeholder="Enter Your Message..."></textarea>
                <button id="con_btn" type="submit" name="fsubmit" value="submitted" class="contact_contact_button"> Send Message </button>
            </form>
        </div>
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

<!--- Body Box Contain About Page -->
<div class="contact_container">
    <div class="contact_box">
        <img src="graphics/email.png" class="banner_image_1">	
        <p class="contact_heading"> Contact Us </p>
        <p class="contact_text">
            There is no distance between readers and publisher gauranteed by Shaknow.com but geography is a fact.  
            In any concert regards content copyright infragments, publishing assistance please contact Shaknow team.
            <br>  
            <br>
            <b> EMAIL US .: </b> <i> CONTACT@SHAKNOW.COM </i>
        </p>
    </div>
</div>


<div class="contact_form_container">
    <div class="contact_from_wrapper">
        <img src="graphics/message.png" class="banner_image_2"/>	
        <p class="contact_form_heading"> Message Now  </p>
        <div class="contact_form_box">
            <form id="contact_form_id" action="response/contact.php" method="get">
                <input id="con_name" type="text" name="fusername" class="contact_name_in" placeholder="Enter Your Name..."/>
                <textarea id="con_msg" type="text" name="fmessage" class="contact_message_in" placeholder="Enter Your Message..."></textarea>
                <button id="con_btn" type="submit" name="fsubmit" value="submitted" class="contact_contact_button"> Send Message </button>
            </form>
        </div>
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
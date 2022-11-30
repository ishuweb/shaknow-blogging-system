<!--- LAST UPDATE 24 NOV 22 -->
<!--- COMPLETED --->

<!DOCTYPE html>
<html lang="en">
<head>
    <!--- BASE -->
    <base href="http://127.0.0.1/shaknow_package/"/>

    <!--- JAVASCRIPT -->
    <script defer="true" type="text/javascript" src="script/signup.js"></script>
    
    <!--- FAVICON -->
    <link rel="icon" type="image/x-icon" href="favicon/shaknow_favicon.png">

    <!--- FONT AWESOME API -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="style/signup/signup_desktop.css" media="screen and (min-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/signup/signup_tablet.css" media="screen and (min-width: 500px) and (max-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/signup/signup_mobile.css" media="screen and (max-width: 500px)"/>
    
    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> SignUp | Shaknow </title>

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

    <!--- nav list -->
    <ul class="nav_list">
        <a href="about.php" class="nav_link">
            <li class="listitem"> About </li>
        </a>
        <a href="privacy_policy.php" class="nav_link">
            <li class="listitem"> Privacy Policy </li>
        </a>
        <a href="cookies.php" class="nav_link">
            <li class="listitem"> Cookies </li>
        </a>
        <a href="publish_policy.php" class="nav_link">
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
    <button onclick="window.location.href='login.html';" class="login_button"> Login </buttton>
</div>

<!--- This box has logo img, logo text and login form -->
<div class="banner">

    <!--- #1 logo box -->
    <div onclick="hideNav()" class="banner_img_overflow"></div>
    <div class="logo_box_desktop">
        <a href="https://shaknow.com/" class="logo_link_desktop">
            <img src="graphics/logo.png" class="logo_image_desktop">
            <p class="logo_text_desktop"> Shaknow.com </p>
        </a>
    </div>	

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">
    
    <!--- #3 banner text -->
    <p class="banner_text"> Join the Community of Millions of Independent Publishers Who Support FREE and OPEN Access to Authenticate Knowledge. </p>

    <!--- #4 signup form box -->
    <div class="signup_box">
        <form action="response/signup.php" method="POST">
            <p class="signup_tag"> Create New Account with your Email </p>

            <!--- First Name -->
            <div class="fname_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="01" type="text" class="signup_first_name_in" name="f_signup_first_name" required/>
            <label for="01" class="label_1"> First Name </label>

            <!--- Last Name -->
            <div class="lname_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="02" type="text" class="signup_last_name_in" name="f_signup_last_name" required/>
            <label for="02" class="label_2"> Last Name </label>

            <!--- Date of birth -->
            <div class="dob_icon_container">
                <i class="fa fa-calendar" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input type="date" class="signup_dob_in" name="f_signup_dob" required/>

            <!--- Country of origin -->
            <div class="country_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="03" type="text" class="signup_country_in" name="f_signup_country" required/>
            <label for="03" class="label_3"> Country </label>

            <!--- Email address -->
            <div class="email_icon_container">
                <i class="fa fa-envelope" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="04" type="email" class="signup_email_in" name="f_signup_email" required/>
            <label for="04" class="label_4"> Email Address </label>

            <!-- - Password -->
            <div class="key_1_icon_container">
                <i class="fa fa-key" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="05" type="password" class="signup_password_in" name="f_signup_password" required/>
            <label for="05" class="label_5"> Password </label>

            <!--- Confirm Password -->
            <div class="key_2_icon_container">
                <i class="fa fa-key" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="06" type="password" class="signup_repassword_in" name="f_signup_repassword" required/>
            <label for="06" class="label_6"> Confirm Password </label>

            <!--- About -->
            <div class="about_icon_container">
                <i class="fa fa-pencil" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <textarea id="07" type="text" class="signup_about_in" name="f_signup_about" required></textarea>
            <label for="07" class="label_7"> About Yourself </label>

            <button id="signup_submit_button" value="submited" name="f_signup_submit"> Create My Account </button>
        </form>
                         
        <p class="agreement_text"> 
            By signing Up, you agree to our  
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
<div id="tablet_division">


<!-- Blue strip and nav will be include here  -->
<?php
require "common/tablet-nav.php";
?>


<div class="banner">

    <!--- #1 logo box -->
    <div onclick="hideNav_tab()" class="banner_img_overflow"></div>
    <div class="logo_box">
        <a href="https://shaknow.com/" class="logo_link">
            <img src="graphics/logo.png" class="logo_image">
            <p class="logo_text"> Shaknow.com </p>
        </a>
    </div>	

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">
  
    <!--- #3 banner text -->
    <p class="banner_text"> Join the Community of Millions of Independent Publishers Who Support FREE and OPEN Access to Authenticate Knowledge. </p>

    <!--- #4 signup form box -->
    <div class="signup_box">
        <form action="response/signup.php" method="POST">
            <p class="signup_tag"> Create New Account with your Email </p>
    
            <!--- First Name -->
            <div class="fname_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="01" type="text" class="signup_first_name_in" name="f_signup_first_name" required/>
            <label for="01" class="label_1"> First Name </label>
    
            <!--- Last Name -->
            <div class="lname_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="02" type="text" class="signup_last_name_in" name="f_signup_last_name" required/>
            <label for="02" class="label_2"> Last Name </label>
    
            <!--- Date of birth -->
            <div class="dob_icon_container">
                <i class="fa fa-calendar" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input type="date" class="signup_dob_in" name="f_signup_dob" required/>
    
            <!--- Country of origin -->
            <div class="country_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="03" type="text" class="signup_country_in" name="f_signup_country" required/>
            <label for="03" class="label_3"> Country </label>
    
            <!--- Email address -->
            <div class="email_icon_container">
                <i class="fa fa-envelope" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="04" type="email" class="signup_email_in" name="f_signup_email" required/>
            <label for="04" class="label_4"> Email Address </label>
    
            <!-- - Password -->
            <div class="key_1_icon_container">
                <i class="fa fa-key" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="05" type="password" class="signup_password_in" name="f_signup_password" required/>
            <label for="05" class="label_5"> Password </label>
    
            <!--- Confirm Password -->
            <div class="key_2_icon_container">
                <i class="fa fa-key" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="06" type="password" class="signup_repassword_in" name="f_signup_repassword" required/>
            <label for="06" class="label_6"> Confirm Password </label>
    
            <!--- About -->
            <div class="about_icon_container">
                <i class="fa fa-pencil" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <textarea id="07" type="text" class="signup_about_in" name="f_signup_about" required></textarea>
            <label for="07" class="label_7"> About Yourself </label>
    
            <button id="signup_submit_button_tab" value="submited" name="f_signup_submit"> Create My Account </button>
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


<!-- Include the tablet footer -->
<?php
require "common/tablet-footer.php";
?>

<!--- TABLET DIVISION ENDS --->
</div>





<!--- MOBILE DIVISION START -->
<div id="mobile_division">

<?php
require "common/mobile-nav.php";
?>



<div class="banner">
    
    <!--- #1 banner overflow -->
    <div onclick="hideNav()" class="banner_img_overflow"></div>

    <!--- #2 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img"/>
    
    <!--- #3 banner text -->
    <p class="banner_text"> Join the Community of Millions of Independent Publishers Who Support FREE and OPEN Access to Authenticate Knowledge. </p>

    <!--- #4 signup form box -->
    <div class="signup_box">
        <form action="response/signup.php" method="POST">
        
            <!--- First Name -->
            <div class="fname_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="01" type="text" class="signup_first_name_in" name="f_signup_first_name" required/>
            <label for="01" class="label_1"> First Name </label>
    
            <!--- Last Name -->
            <div class="lname_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="02" type="text" class="signup_last_name_in" name="f_signup_last_name" required/>
            <label for="02" class="label_2"> Last Name </label>
    
            <!--- Date of birth -->
            <div class="dob_icon_container">
                <i class="fa fa-calendar" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input type="date" class="signup_dob_in" name="f_signup_dob" required/>
    
            <!--- Country of origin -->
            <div class="country_icon_container">
                <i class="fa fa-user" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="03" type="text" class="signup_country_in" name="f_signup_country" required/>
            <label for="03" class="label_3"> Country </label>
    
            <!--- Email address -->
            <div class="email_icon_container">
                <i class="fa fa-envelope" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="04" type="email" class="signup_email_in" name="f_signup_email" required/>
            <label for="04" class="label_4"> Email Address </label>
    
            <!-- - Password -->
            <div class="key_1_icon_container">
                <i class="fa fa-key" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="05" type="password" class="signup_password_in" name="f_signup_password" required/>
            <label for="05" class="label_5"> Password </label>
    
            <!--- Confirm Password -->
            <div class="key_2_icon_container">
                <i class="fa fa-key" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <input id="06" type="password" class="signup_repassword_in" name="f_signup_repassword" required/>
            <label for="06" class="label_6"> Confirm Password </label>
    
            <!--- About -->
            <div class="about_icon_container">
                <i class="fa fa-pencil" style="color:grey; font-size:20px; position: absolute;""></i>
            </div>
            <textarea id="07" type="text" class="signup_about_in" name="f_signup_about" required></textarea>
            <label for="07" class="label_7"> About Yourself </label>
    
            <button id="signup_submit_button_mob" value="submited" name="f_signup_submit"> Create My Account </button>
        </form>
                        
        <p class="agreement_text"> 
            By signing Up, you agreed to our  
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
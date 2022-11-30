<!DOCTYPE html>
<html lang="en">
<head>
    <!--- BASE -->
    <base href="http://127.0.0.1/shaknow_package/"/>

    <!--- JAVASCRIPT -->
    <script defer="true" type="text/javascript" src="script/homepage.js"></script>
    
    <!--- FAVICON -->
    <link rel="icon" type="image/x-icon" href="favicon/shaknow_favicon.png">

    <!--- FONT AWESOME API -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="style/homepage/home_desktop.css" media="screen and (min-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/homepage/home_tablet.css" media="screen and (min-width: 500px) and (max-width: 1000px)"/>
    <link rel="stylesheet" type="text/css" href="style/homepage/home_mobile.css" media="screen and (max-width: 500px)"/>
    
    <!--- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
    Shaknow is a source of information and knowledge. Publishers around the world
    write articles and publish on Shaknow.com"/>

    <!--- TITLE -->
    <title> Welcome | Shaknow </title>

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
<body onload="loader();" onload="scrollfunonload();">

<!--- loading image -->
<div id="loader_box">
    <img src="loading/loader.svg" class="loader_img"/>
</div>




<!--- DESKTOP DIVISION -->
<div id="desktop">

      
<!--- top arrow button-->
<div class="top_btn_wrapper">
    <div id="top_slider">
        <img id="top-btn" src="graphics/top-img.png" onclick="topfunc()" class="top_arrow_image"/> 
    </div>
</div>


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


<div class="banner">

    <!--- Logo box -->
    <div class="banner_img_overflow"></div>
    <div class="logo_box">
        <a href="https://shaknow.com/" class="logo_link">
            <img src="graphics/logo.png" class="logo_image">
            <p class="logo_text"> Shaknow.com </p>
        </a>
    </div>	

    <!--- Text Moving Section --->
    <div class="text_monitor_wrapper">
        <div class="text_monitor_box">
            <div class="text_box_each" id="slider">
                <p class="moving_text"> [1] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [2] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [3] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [4] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal  </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [5] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
        </div>
    </div>

    <!--- Signup Button -->
    <button onclick="location.href='signup.php';" class="signup_home_button"> Join the Community. Publish Your Own Article. SignUp Now! </button>

    <!--- Banner image | Put Image below to mandate z-index-->
    <img src="image/readng-girl.jpg" class="banner_img">

</div>  <!--- Banner box end -->





<!--- First Info Box --->
<div class="main_info_box_1">
    <div class="main_info_text_1_wrapper">
        <div id="main_info_text_box_1" class="main_info_text_box_1">
            <p class="main_info_text_p_1">
            Share Your Knowledge. Education is an endless asset of life. Learn not for a degree, only for knowledge.Education polish our senses.
            Share Your Knowledge. Education is an endless asset of life. Learn not for a degree, only for knowledge.Education polish our senses.
            </p>
        </div>
    </div>
    <div class="main_info_image_1_wrapper">
        <div id="main_info_image_box_1" class="main_info_image_box_1">
            <img src="graphics/writing.png" id="main_info_image_1"/>
        </div>
    </div>
</div>

<!--- Second Info Box --->
<div class="main_info_box_2">
    <div class="main_info_text_2_wrapper">
        <div id="main_info_text_box_2" class="main_info_text_box_2">
            <p class="main_info_text_p_2">
            Knowledge is the soul of world. Write your knowledge on the web to help the world to gain and grows
            Knowledge is the soul of world. Write your knowledge on the web to help the world to gain and grows
            </p>
        </div>
    </div>
    <div class="main_info_image_2_wrapper">
        <div id="main_info_image_box_2" class="main_info_image_box_2">
            <img src="graphics/sharing.png" id="main_info_image_2"/>
        </div>
    </div>
</div>

<!--- Third Info Box --->
<div class="main_info_box_3">
    <div class="main_info_text_3_wrapper">
        <div id="main_info_text_box_3" class="main_info_text_box_3">
            <p class="main_info_text_p_3">
                Convert your hardwork of your sole content onto money. Publish article and earn money and grows
                Convert your hardwork of your sole content onto money. Publish article and earn money and grows 
            </p>
        </div>
    </div>
    <div class="main_info_image_3_wrapper">
        <div id="main_info_image_box_3" class="main_info_image_box_3">
            <img src="graphics/earings.png" id="main_info_image_3"/>
        </div>
    </div>
</div>


<!--- Sticky Ban Bar -->
<div id="sticky_bar_wrapper">
    <div id="sticky_nav_box">

        <!--- Searc box -->
        <i class="fa fa-search" 
            style="
                margin-right: 5px;  
                font-size: 25px; 
                margin-left: 45px;
                margin-top: 25px;
                color: grey;
                z-index: 200;
                position:absolute;" aria-hidden="true"></i>
        <input type="search" class="nav_search_in" name="" placeholder="Search the subject here..."/>

         <!--- nav list -->
         <ul class="sn_nav_list">
            <a href="about.php" class="nav_link">
                <li class="sn_list_item"> About </li>
            </a>
            <a href="privacy_policy.php" class="nav_link">
                <li class="sn_list_item"> Privacy Policy </li>
            </a>
            <a href="cookies.php" class="nav_link">
                <li class="sn_list_item"> Cookies </li>
            </a>
            <a href="publish_policy.php" class="nav_link">
                <li class="sn_list_item"> Publish Policy </li>
            </a>
            <a href="contact.php" class="nav_link">
                <li class="sn_list_item"> Contact </li>
            </a>
            <a href="https://www.facebook.com/shaknow" class="nav_link">
                <li class="sn_list_item"> Follow </li>
            </a>
        </ul>

         <!--- login button -->
         <button onclick="window.location.href='login.php';" class="sn_login_button"> Login </buttton>
    
        <!--- SignUp button -->
        <button onclick="window.location.href='signup.php';" class="sn_signup_button"> Sign Up </buttton>
    </div>

    <!--- search result box -->
    <div id="search_result_box">
        <p class="result_found_text"> 1 result found </p>
            <p class="search_result_text"> 
                <a href="" class="search_result_link"> The Environmental Effect On Globe </a>
            </p>
            <p class="search_result_text"> 
                <a href="" class="search_result_link"> Niligiri Mountain Ranges </a>
            </p>
            <p class="search_result_text"> 
                <a href="" class="search_result_link"> What is Asia-Pacific Economic Corriodor </a>
            </p>
    </div>
</div>


<!--- Social Media Icons Box --->
<div id="social_box">
    <a href="https://www.facebook.com/shaknow">
        <div id="fb_box">
            <img src="graphics/facebook_logo.png" class="sm_icon"/>
        </div>
    </a>
    <a href="sm_link">
        <div id="insta_box">
            <img src="graphics/instagram_logo.png" class="sm_icon"/>
        </div>
    </a>
    <a href="sm_link">
        <div id="tw_box">
            <img src="graphics/twitter-logo.png" class="sm_icon"/>
        </div>
    </a>
</div>

<!--- box to center the content container -->
<div class="content_centrar">

    <!--- box to contain all content boxes -->
    <div class="content_container">		
        <p class="top_articles_tag"> TRENDING ARTICLES <i class="fa fa-line-chart" style="margin-left: 10px;" aria-hidden="true"></i> </p>
        <div class="top_content_box">
            <a href="article/m.html" style="text-decoration: none;color: black;">
                <p class="top_heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            
            <p class="top_author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="top_author_name">
                <a href="user/profile.php" class="top_user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="top_article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
            <p class="top_publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
            <p class="top_publish_date"> 29.11.2022 </p>
            <p class="top_reads_value"> 1,135 </p>
            <p class="top_reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
            <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
            <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
            <p class="publish_date"> 29.11.2022 </p>
            <p class="reads_value"> 1,135 </p>
            <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="movepage_box">
            <p class="mpage_tag" > Page </p>
            <p class="current_page"> 1 </p>
            <p class="mpage_of"> of </p>
            <p class="mpage_total"> 214 </p>

            <button class="nextpage_btn"> Next Page >> </button>
            <button class="prepage_btn"> << Previous Page </button>  
        </div>
</div><!--- box to contain all content boxes -->
</div><!--- box to center the content container -->




<!--- Include footer script --->
<?php
require "common/desktop-footer.php";
?>

</div>
<!--- DESKTOP DIVISION END -->





<!--- TABLET DIVISION -->
<div id="tablet"> 
<div> 

<!--- top arrow button-->
<div class="top_btn_wrapper">
    <div id="top_slider_tab">
        <img id="top-btn" src="graphics/top-img.png" onclick="topfunc()" class="top_arrow_image"/> 
    </div>
</div>


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


    <!--- #2 Text Moving Section --->
    <div class="text_monitor_wrapper">
        <div class="text_monitor_box">
            <div class="text_box_each" id="slider_tab">
                <p class="moving_text"> [1] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [2] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [3] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [4] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal  </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [5] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
        </div>
    </div>

    <!--- #4 Signup Button -->
    <button onclick="location.href='signup.php';" class="signup_home_button"> Join the Community. Publish Your Own Article. SignUp Now! </button>

    <!--- #4 banner image -->
    <img src="image/readng-girl.jpg" class="banner_img">

</div>  <!--- Banner box end -->

<!--- First Info Box --->
<div class="info_box_1">
    <div class="info_text_1_wrapper">
        <div id="info_text_box_1" class="info_text_box_1">
            <p class="info_text_p">
            Share Your Knowledge. Education is an endless asset of life. Learn not for a degree, only for knowledge.Education polish our senses.
            Share Your Knowledge. Education is an endless asset of life. Learn not for a degree, only for knowledge.Education polish our senses.
            </p>
        </div>
    </div>
    <div class="info_image_1_wrapper">
        <div id="info_image_box_1" class="info_image_box">
            <img src="graphics/writing.png" id="info_image_1"/>
        </div>
    </div>
</div>

<!--- Second Info Box --->
<div class="info_box_2">
    <div class="info_text_2_wrapper">
        <div id="info_text_box_2" class="info_text_box_2">
            <p class="info_text_p">
            Knowledge is the soul of world. Write your knowledge on the web to help the world to gain and grows
            Knowledge is the soul of world. Write your knowledge on the web to help the world to gain and grows
            </p>
        </div>
    </div>
    <div class="info_image_2_wrapper">
        <div id="info_image_box_2" class="info_image_box">
            <img src="graphics/sharing.png" id="info_image_2"/>
        </div>
    </div>
</div>

<!--- Third Info Box --->
<div class="info_box_3">
    <div class="info_text_3_wrapper">
        <div id="info_text_box_3" class="info_text_box_3">
            <p class="info_text_p">
            Convert your hardwork of your sole content onto money. Publish article and earn money and grows
            Convert your hardwork of your sole content onto money. Publish article and earn money and grows     </p>
        </div>
    </div>
    <div class="info_image_3_wrapper">
        <div id="info_image_box_3" class="info_image_box">
            <img src="graphics/earings.png" id="info_image_3"/>
        </div>
    </div>
</div>



<!--- Social Media Icons Box --->
<div id="social_box_tab">
    <a href="https://www.facebook.com/shaknow">
        <div id="fb_box_tab">
            <img src="graphics/facebook_logo.png" class="sm_icon"/>
        </div>
    </a>
    <a href="sm_link">
        <div id="insta_box_tab">
            <img src="graphics/instagram_logo.png" class="sm_icon"/>
        </div>
    </a>
    <a href="sm_link">
        <div id="tw_box_tab">
            <img src="graphics/twitter-logo.png" class="sm_icon"/>
        </div>
    </a>
</div>



<!--- MAIN CONTENT SESCTION --->
<!--- box to center the content container -->
<div class="content_centrar">

    <!--- box to contain all content boxes -->
    <div class="content_container">		
    <p class="top_articles_tag"> TRENDING ARTICLES <i class="fa fa-line-chart" style="margin-left: 10px;" aria-hidden="true"></i> </p>
        <div class="top_content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="top_heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            
            <p class="top_author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="top_author_name">
                <a href="user/profile.php" class="top_user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="top_article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="top_publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="top_publish_date"> 29.11.2022 </p>
        <p class="top_reads_value"> 1,135 </p>
        <p class="top_reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
            <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="movepage_box">
            <p class="mpage_tag" > Page </p>
            <p class="current_page"> 1 </p>
            <p class="mpage_of"> of </p>
            <p class="mpage_total"> 214 </p>

            <button class="nextpage_btn"> Next Page >> </button>
            <button class="prepage_btn"> << Previous Page </button>  
        </div>
</div><!--- box to contain all content boxes -->
</div><!--- box to center the content container -->


<!-- Include the tablet footer -->
<?php
require "common/tablet-footer.php";
?>


</div>
<!--- TABLET DIVISION END -->






<!--- MOBILE DIVISION -->
<div id="mobile">
    
<?php
require "common/mobile-nav.php";
?>

  
<!--- top arrow button-->
<div class="top_btn_wrapper">
    <div id="top_slider_mob">
        <img id="top-btn" src="graphics/top-img.png" onclick="topfunc()" class="top_arrow_image"/> 
    </div>
</div>


<div class="banner">
    
    <!--- #1 banner overflow -->
    <div class="banner_img_overflow"></div>

    <!--- #2 banner image -->
    <img src="image/readng-girl-mobile.jpg" class="banner_img"/>
    
     <!-- #3 Text Moving Section --->
     <div class="text_monitor_container">
     <div class="text_monitor_wrapper">
        <div class="text_monitor_box">
            <div class="text_box_each" id="slider_mob">
                <p class="moving_text"> [1] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [2] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [3] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [4] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal  </p>
            </div>
            <div class="text_box_each">
                <p class="moving_text"> [5] Take one of Udemrange of Python courses and learn how to code using this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask, Django, data science, and machine learning. You’ll learn h
                    ow to build everything from games to sites to apps. Choose from a range of courses that will appeal </p>
            </div>
        </div>
    </div>
    </div>

    <!-- #4 Signup Button -->
    <button onclick="location.href='signup.php';" class="signup_home_button"> Join the Community. SignUp Now. </button>
</div>



<!--- First Info Box --->
<div class="info_box_1">
    <div class="info_box_1_wrapper">
        <div id="info_slider_1">
            <div class="info_image_box_1">
                <img src="graphics/writing.png" class="info_image_mob_1"/>
            </div>
            <div class="info_text_box_1">
                <p class="info_text_p_1">
                    Share Your Knowledge. Education is an endless asset of life. Learn not for a degree, only for knowledge.Education polish our senses.
                    Share Your Knowledge. Education is an endless asset of life. Learn not for a degree, only for knowledge.Education polish our senses.
                </p>
            </div>
        </div>
    </div>
</div>

<!--- Second Info Box --->
<div class="info_box_2">
    <div class="info_box_2_wrapper">
        <div id="info_slider_2">
            <div class="info_image_box_2">
                <img src="graphics/sharing.png" class="info_image_mob_2"/>
            </div>
            <div class="info_text_box_2">
                <p class="info_text_p_2">
                Knowledge is the soul of world. Write your knowledge on the web to help the world to gain and grows
                Knowledge is the soul of world. Write your knowledge on the web to help the world to gain and grows
                </p>
            </div>
        </div>
    </div>
</div>

<!--- Third Info Box --->
<div class="info_box_3">
    <div class="info_box_3_wrapper">
        <div id="info_slider_3">
            <div class="info_image_box_3">
                <img src="graphics/earings.png" class="info_image_mob_3"/>
            </div>
            <div class="info_text_box_3">
                <p class="info_text_p_3">
                Convert your hardwork of your sole content onto money. Publish article and earn money and grows
                Convert your hardwork of your sole content onto money. Publish article and earn money and grows     </p>
            </div>
        </div>
    </div>
</div>



<!--- Social Media Icons Box --->


<div id="social_box_mob">
    
    <div id="fb_box_mob">
        <button id="close_social_btn">  
            <i class="fa fa-times" style="font-size: 18px;" aria-hidden="true"></i> 
        </button>
        <a href="https://www.facebook.com/shaknow">
            <img src="graphics/facebook_logo.png" class="sm_icon"/>
        </a>
    </div>
   
    <a href="sm_link">
        <div id="insta_box_mob">
            <img src="graphics/instagram_logo.png" class="sm_icon"/>
        </div>
    </a>
    <a href="sm_link">
        <div id="tw_box_mob">
            <img src="graphics/twitter-logo.png" class="sm_icon"/>
        </div>
    </a>
</div>




<!--- box to center the content container -->
<div class="content_centrar">

    <!--- box to contain all content boxes -->
    <div class="content_container">		
        <p class="articles_tag"> TRENDING ARTICLES <i class="fa fa-line-chart" style="margin-left: 10px;" aria-hidden="true"></i> </p>

        <div class="content_box">
            <a href="article/m.html" style="text-decoration: none;color: black;">
                <p class="heading"> Half of work of Shree Ram Mandir Has Been Completed. </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
            <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">
            <a href="article/" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
        <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
        <p class="publish_date"> 29.11.2022 </p>
        <p class="reads_value"> 1,135 </p>
        <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        
        <div class="content_box">

            <a href="article/m.html" style="text-decoration: none;color: black;">
                <p class="heading"> Up Madarsha was alegdly linked with terror module of al-Qaeda </p>
            </a>
            <p class="author_tag"><i class="fa fa-pencil" style="margin-right: 5px;" aria-hidden="true"></i> Published by : </p> 
            <p class="author_name">
                <a href="user/profile.php" class="user_name_link"> Mr S.R. Khithor </a>
            </p>

            <a href="article/" style="text-decoration: none;color: black;">
                <p class="article"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, beatae. Asperiores, doloremque quia, rerum nobis autem repellendus error alias facilis dignissimos mollitia ex veniam, similique consequuntur? Nulla neque nisi reiciendis?
                Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni Ratione facere aliquam asperiores aut tenetur ducimus doloremque. Similique possimus ad odio tempora itaque nemo atque, tempore perferendis necessitatibus non vitae doloribus rerum quis facilis sit dolorem? Totam, quis quas!
                Minima dolor aut facilis ut blanditiis consequuntur pariatur expedita eius, beatae maxime quisquam ad voluptas eos ullam doloremque necessitatibus praesentium at? Cupiditate perferendis sint laudantium magnam molestias hic deserunt dolores?
                Sapiente magni aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                aperiam iusto cupiditate minima labore quam, voluptates, necessitatibus at impedit, aut earum officiis animi voluptatum? Nobis eveniet sunt beatae quos, pariatur commodi explicabo reiciendis itaque nulla officiis alias!
                </p>
            </a>
            <p class="publihs_date_tag"> <i class="fa fa-calendar" style="margin-right: 5px;" aria-hidden="true"></i> Published Date: </p>
            <p class="publish_date"> 29.11.2022 </p>
            <p class="reads_value"> 1,135 </p>
            <p class="reads_tag"><i class="fa fa-eye" style="margin-right: 5px;" aria-hidden="true"></i>  Reads : </p>
        </div>

        <div class="movepage_box">
            <p class="mpage_tag" > Page </p>
            <p class="current_page"> 1 </p>
            <p class="mpage_of"> of </p>
            <p class="mpage_total"> 214 </p>

            <button class="nextpage_btn"> Next >> </button>
            <button class="prepage_btn"> << Previous </button>  
        </div>
</div><!--- box to contain all content boxes -->
</div><!--- box to center the content container -->




<!-- Include footer -->
<?php
require "common/mobile-footer.php";
?>



</div>
<!--- MOBILE DIVISION END -->

</body>
</html>
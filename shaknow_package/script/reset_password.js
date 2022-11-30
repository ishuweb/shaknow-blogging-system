// RESET PASSWORD 
// Last updated 18 NOV 

console.log("Reset Password Script Running...");
 
// THIS IS LOADING DOCUMENT FUNCTION
function loader() {
    document.getElementById("loader_box").style.display = "none";
}



// THIS IS THE FUNCTION OF NAV DROP DOWN BUTTON
function showNav_tab() {
    NavBox = document.getElementById("nav_box_tab");
    NavBox.style.display = "block";
    document.getElementById("show_nav_icon_tab").style.display = "none";
    document.getElementById("hide_nav_icon_tab").style.display = "block";
}   

function hideNav_tab() {
    NavBox = document.getElementById("nav_box_tab");
    NavBox.style.display = "none";
    document.getElementById("show_nav_icon_tab").style.display = "block";
    document.getElementById("hide_nav_icon_tab").style.display = "none";
}

function showNav_mob() {
    NavBox = document.getElementById("nav_box_mob");
    NavBox.style.display = "block";
    document.getElementById("show_nav_icon_mob").style.display = "none";
    document.getElementById("hide_nav_icon_mob").style.display = "block";
}   

function hideNav_mob() {
    NavBox = document.getElementById("nav_box_mob");
    NavBox.style.display = "none";
    document.getElementById("show_nav_icon_mob").style.display = "block";
    document.getElementById("hide_nav_icon_mob").style.display = "none";
}
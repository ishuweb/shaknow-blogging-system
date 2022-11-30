
// THIS IS THE FUNCTION OF NAV DROP DOWN BUTTON MOBILE
function show() {
    document.getElementById("show_nav_icon").style.display = "none";
    document.getElementById("hide_nav_icon").style.display = "block";

    NavBox = document.getElementById("nav_box_container_mob");
    NavBox.style.display = "block";
    setTimeout(()=>{
        document.getElementById("nav_inbox_mob").style.marginLeft = "0px";
    },100)
}   

function hide() {
    document.getElementById("show_nav_icon").style.display = "block";
    document.getElementById("hide_nav_icon").style.display = "none";

    NavBox = document.getElementById("nav_box_container_mob");
    document.getElementById("nav_inbox_mob").style.marginLeft = "-300px";
    setTimeout(()=>{
        NavBox.style.display = "none";
    },400)
}



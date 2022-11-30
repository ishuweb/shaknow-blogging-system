
// THIS IS THE FUNCTION OF NAV DROP DOWN BUTTON MOBILE
function show_tab() {
    document.getElementById("show_nav_icon_tab").style.display = "none";
    document.getElementById("hide_nav_icon_tab").style.display = "block";

    NavBox = document.getElementById("nav_box_wrapper_tab");
    NavBox.style.display = "block";
    setTimeout(()=>{
        document.getElementById("nav_box_tab").style.marginLeft = "0px";
    },100)
}   

function hide_tab() {
    document.getElementById("show_nav_icon_tab").style.display = "block";
    document.getElementById("hide_nav_icon_tab").style.display = "none";

    NavBox = document.getElementById("nav_box_wrapper_tab");
    document.getElementById("nav_box_tab").style.marginLeft = "-300px";
    setTimeout(()=>{
        NavBox.style.display = "none";
    },400)
}

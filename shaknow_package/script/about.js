// THIS IS ABOUT JAVASCRIPT FILE 
// Last updated 22 Nov 22 

console.log("About Javascript Running...");
 
// THIS IS LOADING DOCUMENT FUNCTION
function loader() {
if(document.getElementById("loader_box")) {
    document.getElementById("loader_box").style.display = "none";
    } 
}


// THIS IS SCROLL BUTTON FUNCTION 
function topfunc() {
    window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth"
    })
}

// THIS IS AUTO ARROW TOP BUTTON HIDE FUNCTION
window.addEventListener("scroll", scrollfun);
function scrollfun() {
    if (window.pageYOffset > 500) {
        document.getElementById("top-btn").style.visibility = "visible";
    }
    else {
        document.getElementById("top-btn").style.visibility = "hidden";
    }
}



// THIS IS THE FUNCTION OF NAV DROP DOWN BUTTON TABLET
function showNav_tab() {
    document.getElementById("show_nav_icon_tab").style.display = "none";
    document.getElementById("hide_nav_icon_tab").style.display = "block";

    NavBox = document.getElementById("nav_box_wrapper_tab");
    NavBox.style.display = "block";
    setTimeout(()=>{
        document.getElementById("nav_box_tab").style.marginLeft = "0px";
    },200)
}   

function hideNav_tab() {
    document.getElementById("show_nav_icon_tab").style.display = "block";
    document.getElementById("hide_nav_icon_tab").style.display = "none";

    NavBox = document.getElementById("nav_box_wrapper_tab");
    document.getElementById("nav_box_tab").style.marginLeft = "300px";
    setTimeout(()=>{
        NavBox.style.display = "none";
    },600)
}


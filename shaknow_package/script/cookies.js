// THIS IS COOKIES JAVASCRIPT FILE 
// Last updated 16 Nov 22 

console.log("Cookies Javascript Running...");
 
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
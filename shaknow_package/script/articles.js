// THIS IS ARTICLES JAVASCRIPT FILE 
// Last updated 09:00 PM 17 Jul 22

console.log("Article Script Running...");
 
// THIS IS LOADING DOCUMENT FUNCTION
    function loader() {
    document.getElementById("loader_box").style.display = "none";
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
        if (window.innerWidth > 950) {
            if (window.pageYOffset > 400) {
                document.getElementById("top-btn").style.visibility = "visible";
            }
            else {
                document.getElementById("top-btn").style.visibility = "hidden";
            }
        }
        else if (window.innerWidth > 600 && window.innerWidth <= 950) {
            if (window.pageYOffset > 200) {
                document.getElementById("top-btn").style.visibility = "visible";
            }
            else {
                document.getElementById("top-btn").style.visibility = "hidden";
            }
        }
        else if (window.innerWidth < 600) {
            if (window.pageYOffset > 50) {
                document.getElementById("top-btn").style.visibility = "visible";
            }
            else {
                document.getElementById("top-btn").style.visibility = "hidden";
            }
        }
    }

// SOCIAL MEDIA ICON TOP FUNCTION
document.getElementById("smi_1").addEventListener("mouseover",function(){
    document.getElementById("smimg_1").style.transform = "scale(115%,115%)";
})

document.getElementById("smi_1").addEventListener("mouseleave",function(){
    document.getElementById("smimg_1").style.transform = "scale(100%,100%)";
})


document.getElementById("smi_2").addEventListener("mouseover",function(){
    document.getElementById("smimg_2").style.transform = "scale(115%,115%)";
})

document.getElementById("smi_2").addEventListener("mouseleave",function(){
    document.getElementById("smimg_2").style.transform = "scale(100%,100%)";
})


document.getElementById("smi_3").addEventListener("mouseover",function(){
    document.getElementById("smimg_3").style.transform = "scale(115%,115%)";
})

document.getElementById("smi_3").addEventListener("mouseleave",function(){
    document.getElementById("smimg_3").style.transform = "scale(100%,100%)";
})


document.getElementById("smi_4").addEventListener("mouseover",function(){
    document.getElementById("smimg_4").style.transform = "scale(115%,115%)";
})

document.getElementById("smi_4").addEventListener("mouseleave",function(){
    document.getElementById("smimg_4").style.transform = "scale(100%,100%)";
})


document.getElementById("smi_5").addEventListener("mouseover",function(){
    document.getElementById("smi_5").style.transform = "scale(110%,110%)";
})

document.getElementById("smi_5").addEventListener("mouseleave",function(){
    document.getElementById("smi_5").style.transform = "scale(100%,100%)";
})


document.getElementById("smi_6").addEventListener("mouseover",function(){
    document.getElementById("smi_6").style.transform = "scale(110%,110%)";
})

document.getElementById("smi_6").addEventListener("mouseleave",function(){
    document.getElementById("smi_6").style.transform = "scale(100%,100%)";
})

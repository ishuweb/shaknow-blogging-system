// THIS IS HOMEPAGE JAVASCRIPT FILE 
// Last updated 28 NOV 

console.log("Homepage Script Running...");
 
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
    if (window.pageYOffset > 800) {
        document.getElementById("top_slider").style.marginLeft = "0px";
    }
    else {
        document.getElementById("top_slider").style.marginLeft = "150px";
    }
}

// THIS IS HOMEPAGE MOVING TEXT FUNCTION
function text_slider() {
    var slider = document.getElementById("slider");

    setTimeout(()=>{
        slider.style.marginLeft = "-550px";
    },4000)

    setTimeout(()=>{
        slider.style.marginLeft = "-1100px";
    },8000)

    setTimeout(()=>{
        slider.style.marginLeft = "-1650px";
    },12000)

    setTimeout(()=>{
        slider.style.marginLeft = "-2200px";
    },16000)

    setTimeout(()=>{
        slider.style.marginLeft = "0px";
    },20000)


    setInterval(()=>{
        
        setTimeout(()=>{
            slider.style.marginLeft = "-550px";
        },4000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-1100px";
        },8000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-1650px";
        },12000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-2200px";
        },16000)

        setTimeout(()=>{
            slider.style.marginLeft = "0px";
        },20000)
        
    },20000);   
}

// Call text slider function
text_slider();


// THIS IS STICKY NAVIGATION BAR HIDE SHOW FUNCTION
window.addEventListener("scroll", scrollfunc);
function scrollfunc() {
    if (window.pageYOffset > 1900) {
        document.getElementById("sticky_bar_wrapper").style.zIndex = "1000";
        document.getElementById("sticky_nav_box").style.marginTop = "0px";
    }
    else {
        document.getElementById("sticky_nav_box").style.marginTop = "-80px";
        document.getElementById("sticky_bar_wrapper").style.zIndex = "-1000";
    }
}


// SOCIAL MEDIA ICON FUNCTION
window.addEventListener("scroll", scrollfunx);
function scrollfunx() {
    if (window.pageYOffset > 1900) {
        document.getElementById("fb_box").style.marginLeft = "0px";
        setTimeout(()=>{
            document.getElementById("insta_box").style.marginLeft = "0px";
        },500)
        setTimeout(()=>{
            document.getElementById("tw_box").style.marginLeft = "0px";
        },1000)
    }
    else {
        document.getElementById("fb_box").style.marginLeft = "-100px";
        setTimeout(()=>{
            document.getElementById("insta_box").style.marginLeft = "-100px";
        },500)
        setTimeout(()=>{
            document.getElementById("tw_box").style.marginLeft = "-100px";
        },1000)
    }
}


// SOCILA MEDIA ICON HOVER EFFECT FUNCTION
if(document.getElementById("fb_box")) {
    document.getElementById("fb_box").addEventListener("mouseover",function(){
        document.getElementById("social_box").style.width = "150px";
        document.getElementById("fb_box").style.width = "150px";
    })

    document.getElementById("insta_box").addEventListener("mouseover",function(){
        document.getElementById("social_box").style.width = "150px";
        document.getElementById("insta_box").style.width = "150px";
    })

    document.getElementById("tw_box").addEventListener("mouseover",function(){
        document.getElementById("social_box").style.width = "150px";
        document.getElementById("tw_box").style.width = "150px";
    })

    document.getElementById("fb_box").addEventListener("mouseleave",function(){
        document.getElementById("social_box").style.width = "100px";
        document.getElementById("fb_box").style.width = "100px";
    })

    document.getElementById("insta_box").addEventListener("mouseleave",function(){
        document.getElementById("social_box").style.width = "100px";
        document.getElementById("insta_box").style.width = "100px";
    })

    document.getElementById("tw_box").addEventListener("mouseleave",function(){
        document.getElementById("social_box").style.width = "100px";
        document.getElementById("tw_box").style.width = "100px";
    })
}   


// INFO GRAPHICS SECTION FOR 1 BOX 
window.addEventListener("scroll", scrollfunc_main);
function scrollfunc_main() {
    if (window.pageYOffset > 293) {
        document.getElementById("main_info_text_box_1").style.marginTop = "70px";
        setTimeout(()=>{
            document.getElementById("main_info_image_box_1").style.marginLeft = "0px";
        },500)
    }   
    else {
        document.getElementById("main_info_text_box_1").style.marginTop = "600px";
        setTimeout(()=>{
            document.getElementById("main_info_image_box_1").style.marginLeft = "600px";
        },500)
    }



    if (window.pageYOffset > 750) {
        document.getElementById("main_info_text_box_2").style.marginTop = "70px";
        setTimeout(()=>{
            document.getElementById("main_info_image_box_2").style.marginLeft = "50px";
        },500)
    }   
    else {
        document.getElementById("main_info_text_box_2").style.marginTop = "600px";
        setTimeout(()=>{
            document.getElementById("main_info_image_box_2").style.marginLeft = "-600px";
        },500)
    }



    if (window.pageYOffset > 1000) {
        document.getElementById("main_info_text_box_3").style.marginTop = "70px";
        setTimeout(()=>{
            document.getElementById("main_info_image_box_3").style.marginLeft = "0px";
        },500)
    }   
    else {
        document.getElementById("main_info_text_box_3").style.marginTop = "600px";
        setTimeout(()=>{
            document.getElementById("main_info_image_box_3").style.marginLeft = "600px";
        },500)
    }
}






// TABLET AUTO TEXT NAVIGATION FUNCTION
function text_slider_tab() {
    var slider = document.getElementById("slider_tab");

    setTimeout(()=>{
        slider.style.marginLeft = "-350px";
    },4000)

    setTimeout(()=>{
        slider.style.marginLeft = "-700px";
    },8000)

    setTimeout(()=>{
        slider.style.marginLeft = "-1050px";
    },12000)

    setTimeout(()=>{
        slider.style.marginLeft = "-1400px";
    },16000)

    setTimeout(()=>{
        slider.style.marginLeft = "0px";
    },20000)


    setInterval(()=>{
        
        setTimeout(()=>{
            slider.style.marginLeft = "-350px";
        },4000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-700px";
        },8000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-1050px";
        },12000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-1400px";
        },16000)

        setTimeout(()=>{
            slider.style.marginLeft = "0px";
        },20000)
        
    },20000);   
}

// Call text slider function
text_slider_tab();




// TABLET INFO GRAPHICS SECTION FOR 1 BOX 
window.addEventListener("scroll", scrollfunctab);
function scrollfunctab() {
    if (window.pageYOffset > 293) {
        document.getElementById("info_text_box_1").style.marginTop = "50px";
        setTimeout(()=>{
            document.getElementById("info_image_box_1").style.marginLeft = "0px";
        },500)
    }   
    else {
        document.getElementById("info_text_box_1").style.marginTop = "600px";
        setTimeout(()=>{
            document.getElementById("info_image_box_1").style.marginLeft = "600px";
        },500)
    }



    if (window.pageYOffset > 750) {
        document.getElementById("info_text_box_2").style.marginTop = "50px";
        setTimeout(()=>{
            document.getElementById("info_image_box_2").style.marginLeft = "0px";
        },500)
    }   
    else {
        document.getElementById("info_text_box_2").style.marginTop = "600px";
        setTimeout(()=>{
            document.getElementById("info_image_box_2").style.marginLeft = "-600px";
        },500)
    }



    if (window.pageYOffset > 1000) {
        document.getElementById("info_text_box_3").style.marginTop = "50px";
        setTimeout(()=>{
            document.getElementById("info_image_box_3").style.marginLeft = "0px";
        },500)
    }   
    else {
        document.getElementById("info_text_box_3").style.marginTop = "600px";
        setTimeout(()=>{
            document.getElementById("info_image_box_3").style.marginLeft = "600px";
        },500)
    }
}


// THIS IS AUTO ARROW TOP BUTTON HIDE FUNCTION
window.addEventListener("scroll", scrollfun_tab_topbtn);
function scrollfun_tab_topbtn() {
    if (window.pageYOffset > 800) {
        document.getElementById("top_slider_tab").style.marginLeft = "0px";
    }
    else {
        document.getElementById("top_slider_tab").style.marginLeft = "150px";
    }
}




// TABLET SOCIAL MEDIA ICON FUNCTION
window.addEventListener("scroll", scrollfunxaa);
function scrollfunxaa() {
    if (window.pageYOffset > 1700) {
        document.getElementById("fb_box_tab").style.marginLeft = "0px";
        setTimeout(()=>{
            document.getElementById("insta_box_tab").style.marginLeft = "0px";
        },500)
        setTimeout(()=>{
            document.getElementById("tw_box_tab").style.marginLeft = "0px";
        },1000)
    }
    else {
        document.getElementById("fb_box_tab").style.marginLeft = "-100px";
        setTimeout(()=>{
            document.getElementById("insta_box_tab").style.marginLeft = "-100px";
        },500)
        setTimeout(()=>{
            document.getElementById("tw_box_tab").style.marginLeft = "-100px";
        },1000)
    }
}



// MOBILE SECTION


// MOBILE AUTO TEXT NAVIGATION FUNCTION
function text_slider_mob() {
    var slider = document.getElementById("slider_mob");

    setTimeout(()=>{
        slider.style.marginLeft = "-20%";
    },4000)

    setTimeout(()=>{
        slider.style.marginLeft = "-40%";
    },8000)

    setTimeout(()=>{
        slider.style.marginLeft = "-60%";
    },12000)

    setTimeout(()=>{
        slider.style.marginLeft = "-80%";
    },16000)

    setTimeout(()=>{
        slider.style.marginLeft = "0%";
    },20000)


    setInterval(()=>{
        
        setTimeout(()=>{
            slider.style.marginLeft = "-20%";
        },4000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-40%";
        },8000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-60%";
        },12000)
    
        setTimeout(()=>{
            slider.style.marginLeft = "-80%";
        },16000)

        setTimeout(()=>{
            slider.style.marginLeft = "0%";
        },20000)
        
    },20000);   
}

// Call text slider function
text_slider_mob();


// MOBILE INFO GRAPHICS SECTION FOR 1 BOX 
window.addEventListener("scroll", scrollfunc_mob);
function scrollfunc_mob() {
    if (window.pageYOffset > 400) {
        document.getElementById("info_slider_1").style.width = "100%";
     }   
    else {
        document.getElementById("info_slider_1").style.width = "80%";
    }

    if (window.pageYOffset > 900) {
        document.getElementById("info_slider_2").style.width = "100%";
    }   
    else {
        document.getElementById("info_slider_2").style.width = "80%";
    }

    if (window.pageYOffset > 1300) {
        document.getElementById("info_slider_3").style.width = "100%";
    }   
    else {
        document.getElementById("info_slider_3").style.width = "80%";
    }
}


// THIS IS AUTO ARROW TOP BUTTON HIDE FUNCTION
window.addEventListener("scroll", scrollfuntopp);
function scrollfuntopp() {
    if (window.pageYOffset > 800) {
        document.getElementById("top_slider_mob").style.marginLeft = "0px";
    }
    else {
        document.getElementById("top_slider_mob").style.marginLeft = "150px";
    }
}



// MOBILE SOCIAL MEDIA ICON FUNCTION
window.addEventListener("scroll", scrollfunxa);
function scrollfunxa() {
    if (window.pageYOffset > 1900) {
        
        document.getElementById("fb_box_mob").style.marginLeft = "0px";
        setTimeout(()=>{
            document.getElementById("insta_box_mob").style.marginLeft = "0px";
        },500)
        setTimeout(()=>{
            document.getElementById("tw_box_mob").style.marginLeft = "0px";
        },1000)
    }
    else {

        document.getElementById("fb_box_mob").style.marginLeft = "-100px";
        setTimeout(()=>{
            document.getElementById("insta_box_mob").style.marginLeft = "-100px";
        },500)
        setTimeout(()=>{
            document.getElementById("tw_box_mob").style.marginLeft = "-100px";
        },1000)
    }
}


// MOBILE SOCILA ICON CLOSE BUTTON 
if(document.getElementById("close_social_btn")) {
    document.getElementById("close_social_btn").addEventListener("click",function(){
        document.getElementById("social_box_mob").style.display = "none";
        document.getElementById("close_social_btn").style.display = "none";
    })
}
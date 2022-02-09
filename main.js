//Toggling hamburger in mobile devices
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".site-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});

//active link
var activePath = window.location.pathname;
const navLinks = document.querySelectorAll(".site-menu li a")
.forEach(link => {
    if (link.href.includes(`${activePath}`)) {
        link.classList.add('active-link');
    }
   else if(activePath.length <=1){
         link.classList.remove('active-link');
         
    }
    
});
//onscroll
const navScroll = document.getElementById("site-navbar");
const navScrollLogo = document.getElementById("logo-image");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      navScroll.classList.add("scroll-navbar");
      navScrollLogo.classList.add("scroll-logo");
    } else {
        navScroll.classList.remove("scroll-navbar");
        navScrollLogo.classList.remove("scroll-logo");
    }
  }


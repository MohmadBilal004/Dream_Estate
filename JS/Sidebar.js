// var hamburger = document.querySelector(".hamburger2");
// hamburger.addEventListener("click", function(){
//   document.querySelector("body").classList.toggle("active");
//   document.querySelector(".logo").classList.toggle("move-right");
// })

// // Add this line
// document.querySelector("body").classList.add("active");

// var hamburger = document.querySelector(".hamburger2");
// hamburger.addEventListener("click", function(){
//   document.querySelector("body").classList.toggle("active");
//   var logos = document.querySelectorAll(".logo");
//   for (var i = 0; i < logos.length; i++) {
//     logos[i].classList.toggle("move-right");
//   }
// })

// // Add this line
// document.querySelector("body").classList.add("active");


document.addEventListener("DOMContentLoaded", function () {
  var hamburger = document.querySelector(".hamburger2");
  var logo = document.querySelector(".logo");
   document.querySelector("body").classList.add("active");
  // Check if the element with class "hamburger2" exists
  if (hamburger && logo) {
    hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
        logo.classList.toggle("move-right");
        logo.classList.toggle("invisible"); // Add or remove the "invisible" class
    });
} else {
    console.error("Element with class 'hamburger2' or '.logo' not found");
}
});



  $(document).ready(function() {
    var navbar = $('.top_navbar');
    var offset = navbar.offset().top;

    $(window).scroll(function() {
      if ($(window).scrollTop() > offset) {
        navbar.addClass('fixed');
      } else {
        navbar.removeClass('fixed');
      }
    });
  });

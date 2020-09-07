
// strict function
// (function(){
//     "use strict";
  
//     Define your library...
//   })();



    (function ($) {
    "use strict"; // strict mode

    // alert("test");

    

    // Scrollspy - adds active class on scroll to navbar-item 
    $("body").scrollspy({
        target: "#mainNav",
        offset: 100
    });

    // Close hamburger menu on click
    $(".close-collapsed-nav-on-click").click(function () {
        $(".navbar-collapse").collapse("hide");
    });





    // Special desktop navbar on scroll
    var navbarCollapse = function () {
        // after ...(amount) show special nav
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } 
        else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    $(window).scroll(navbarCollapse);

    
    
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    
    
    // Gallery
    $(".gallery").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
          enabled: true
        }
      });


    







})(jQuery); // End of use strict



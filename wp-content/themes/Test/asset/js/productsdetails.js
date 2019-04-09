 $('.slider-for').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     fade: true,
     prevArrow: false,
     nextArrow: false,
     asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     asNavFor: '.slider-for',
     vertical: true,
     centerMode: true,
     focusOnSelect: true,
     prevArrow: false,
     nextArrow: false
 });

 function changePage(clicked_id) {
     if (clicked_id == "note") {
         $('#note-containt').removeClass('hidden');
         $('#decription-containt').addClass('hidden');
         $('#contact-containt').addClass('hidden');
     } else if (clicked_id == "contact") {
         $('#contact-containt').removeClass('hidden');
         $('#decription-containt').addClass('hidden');
         $('#note-containt').addClass('hidden');
     } else {
         $('#decription-containt').removeClass('hidden');
         $('#contact-containt').removeClass('hidden');
         $('#note-containt').removeClass('hidden');
     }
     
         //scroll to .productsdetails-info-containt
         $('html, body').animate({
            scrollTop: $("div.productsdetails-info-containt").offset().top -200
          }, 1000)
 }
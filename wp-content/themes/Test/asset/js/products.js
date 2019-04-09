 $('.newproducts-list').slick({
     infinite: true,
     slidesToShow: 4,
     slidesToScroll: 2,
     dots: true,
     responsive: [{
             breakpoint: 1000,
             settings: {
                 slidesToShow: 3
             }
         },
         {
             breakpoint: 800,
             settings: {
                 slidesToShow: 2
             }
         },
         {
             breakpoint: 600,
             settings: {
                 slidesToShow: 1
             }
         }
     ]
 });
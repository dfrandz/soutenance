//Talent Slider
jQuery('.hire-talent-slide').slick({
   infinite: true,
   slidesToShow: 4,
   dots: true,
   slidesToScroll: 2,
   speed: 500,
   autoplay: true,
   pauseOnHover: true,
   responsive: [{
         breakpoint: 768,
         settings: {
            slidesToShow: 2
         }
      },
      {
         breakpoint: 767,
         settings: {
            slidesToShow: 1
         }
      }
   ]
});

// Latest Jobs Slider
jQuery('.latest-jobs-slide').slick({
   infinite: true,
   slidesToShow: 3,
   dots: true,
   slidesToScroll: 2,
   speed: 500,
   autoplay: true,
   pauseOnHover: true,
   responsive: [{
         breakpoint: 768,
         settings: {
            slidesToShow: 2
         }
      },
      {
         breakpoint: 767,
         settings: {
            slidesToShow: 1
         }
      }
   ]
});

//Testimonials Slider
jQuery('.feedbak_list').slick({
   infinite: true,
   slidesToShow: 2,
   dots: true,
   slidesToScroll: 1,
   speed: 500,
   autoplay: true,
   pauseOnHover: true,
   responsive: [{
         breakpoint: 768,
         settings: {
            slidesToShow: 1
         }
      },
      {
         breakpoint: 767,
         settings: {
            slidesToShow: 1
         }
      }
   ]
});

//Client Slider
jQuery('.clients-slider').slick({
   infinite: true,
   slidesToShow: 5,
   dots: true,
   slidesToScroll: 3,
   speed: 500,
   autoplay: true,
   pauseOnHover: true,
   responsive: [{
         breakpoint: 768,
         settings: {
            slidesToShow: 4
         }
      },
      {
         breakpoint: 767,
         settings: {
            slidesToShow: 3
         }
      }
   ]
});
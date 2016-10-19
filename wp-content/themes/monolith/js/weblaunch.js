$(document).ready(function(){
      $('.bxslider').bxSlider({
        captions: true,
        minSlides: 2,
        maxSlides: 10,
        slideWidth: 320,
        slideMargin: 1,
        pager: false,
        adaptiveHeight: 4000,
        hideControlOnEnd: false,
        touchEnabled: true,
      });
      $('.bxslider-sliding-text').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        speed: 1500,
        controls: false,
      });
      $('.bxslider-camera').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: true,
        pager: false,
        speed: 1000,
        auto: true,
      });
       $('.bxslider-camera2').bxSlider({
        captions: true,
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: true,
        pager: false,
        speed: 1000,
        auto: true,
        responsive: true,
      });
      $('.bxslider-testimonials').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        speed: 2000,
        controls: false,
        adaptiveHeight: true,
      });
      $('.bxslider-teachers').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: true,
        pager:false,
        adaptiveHeight: true,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<img src="http://monolith.technology/wp-content/themes/monolith/images/next.png" alt="Next" />',
        prevText: '<img src="http://monolith.technology/wp-content/themes/monolith/images/prev.png" alt="Previous" />',
      });
      $('.bxslider-teacherbio').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: false,
        pager:false,
        adaptiveHeight: true,
      });
})
jQuery(document).ready(function() {
  //var lastSlide = $('.orbit-slides-container li:last-child');
  jQuery(document).foundation({
    orbit: {
      animation: 'fade',
      timer_speed: 1000,
      animation_speed: 500,
      slide_number: false,
      bullets: false,
      pause_on_hover: false,
      next_on_click: false,
      after_slide_change: function() {
        if($('.orbit-slides-container li:last-child').hasClass('active')) {
          $(".orbit-timer").click();
        }
      }
    }
  });
});
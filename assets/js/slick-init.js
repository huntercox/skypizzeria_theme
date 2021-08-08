(function ($) {

  $(document).ready(function () {

    $('.slick-slider').slick({
      dots: false,
      autoplay: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      adaptiveHeight: true,
      slidesToShow: 1
    });

  });

})(jQuery);
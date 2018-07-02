var carousel = $('.js-carousel');
var circularCarousel = $('.js-circular-carousel');

carousel.slick({
  slidesToShow: 2,
  slidesToScroll: 2,
  speed: 300,
  // arrows: false,
  prevArrow: carousel.parent().find('.prev'),
  nextArrow: carousel.parent().find('.next'),
  cssEase: 'ease-in-out',
  mobileFirst: true,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToScroll: 3,
        slidesToShow: 3,
      },
    },
    // {
    //   breakpoint: 860,
    //   settings: {
    //     slidesToScroll: 3,
    //     slidesToShow: 3,
    //   },
    // },
  ],
});

circularCarousel.slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  speed: 600,
  prevArrow: circularCarousel.parent().find('.prev'),
  nextArrow: circularCarousel.parent().find('.next'),
  cssEase: 'ease-in-out',
  mobileFirst: true,
});

console.log(circularCarousel);

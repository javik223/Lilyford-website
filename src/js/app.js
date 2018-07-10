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

$('.js-gallery-main').slick({
  slideToShow: 1,
  slideToScroll: 1,
  asNavFor: '.gallery__thumbs',
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '.prev',
  centerMode: false,
  centerPadding: '0px',
});

$('.js-gallery-thumb').slick({
  slidesToShow: 2,
  slideToScroll: 1,
  // arrows: false,
  centerMode: true,
  asNavFor: '.gallery__main',
  focusOnSelect: true,
  prevArrow: '.gallery__navigation .prev',
  nextArrow: '.gallery__navigation .next',
  centerPadding: '20px',
  centerMode: true,
  mobileFirst: true,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '40px',
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        centerPadding: '40px',
      },
    },
  ],
});

console.log(circularCarousel);

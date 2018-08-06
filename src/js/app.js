import dynamics from 'dynamics.js';
import {
  TimelineMax,
  Back,
  Elastic,
  TweenLite,
  TimelineLite,
  Power4,
} from 'gsap';

import Dropdown from './dropdown';

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

let pageNav = (function pageNav() {
  const container = $('.page-nav');
  const pageNavHeader = container.find('.page-nav__title');
  const dropDown = document.querySelector('.page-nav__links__container');
  const $dropDown = $(dropDown);
  let height = $(dropDown).outerHeight();

  function showDropDown() {
    $dropDown.css({ height: 0, visibility: 'visible' }).addClass('isVisible');
    dynamics.animate(
      dropDown,
      { height },
      {
        type: dynamics.spring,
        duration: 1300,
        frequency: 200,
        complete() {
          document.addEventListener('click', listenToOutsideClicks);
        },
      },
    );
  }

  function hideDropDown() {
    $dropDown.removeClass('isVisible');
    dynamics.animate(
      dropDown,
      { height: 0 },
      {
        type: dynamics.spring,
        duration: 600,
        frequency: 50,
        complete() {
          document.removeEventListener('click', listenToOutsideClicks);
        },
      },
    );
  }

  function listenToOutsideClicks(event) {
    if (!$(event.target).closest(container).length) {
      hideDropDown();
    }
  }

  /**
   * Recalculate navigation height on window resize
   * ----------------------------------------------
   */
  function reCalculateHeight() {
    height = $(dropDown).outerHeight();
  }

  $(window).on('resize', reCalculateHeight);

  /**
   * ----------------------------------------------
   */

  pageNavHeader.on('click', function() {
    if ($dropDown.hasClass('isVisible')) {
      hideDropDown();
    } else {
      showDropDown();
    }
  });

  return {
    showDropDown,
    hideDropDown,
  };
})();

$('.js-slick').slick();

let harmbugerMenu = $('.js-hamburger-menu');

console.log(harmbugerMenu.css('display'));

if (harmbugerMenu.css('display') === 'block') {
  let Menu = (function() {
    let options = {
      container: $('.js-primary-nav'),
      items: $('.js-primary-nav > ul > li'),
      ease: Back,
    };
    let myDropdown = new Dropdown(options);

    function toggle() {
      if (!options.container.hasClass('visible')) {
        myDropdown.show();
        options.container.addClass('visible');
      } else {
        myDropdown.hide();
        options.container.removeClass('visible');
      }
    }

    return {
      toggle,
    };
  })();

  harmbugerMenu.on('click', function() {
    $(this).toggleClass('animate');
    $(this)
      .find('.bar')
      .toggleClass('animate');
    Menu.toggle();
  });
}

// Show dropdown menu when each of the dropdowns is clicked
let dropdowns = $('.js-primary-nav > ul').find('.dropdown');
console.log('Dropdowns:', dropdowns);
dropdowns.each(function(index, dropdown) {
  dropdown = $(dropdown);
  const thisDropdown = new Dropdown({
    container: dropdown,
    items: dropdown.find('>li'),
    ease: Back,
  });

  console.log('Dropdown:', dropdown.parent());
  dropdown.parent().hover(
    function() {
      thisDropdown.show();
    },
    function() {
      thisDropdown.hide();
    },
  );
  // dropdown.parent().hover(thisDropdown.show, thisDropdown.hide);
});

/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var carousel = $('.js-carousel');\nvar circularCarousel = $('.js-circular-carousel');\n\ncarousel.slick({\n  slidesToShow: 2,\n  slidesToScroll: 2,\n  speed: 300,\n  // arrows: false,\n  prevArrow: carousel.parent().find('.prev'),\n  nextArrow: carousel.parent().find('.next'),\n  cssEase: 'ease-in-out',\n  mobileFirst: true,\n  responsive: [{\n    breakpoint: 480,\n    settings: {\n      slidesToScroll: 3,\n      slidesToShow: 3\n    }\n  }]\n});\n\ncircularCarousel.slick({\n  slidesToShow: 1,\n  slidesToScroll: 1,\n  infinite: true,\n  speed: 600,\n  prevArrow: circularCarousel.parent().find('.prev'),\n  nextArrow: circularCarousel.parent().find('.next'),\n  cssEase: 'ease-in-out',\n  mobileFirst: true\n});\n\n$('.js-gallery-main').slick({\n  slideToShow: 1,\n  slideToScroll: 1,\n  asNavFor: '.gallery__thumbs',\n  arrows: false,\n  autoplay: true,\n  autoplaySpeed: 2000,\n  prevArrow: '.prev',\n  centerMode: false,\n  centerPadding: '0px'\n});\n\n$('.js-gallery-thumb').slick({\n  slidesToShow: 2,\n  slideToScroll: 1,\n  // arrows: false,\n  centerMode: true,\n  asNavFor: '.gallery__main',\n  focusOnSelect: true,\n  prevArrow: '.gallery__navigation .prev',\n  nextArrow: '.gallery__navigation .next',\n  centerPadding: '20px',\n  centerMode: true,\n  mobileFirst: true,\n  responsive: [{\n    breakpoint: 600,\n    settings: {\n      slidesToShow: 3,\n      centerPadding: '40px'\n    }\n  }, {\n    breakpoint: 1024,\n    settings: {\n      slidesToShow: 4,\n      centerPadding: '40px'\n    }\n  }]\n});\n\nconsole.log(circularCarousel);\n\n//# sourceURL=webpack:///./src/js/app.js?");

/***/ })

/******/ });
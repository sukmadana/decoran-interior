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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_Header__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/Header */ "./assets/js/components/Header.js");
/* harmony import */ var _components_smoothScrollbar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/smoothScrollbar */ "./assets/js/components/smoothScrollbar.js");
/* harmony import */ var _components_ReplaceObfuscatedEmailAddresses__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/ReplaceObfuscatedEmailAddresses */ "./assets/js/components/ReplaceObfuscatedEmailAddresses.js");
/* harmony import */ var _components_AnimateOnPageLinks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/AnimateOnPageLinks */ "./assets/js/components/AnimateOnPageLinks.js");
/* harmony import */ var _gsap_imageScroll__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./gsap/imageScroll */ "./assets/js/gsap/imageScroll.js");
/* harmony import */ var _gsap_fullSectionAnim__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./gsap/fullSectionAnim */ "./assets/js/gsap/fullSectionAnim.js");
// you can import modules from the theme lib or even from
// NPM packages if they support it…

 // Some convenient tools to get you started…


 // Initialise our components on jQuery.ready…

jQuery(function ($) {
  _components_Header__WEBPACK_IMPORTED_MODULE_0__["default"].init(); // ExampleModule2.init();
  // ReplaceObfuscatedEmailAddresses.init();
  // AnimateOnPageLinks.init();
});
 // import revealText from './gsap/animText';

 // revealText.init()

_gsap_fullSectionAnim__WEBPACK_IMPORTED_MODULE_5__["default"].init();

/***/ }),

/***/ "./assets/js/components/AnimateOnPageLinks.js":
/*!****************************************************!*\
  !*** ./assets/js/components/AnimateOnPageLinks.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
/**
 * Intercept clicks on any anchor tag and if the anchor is linking to an on page ID, animate the scroll to the targeted
 * element.
 *
 * This only works if the href contains a value beginning with '#'. e.g; #about-section. You can modify this behaviour
 * by changing the this.link_is_targeting_on_page_anchor() method.
 *
 * If the clicked element has a `data-toggle=xxx` attribute, it won't be handled. You can modify this behaviour by
 * changing the this.is_excluded() method.
 */

var AnimateOnPageLinks = {
  duration: 800,
  offset: -100,
  init: function init() {
    var _this = this;

    $('a').on('click', function (e) {
      var $link = $(e.target);

      if (_this.is_excluded($link)) {
        return;
      }

      var href = $link.attr('href');

      if (_this.link_is_targeting_on_page_anchor(href)) {
        var $target_element = $(href);

        if (!$target_element.length) {
          return;
        }

        e.preventDefault();
        var offset = $target_element.data('scroll-to-offset') === undefined ? _this.offset : $target_element.data('scroll-to-offset');
        var scroll_top = $target_element.offset().top + offset; // subtract any additional height considerations to scroll_top (e.g; height of sticky header)
        //scroll_top -= $('.sticky-page-header').outerHeight();

        $('html, body').animate({
          scrollTop: scroll_top
        }, _this.duration, 'swing', function () {
          return $target_element.trigger('scrolled_to');
        });
      }
    });
  },
  is_excluded: function is_excluded($selector) {
    return !!$selector.data('toggle');
  },
  link_is_targeting_on_page_anchor: function link_is_targeting_on_page_anchor(link) {
    return /^#/.test(link);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (AnimateOnPageLinks);

/***/ }),

/***/ "./assets/js/components/Header.js":
/*!****************************************!*\
  !*** ./assets/js/components/Header.js ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
var Header = {
  init: function init() {
    var $module = $('.header');
    if (!$module.length) return;
    Header.navbarOpen();
  },
  navbarOpen: function navbarOpen() {
    var $burger = $('.hamburger');
    $burger.on('click', function () {
      document.body.classList.toggle('navbar-active');
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (Header);

/***/ }),

/***/ "./assets/js/components/ReplaceObfuscatedEmailAddresses.js":
/*!*****************************************************************!*\
  !*** ./assets/js/components/ReplaceObfuscatedEmailAddresses.js ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
/**
 * Replaces elements with the defined class with an anchor tag containing a mailto: protocol href.
 *
 * If the targeted element has the data-email attribute containing an email address in the format of
 * example[at]domain[dot]com, the inner text will be preserved and the obfuscated address in the data attribute will be
 * used in the link.
 *
 * If not data attribute is present, the inner text of the element is assumed to have the obfuscated address.
 *
 * `class` and `id` attributes are preserved.
 */

var ReplaceObfuscatedEmailAddresses = {
  class_name: 'ObfuscatedEml',
  init: function init() {
    var _this = this;

    var elements = document.getElementsByClassName(this.class_name);

    if (elements.length) {
      [].forEach.call(elements, function (element) {
        var email, text;

        if (element.hasAttribute('data-email')) {
          email = _this.deobfuscate(element.getAttribute('data-email'));
          text = element.innerHTML;
        } else {
          email = _this.deobfuscate(element.innerHTML);
          text = email;
        }

        var link = document.createElement('a');
        link.innerHTML = text;
        link.setAttribute('id', element.getAttribute('id'));
        link.setAttribute('class', element.getAttribute('class'));
        link.setAttribute('href', 'mailto:' + email + '?subject=Website%20Enquiry');
        element.parentNode.replaceChild(link, element);
      });
    }
  },
  deobfuscate: function deobfuscate(text) {
    return text.replace(/\[(at|dot)]/g, function (match) {
      if (match === '[at]') return '@';
      if (match === '[dot]') return '.';
      return match;
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (ReplaceObfuscatedEmailAddresses);

/***/ }),

/***/ "./assets/js/components/smoothScrollbar.js":
/*!*************************************************!*\
  !*** ./assets/js/components/smoothScrollbar.js ***!
  \*************************************************/
/*! exports provided: locoScroll */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "locoScroll", function() { return locoScroll; });
var locoScroll = new LocomotiveScroll({
  el: document.querySelector(".smooth-scroll"),
  smooth: true,
  multiplier: 0.7
});
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    locoScroll.update();
  }, 500);
}); // each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)

locoScroll.on("scroll", ScrollTrigger.update); // tell ScrollTrigger to use these proxy methods for the ".smooth-scroll" element since Locomotive Scroll is hijacking things

ScrollTrigger.scrollerProxy(".smooth-scroll", {
  scrollTop: function scrollTop(value) {
    return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
  },
  // we don't have to define a scrollLeft because we're only scrolling vertically.
  getBoundingClientRect: function getBoundingClientRect() {
    return {
      top: 0,
      left: 0,
      width: window.innerWidth,
      height: window.innerHeight
    };
  },
  // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
  pinType: document.querySelector(".smooth-scroll").style.transform ? "transform" : "fixed"
});
ScrollTrigger.addEventListener("refresh", function () {
  return locoScroll.update();
});
ScrollTrigger.refresh();

/***/ }),

/***/ "./assets/js/gsap/fullSectionAnim.js":
/*!*******************************************!*\
  !*** ./assets/js/gsap/fullSectionAnim.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_smoothScrollbar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/smoothScrollbar */ "./assets/js/components/smoothScrollbar.js");

gsap.registerPlugin(ScrollTrigger);
var fullSection = {
  init: function init() {
    var elm = document.querySelectorAll(".full-section");

    if (!document.body.contains(elm[0])) {
      return;
    }

    var sections = gsap.utils.toArray(".full-section__item");
    console.log(sections);
    sections.forEach(function (section, i) {
      //   if (i === sections.length - 1) {
      //     return gsap.set(section, { marginTop: "100%" });
      //   }
      ScrollTrigger.create({
        trigger: section,
        scroller: '.smooth-scroll',
        start: i === sections.length - 1 ? "bottom bottom" : "top top",
        end: i === sections.length - 1 ? "bottom" : "bottom",
        pin: i === sections.length - 1 ? false : true,
        scrub: true,
        pinSpacing: false,
        id: i + 1 // markers: { indent: 150 * i },

      });
    });
    ScrollTrigger.addEventListener("refresh", function () {
      return _components_smoothScrollbar__WEBPACK_IMPORTED_MODULE_0__["locoScroll"].update();
    });
    ScrollTrigger.refresh();
  }
};
/* harmony default export */ __webpack_exports__["default"] = (fullSection);

/***/ }),

/***/ "./assets/js/gsap/imageScroll.js":
/*!***************************************!*\
  !*** ./assets/js/gsap/imageScroll.js ***!
  \***************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_smoothScrollbar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/smoothScrollbar */ "./assets/js/components/smoothScrollbar.js");

gsap.registerPlugin(ScrollTrigger);
var revealContainers = document.querySelectorAll(".image-reveal");
revealContainers.forEach(function (container) {
  var image = container.querySelector("img");
  var tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      scroller: '.smooth-scroll',
      toggleActions: "restart none none reset"
    }
  });
  tl.set(container, {
    autoAlpha: 1
  });
  tl.from(container, 1.5, {
    xPercent: -100,
    ease: Power2.out
  });
  tl.from(image, 1.5, {
    xPercent: 100,
    scale: 1.3,
    delay: -1.5,
    ease: Power2.out
  });
});
ScrollTrigger.addEventListener("refresh", function () {
  return _components_smoothScrollbar__WEBPACK_IMPORTED_MODULE_0__["locoScroll"].update();
});
ScrollTrigger.refresh(); // OLD WAY USING INTERSECTION OBSERVER API AND CLIP-PATH
// const options = {
//   root: null,
//   rootMargin: "0px",
//   threshold: 0.9,
// };
// let revealCallback = (entries, self) => {
//   entries.forEach((entry) => {
//     let container = entry.target;
//     let img = entry.target.querySelector("img");
//     const easeInOut = "power3.out";
//     const revealAnim = gsap.timeline({ ease: easeInOut });
//     if (entry.isIntersecting) {
//       revealAnim.set(container, {
//         visibility: "visible",
//       });
//       revealAnim.fromTo(
//         container,
//         {
//           clipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
//           webkitClipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
//         },
//         {
//           clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
//           webkitClipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
//           duration: 1,
//           ease: easeInOut,
//         }
//       );
//       revealAnim.from(img, 4, {
//         scale: 1.4,
//         ease: easeInOut,
//         delay: -1,
//       });
//       self.unobserve(entry.target);
//     }
//   });
// };
// let revealObserver = new IntersectionObserver(revealCallback, options);
// document.querySelectorAll(".image-reveal").forEach((reveal) => {
//   revealObserver.observe(reveal);
// });

/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*******************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/app.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/sukma/Sites/decoran/wp-content/themes/decoran-interior/assets/js/app.js */"./assets/js/app.js");
module.exports = __webpack_require__(/*! /Users/sukma/Sites/decoran/wp-content/themes/decoran-interior/assets/scss/app.scss */"./assets/scss/app.scss");


/***/ })

/******/ });
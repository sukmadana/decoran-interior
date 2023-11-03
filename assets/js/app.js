// you can import modules from the theme lib or even from
// NPM packages if they support it…
import Header from "./components/Header";
import "./components/smoothScrollbar";

// Some convenient tools to get you started…
import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
import AnimateOnPageLinks from "./components/AnimateOnPageLinks";


// Initialise our components on jQuery.ready…
jQuery(function ($) {
    Header.init();
    // ExampleModule2.init();
    // ReplaceObfuscatedEmailAddresses.init();
    // AnimateOnPageLinks.init();
});



import './gsap/imageScroll';
// import revealText from './gsap/animText';
import fullSection from "./gsap/fullSectionAnim";

// revealText.init()
fullSection.init()



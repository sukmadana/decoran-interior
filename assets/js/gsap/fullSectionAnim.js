import { locoScroll } from "../components/smoothScrollbar";
gsap.registerPlugin(ScrollTrigger);

const fullSection = {
  init: () => {
    let elm = document.querySelectorAll(".full-section");
    if (!document.body.contains(elm[0])) {
      return;
    }

    const sections = gsap.utils.toArray(".full-section__item");

    console.log(sections);

    sections.forEach((section, i) => {
    //   if (i === sections.length - 1) {
    //     return gsap.set(section, { marginTop: "100%" });
    //   }

      ScrollTrigger.create({
        trigger: section,
        scroller: '.smooth-scroll',
        start: i === sections.length -1 ? "bottom bottom" : "top top",
        end: i === sections.length -1 ? "bottom" : "bottom",
        pin: i === sections.length -1 ? false : true, 
        scrub: true,
        pinSpacing: false,
        id: i + 1,
        // markers: { indent: 150 * i },
      });
    });

    ScrollTrigger.addEventListener("refresh", () => locoScroll.update());

    ScrollTrigger.refresh();
  },
};

export default fullSection;
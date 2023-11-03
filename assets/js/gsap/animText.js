
const revealText = {
  init: () => {
    const childSplit = new SplitText(".text-anim", {
      type: "lines",
      linesClass: "split-child"
    });
    const parentSplit = new SplitText("h1", {
      // type: "lines",
      linesClass: "split-parent"
    });
    
    gsap.from(childSplit.lines, {
      duration: 1.5,
      yPercent: 100,
      ease: "power4",
      skewY: 7,
      stagger: 0.3
    });
  },
};

export default revealText
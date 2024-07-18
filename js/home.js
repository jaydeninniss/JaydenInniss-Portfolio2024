document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger)

    gsap.set('#logo-container', { x: 500 });

    gsap.to("#logo-container", {
        x: -2500,
        ease: "none",
        scrollTrigger: {
            trigger: ".clients",
            start: "-300%",
            end: "100%",
            markers: false,
            scrub: true
        }, 
    });
});
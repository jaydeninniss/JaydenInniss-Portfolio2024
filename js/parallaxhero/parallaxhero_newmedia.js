document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger)

        gsap.to("#newmedia-hero-bg", {
            yPercent: 50,
            ease: "none",
            scrollTrigger: {
                trigger: "#newmedia-hero",
                start: "0%", 

                scrub: true
            }, 
        });

        gsap.to("#newmedia-hero-foreground", {
            yPercent: 20,
            ease: "none",
            scrollTrigger: {
                trigger: "#newmedia-hero",
                start: "-30%", 

                scrub: true
            }, 
        });

    });

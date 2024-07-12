document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger)

        gsap.to("#newmedia-hero-text", {
            yPercent: 80,
            ease: "none",
            scrollTrigger: {
                trigger: "#newmedia-hero",
                start: "0%",
                scrub: true
            }, 
        });

        gsap.to("#newmedia-hero-bg", {
            yPercent: 60,
            ease: "none",
            scrollTrigger: {
                trigger: "#newmedia-hero",
                start: "0%", 

                scrub: true
            }, 
        });

        gsap.to("#newmedia-hero-foreground", {
            yPercent: 10,
            ease: "none",
            scrollTrigger: {
                trigger: "#newmedia-hero",
                start: "-100%", 

                scrub: true
            }, 
        });

        
    });

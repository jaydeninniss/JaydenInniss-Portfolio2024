document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger)

        gsap.to("#about-hero-bg", {
            yPercent: 50,
            ease: "none",
            scrollTrigger: {
                trigger: "#about-hero",
                start: "-30%", 

                scrub: true
            }, 
        });

        gsap.to("#about-hero-jayden", {
            yPercent: 20,
            ease: "none",
            scrollTrigger: {
                trigger: "#about-hero",
                start: "-30%", 

                scrub: true
            }, 
        });

        gsap.to("#about-hero-text", {
            yPercent: 50,
            ease: "none",
            scrollTrigger: {
                trigger: "#about-hero",
                start: "-30%", 

                scrub: true
            }, 
        });
    });


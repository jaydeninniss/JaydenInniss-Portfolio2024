

document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger)

        gsap.to("#home-hero-text", {
            yPercent: 760,
            ease: "none",
            scrollTrigger: {
                trigger: "#home-hero",
                start: "0%",
                end: "130%",
                scrub: true
            }, 
        });

        gsap.to("#home-hero-4", {
            yPercent: 70,
            ease: "none",
            scrollTrigger: {
                trigger: "#home-hero",
                start: "0%", 
                end: "115%",
                scrub: true
            }, 
        });

        gsap.to("#home-hero-3", {
            yPercent: 65,
            ease: "none",
            scrollTrigger: {
                trigger: "#home-hero",
                start: "0%", 
                end: "115%",
                scrub: true
            }, 
        });

        gsap.to("#home-hero-2", {
            yPercent: 50,
            ease: "none",
            scrollTrigger: {
                trigger: "#home-hero",
                start: "0%", 
                end: "125%",
                scrub: true
            }, 
        });

        gsap.to("#home-hero-1", {
            yPercent: 30,
            ease: "none",
            scrollTrigger: {
                trigger: "#home-hero",
                start: "0%", 
                end: "134%",
                scrub: true
            }, 
        });
    });

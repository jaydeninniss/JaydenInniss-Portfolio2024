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

        //This is the zoom on the insert image as you scroll
        gsap.to('#about-insertimg', {
            scale: 1.3,
            duration: 1,
            scrollTrigger: {
                trigger: '#about-insertimg',
                markers: false,
                start: "-200%",
                end: "200%",
                scrub: true,
                // start: 'bottom bottom'
            }
        })

    });


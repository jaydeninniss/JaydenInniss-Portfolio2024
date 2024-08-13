const navLinks = document.querySelectorAll(".nav-links a")

const mobileNavLinks = document.querySelectorAll(".menuToggle span")

if(window.innerWidth > 1200){
    document.addEventListener("DOMContentLoaded", (event) => {
        gsap.registerPlugin(ScrollTrigger)

            gsap.set(navLinks, { color: '#253527' });

            gsap.to("#home-hero-text", {
                yPercent: 1000,
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

            // Nav Bar Colour Change 
            var fontChange = gsap.timeline({
            scrollTrigger: {
                trigger: 'body',
                start: "110%",
                end: "120%",
                scrub:true,
                once: false,
                // markers: true
            },
            defaults:{duration:1}
            })
            .to('#global-nav', {
                backgroundColor: '#253527'
            })

            var fontChangelinks = gsap.timeline({
                scrollTrigger: {
                    trigger: 'body',
                    start: "110%",
                    end: "120%",
                    scrub:true,
                    once: false,
                    markers: false
                },
                defaults:{duration:1}
                })

            .to(navLinks, {
                color:"#fff"
            })
        });
} else {
    document.addEventListener("DOMContentLoaded", (event) => {
        gsap.registerPlugin(ScrollTrigger)

            gsap.set(navLinks, { color: '#253527' });

            gsap.to("#home-hero-text", {
                yPercent: 2950,
                ease: "none",
                scrollTrigger: {
                    trigger: "#home-hero",
                    start: "0%",
                    end: "130%",
                    scrub: true
                }, 
            });

            gsap.to("#home-hero-4", {
                yPercent: 80,
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


        gsap.set(mobileNavLinks, { background: '#253527' });

        // Nav Bar Colour Change 
            var fontChangelinks = gsap.timeline({
                scrollTrigger: {
                    trigger: 'body',
                    start: "110%",
                    end: "120%",
                    scrub:true,
                    once: false,
                    markers: false
                },
                defaults:{duration:1}
                })

            .to(mobileNavLinks, {
                background:"#fff"
            })
}


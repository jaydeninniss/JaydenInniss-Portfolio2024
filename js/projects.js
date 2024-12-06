const project1 = document.querySelector("#project-indigenousvideo")
const project2 = document.querySelector("#project-stsfilmfest")
const project3 = document.querySelector("#project-alpinearmour")
const project5 = document.querySelector("#project-worca")
const project6 = document.querySelector("#project-broadcast")
// const project7 = document.querySelector("#project-sscs")
const project8 = document.querySelector("#project-ubcsnb")

gsap.set("#project-info1", { x: -900 });
gsap.set("#project-info2", { x: -900 });
gsap.set("#project-info3", { x: -900 });
gsap.set("#project-info5", { x: -900 });
gsap.set("#project-info6", { x: -900 });
gsap.set("#project-info8", { x: -900 });

let revealInfo1 = gsap.to("#project-info1", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});

let revealInfo2 = gsap.to("#project-info2", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});

let revealInfo3 = gsap.to("#project-info3", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});

let revealInfo5 = gsap.to("#project-info5", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});

let revealInfo6 = gsap.to("#project-info6", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});

let revealInfo8 = gsap.to("#project-info8", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});


if(window.innerWidth > 1200){
    project1.addEventListener("mouseenter", () => revealInfo1.play());
    project1.addEventListener("mouseleave", () => revealInfo1.reverse());
    
    project2.addEventListener("mouseenter", () => revealInfo2.play());
    project2.addEventListener("mouseleave", () => revealInfo2.reverse());
    
    project3.addEventListener("mouseenter", () => revealInfo3.play());
    project3.addEventListener("mouseleave", () => revealInfo3.reverse());

    project5.addEventListener("mouseenter", () => revealInfo5.play());
    project5.addEventListener("mouseleave", () => revealInfo5.reverse());

    project6.addEventListener("mouseenter", () => revealInfo6.play());
    project6.addEventListener("mouseleave", () => revealInfo6.reverse());

    project8.addEventListener("mouseenter", () => revealInfo8.play());
    project8.addEventListener("mouseleave", () => revealInfo8.reverse());
} else {
    project1.style.transform = "translateX(900px)";
    project2.style.transform = "translateX(900px)";
    project3.style.transform = "translateX(900px)";
    project5.style.transform = "translateX(900px)";
    project6.style.transform = "translateX(900px)";
    project8.style.transform = "translateX(900px)";
}
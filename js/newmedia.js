const project1 = document.querySelector("#project1")
const project2 = document.querySelector("#project2")
const project3 = document.querySelector("#project3")

gsap.set("#project-info1", { x: -900 });
gsap.set("#project-info2", { x: -900 });
gsap.set("#project-info3", { x: -900 });

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

project1.addEventListener("mouseenter", () => revealInfo1.play());
project1.addEventListener("mouseleave", () => revealInfo1.reverse());

project2.addEventListener("mouseenter", () => revealInfo2.play());
project2.addEventListener("mouseleave", () => revealInfo2.reverse());

project3.addEventListener("mouseenter", () => revealInfo3.play());
project3.addEventListener("mouseleave", () => revealInfo3.reverse());
// const project1 = document.querySelector("#project-indigenousvideo")
const project2 = document.querySelector("#project-broadcast")
const project3 = document.querySelector("#project-ubcsnb")
const project4 = document.querySelector("#project-worca")

// gsap.set("#project-info-tanina", { x: -900 });
gsap.set("#project-info-broadcast", { x: -900 });
gsap.set("#project-info-ubcsnb", { x: -900 });
gsap.set("#project-info-worca", { x: -900 });


// let revealInfo1 = gsap.to("#project-info-tanina", {
//     paused: true,
//     x: 0,
//     duration: 0.3,
//     ease: true,
// });

let revealInfo2 = gsap.to("#project-info-broadcast", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});

let revealInfo3 = gsap.to("#project-info-ubcsnb", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});

let revealInfo4 = gsap.to("#project-info-worca", {
    paused: true,
    x: 0,
    duration: 0.3,
    ease: true,
});


if(window.innerWidth > 1200){
    // project1.addEventListener("mouseenter", () => revealInfo1.play());
    // project1.addEventListener("mouseleave", () => revealInfo1.reverse());
    
    project2.addEventListener("mouseenter", () => revealInfo2.play());
    project2.addEventListener("mouseleave", () => revealInfo2.reverse());
    
    project3.addEventListener("mouseenter", () => revealInfo3.play());
    project3.addEventListener("mouseleave", () => revealInfo3.reverse());
    
    project4.addEventListener("mouseenter", () => revealInfo4.play());
    project4.addEventListener("mouseleave", () => revealInfo4.reverse());

} else {
    // project1.style.transform = "translateX(900px)";
    project2.style.transform = "translateX(900px)";
    project3.style.transform = "translateX(900px)";
    project4.style.transform = "translateX(900px)";
}
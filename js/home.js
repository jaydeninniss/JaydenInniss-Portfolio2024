document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.set("#logo-container", { x: 0 });

    gsap.to("#logo-container", {
        x: -2200,
        ease: "none",
        scrollTrigger: {
            trigger: ".clients",
            start: "-300%",
            end: "100%",
            markers: false,
            scrub: true,
        },
    });
});

// ---------------- LOGO ANIMATION

const canvas = document.getElementById("logo-animation");
const context = canvas.getContext("2d");

canvas.width = 1920;
canvas.height = 1080;

const frameCount = 265;
const currentFrame = (index) =>
  `/media/logo/animation/logo-animation-${(index + 1)
    .toString()
    .padStart(4, "0")}.webp`;

const images = [];
const airpods = {
  frame: 0,
};

for (let i = 0; i < frameCount; i++) {
  const img = new Image();
  img.src = currentFrame(i);
  images.push(img);
}

gsap.to(airpods, {
  frame: frameCount - 1,
  snap: "frame",
  ease: "none",
  scrollTrigger: {
    trigger: ".bio-video",
    start: "top top",
    end: "+=2500",
    markers: false,
    pin: true,
    scrub: 0.8,
  },
  onUpdate: render, // use animation onUpdate instead of scrollTrigger's onUpdate
});

images[0].onload = render;

function render() {
  context.clearRect(0, 0, canvas.width, canvas.height);
  context.drawImage(images[airpods.frame], 0, 0);
}

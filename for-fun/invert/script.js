const img = document.querySelector("img");
const video = document.querySelector("video");

video.addEventListener("mouseleave", () => {
  video.pause();
});

// play video when hovering
video.addEventListener("mouseover", () => {
  video.play();
});

// on moblie devices, play video when user stops scrolling for 2 second
let timer;
window.addEventListener("scroll", () => {
  clearTimeout(timer);
  if (!video.paused) {
    video.pause();
  }
  timer = setTimeout(() => {
    video.play();
  }, 2000);
});

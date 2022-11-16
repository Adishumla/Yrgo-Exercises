const img = document.querySelector("img");
const video = document.querySelector("video");

video.addEventListener("mouseleave", () => {
  video.pause();
});

// play video when hovering
video.addEventListener("mouseover", () => {
  video.play();
});

//play video when clicking
video.addEventListener("click", () => {
  video.play();
});

const img = document.querySelector("img");
const video = document.querySelector("video");

video.addEventListener("mouseleave", () => {
  video.pause();
});

// play video when hovering
video.addEventListener("mouseover", () => {
  video.play();
});

// Determine if an element is in the visible viewport
function isInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// determine if the video is in the viewport
function checkVideo() {
  if (isInViewport(video)) {
    video.play();
  } else {
    video.pause();
  }
}

checkVideo();

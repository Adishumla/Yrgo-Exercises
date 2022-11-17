const img = document.querySelector(".click");
const video = document.querySelector("video");
const viewport = document.querySelector(".viewport");

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

const message = document.querySelector("#message");

document.addEventListener("scroll", () => {
  if (isInViewport(viewport)) {
    message.innerHTML = "In viewport";
  } else {
    message.innerHTML = "Not in viewport";
  }
});

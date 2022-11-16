const img = document.querySelector("img");
const video = document.querySelector("video");

video.addEventListener("mouseleave", () => {
  video.pause();
});

// play video when hovering
video.addEventListener("mouseover", () => {
  video.play();
});

// on mobile devices, play video when in view after 1 second
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.5,
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      setTimeout(() => {
        video.play();
      }, 1000);
    }
  });
}, options);

observer.observe(video);

// on mobile devices, pause video when out of view
const options2 = {
  root: null,
  rootMargin: "0px",
  threshold: 0.5,
};

const observer2 = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      video.pause();
    }
  });
}, options2);

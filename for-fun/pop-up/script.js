const popup = document.querySelector(".popup");
const popup_content = document.querySelector(".popup-content");

const scrollPosition = window.scrollY;

//when user scrolls down 500px, remove display: none from .popup css, eventListener
window.addEventListener("scroll", () => {
  if (window.scrollY >= 1000) {
    popup.classList.remove("display-none");
  }
});

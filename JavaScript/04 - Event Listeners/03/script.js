const h1 = document.querySelector("h1");
const h2 = document.querySelector("h2");
const span_in_quote = document.querySelectorAll(".quote span");
const celebration_button = document.querySelector(".celebration-button");
const counter = document.querySelector(".count");
const last_paragraph = document.querySelector("section:last-child p");
const input = document.querySelector("#name");
const menu = document.querySelector(".menu");
const menu_button = document.querySelectorAll(".menu-btn");

h1.style.color = "#15bd83";
h2.textContent = "Adam";

span_in_quote.forEach((span) => {
  span.addEventListener("click", () => {
    window.alert("Yes, you are " + span.textContent + "!");
  });
});

celebration_button.addEventListener("click", () => {
  counter.textContent = parseInt(counter.textContent) + 1;
  if (parseInt(counter.textContent) === 10) {
    celebrate();
  }
});

window.addEventListener("scroll", () => {
  if (window.scrollY > 400) {
    document.body.style.backgroundColor = "#f5f5f5";
  } else {
    document.body.style.backgroundColor = "var(--bg-color)";
  }
});

input.addEventListener("input", () => {
  last_paragraph.textContent = input.value;
});

menu_button.forEach((button) => {
  button.addEventListener("click", () => {
    menu.classList.toggle("open");
  });
});

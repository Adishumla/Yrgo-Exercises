const body = document.querySelector("body");
const box = document.querySelector(".box");
const button = document.querySelector("button");

const colors = ["green", "blue", "red", "pink", "yellow"];

body.style.background = "white";

button.addEventListener("click", () => {
  const color = colors[Math.floor(Math.random() * colors.length)];
  body.style.background = color;
});

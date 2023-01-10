// TODO: Implement the time machine in this file.

const buttons = document.querySelectorAll("button");

buttons.forEach((button) => {
  button.addEventListener("click", function () {
    const year = this.getAttribute("data-year");
    window.location.search = `year=${year}`;
  });
});

const year = new URLSearchParams(window.location.search).get("year");
const image = document.querySelectorAll("img");
image.forEach((img) => {
  if (img.getAttribute("data-year") === year) {
    img.classList.add("active");
  }
});

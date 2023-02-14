import catNames from "https://cdn.skypack.dev/cat-names";
const button = document.querySelector("button");
const catName = document.querySelector("#cat");
button.addEventListener("click", () => {
  catName.textContent = catNames.random();
});

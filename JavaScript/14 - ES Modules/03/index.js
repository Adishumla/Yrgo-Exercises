import { randomCatName } from "./cat-names.js";
const button = document.querySelector("button");
const catName = document.querySelector("#cat");
button.addEventListener("click", () => {
  catName.textContent = randomCatName();
});

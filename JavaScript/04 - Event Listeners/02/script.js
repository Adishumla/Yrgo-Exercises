const a = document.querySelector("a");
const h1 = document.querySelector("h1");
a.addEventListener("click", () => {
  const name = prompt("Please enter your name");
  h1.textContent = "You truly are doing amazing, " + name + "!";
});

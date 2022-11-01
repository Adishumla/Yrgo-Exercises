// exercise 2
document.querySelector("h1").style.color = "var(--accent-color)";

// exercise 3
document.querySelector("h1 span").textContent = "Adam";

// exercise 4
document.querySelector(".grid-section").classList.add("accio");

//exercise 5
const paragraph = document.querySelectorAll(".grid-section p");
paragraph.forEach((p) => {
  p.classList.add("accio");
});

//exercise 6
document.querySelector("a").href = "https://thewizardingworld.co.uk/";

//exercise 7
document.querySelectorAll(".border img").forEach((border) => {
  border.classList.add("spin");
});

//exercise 8
const fetch_paragraph = document.querySelector(".hero-section p");
if (fetch_paragraph.textContent !== "") {
  fetch_paragraph.textContent = alohomora(fetch_paragraph.textContent);
}

//exercise 9
const bottom_span = document.querySelectorAll("p span").forEach((span) => {
  span.classList.add("lumos");
});

//exercise 10
const last_img = document.querySelector(
  ".grid-section .grid .grid-item:last-child img"
);
last_img.src = "images/jake.jpeg";
const last_img_name = document.querySelector(
  ".grid-section .grid .grid-item:last-child p"
);
last_img_name.textContent = "Jake";

//exercise 11
const fetch_witch = document.querySelector(".witch");
fetch_witch.classList.remove("witch");

//exercise 12
const fetch_voldemort = document.querySelector(".voldemort");
fetch_voldemort.classList.remove("voldemort");

//exercise 13
const new_img = document.createElement("img");
document.querySelector(".grid-section .grid").appendChild(new_img);
new_img.src = "images/jake.jpeg";
new_img.alt = "Voldermort";
new_img.classList.add("not_voldemort");

//exercise 14
const fetch_paragraphs = document.querySelectorAll("p");
fetch_paragraphs.forEach((p) => {
  const first_letter = p.textContent[0];
  const span = document.createElement("span");
  span.classList.add("lumos");
  span.textContent = first_letter;
  p.textContent = p.textContent.slice(1);
  p.prepend(span);
});

//exercise 15
const fetch_all_div = document.querySelectorAll("div");
fetch_all_div.forEach((div) => {
  div.classList.add("spin");
});

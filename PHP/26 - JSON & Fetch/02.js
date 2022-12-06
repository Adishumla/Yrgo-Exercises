const list = document.querySelector("ul");

const url = "https://yrgo.github.io/api/movies/what-we-do-in-the-shadows.json";

fetch(url)
  .then((response) => response.json())
  .then((data) => {
    const actors = data;
    actors.forEach((actor) => {
      const listItem = document.createElement("li");
      listItem.textContent = actor.name;
      list.appendChild(listItem);
    });
  });

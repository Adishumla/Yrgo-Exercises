import emojis from "./emojis.js";
import snarkdown from "https://cdn.skypack.dev/snarkdown";
const output = document.querySelector("#output");
const convert = document.querySelector("#convert");

let md = document.querySelector("#md");

md.addEventListener("input", () => {
  output.innerHTML = snarkdown(md.value);

  const emojisInMd = md.value.match(/:\w+:/g);
  if (emojisInMd) {
    emojisInMd.forEach((emoji) => {
      const emojiKey = emoji.slice(1, -1);
      const emojiValue = emojis[emojiKey];
      if (emojiValue) {
        output.innerHTML = output.innerHTML.replace(emoji, emojiValue);
      }
    });
  }
});

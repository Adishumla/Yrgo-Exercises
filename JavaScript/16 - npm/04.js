import kleur from "kleur";
const song =
  "Barn av vår tid är vi som lever i en tid av barn som barn är barn av vår tid och vi är barn av vår tid";

const words = song.split(" ");
const colors = [
  kleur.red,
  kleur.green,
  kleur.blue,
  kleur.yellow,
  kleur.magenta,
];

const coloredWords = words.map((word, i) => colors[i % colors.length](word));

console.log(coloredWords.join(" "));

// npx cowsay -r "srsly dude, why?"

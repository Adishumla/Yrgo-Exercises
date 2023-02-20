import pickWinner from "./pick-winner.js";
const names = process.argv[2].split(",");
console.log("\x1b[32mThe winner is:\x1b[39m ✨" + pickWinner(names) + "✨");

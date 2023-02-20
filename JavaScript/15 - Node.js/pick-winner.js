export default function pickWinner(names) {
  return names[Math.floor(Math.random() * names.length)];
}

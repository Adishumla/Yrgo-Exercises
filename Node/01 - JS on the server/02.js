import { readFileSync } from "fs";

const data = readFileSync("input.txt", "utf8");
const lines = data.split("\n");
console.log(lines);

const values = lines.map((line) => line.split(" ")[1]);
console.log(values);

const sum = values.reduce((acc, value) => acc + Number(value), 0);
const avg = sum / values.length;
console.log(avg + "mm");

const max = Math.max(...values);
const year = lines.find((line) => line.includes(max)).split(" ")[0];
console.log(max + "mm in " + year);

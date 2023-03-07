const express = require("express");
const app = express();
const port = 3000;

app.get("/", (req, res) => {
  res.sendFile("src/index.html", { root: __dirname });
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});

const path = require("path");
app.use(express.static(path.join(__dirname, "./src/public")));

/* app.get("/years", (req, res) => {
  res.json("src/public/years/data.js", { root: __dirname });
});
 */
/* get data from src/public/years/data.js */
const data = require("./src/public/years/data.js");

app.get("/years", (req, res) => {
  res.json(data);
});

app.get("/years/:year", (req, res) => {
  const year = req.params.year;
  const yearData = data.find((item) => item.year == year);
  res.json(yearData);
});

/* total */
app.get("/total", (req, res) => {
  const total = data.reduce((acc, item) => acc + item.perspiration, 0);
  res.json({ total });
});

/* average */
app.get("/average", (req, res) => {
  const total = data.reduce((acc, item) => acc + item.perspiration, 0);
  const average = total / data.length;
  res.json({ average });
});

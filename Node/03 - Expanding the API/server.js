import express from "express";
import dataRouter from "./routes/data.js";
import yearsRouter from "./routes/years.js";
import path from "path";

const app = express();
const port = 3000;

app.use("/data", dataRouter);
app.use("/years", yearsRouter);

app.use("*", (req, res) => {
  res.status(404).json({ error: "Not found" });
});

app.get("/", (req, res) => {
  res.sendFile("src/index.html", { root: __dirname });
});

const path = require("path");
app.use(express.static(path.join(__dirname, "./src/public")));

import { getData } from "./src/public/years/data.js";
const yearData = getData();

app.get("/years", (req, res) => {
  res.json(yearData);
});

app.get("/years/:year", (req, res) => {
  const year = req.params.year;
  const yearData = yearData.find((item) => item.year == year);
  if (!yearData) {
    throw new Error(`Year ${year} not found`);
  }
  res.json(yearData);
});

app.get("/total", (req, res) => {
  const total = yearData.reduce((acc, item) => acc + item.perspiration, 0);
  res.json({ total });
});

app.get("/average", (req, res) => {
  const total = yearData.reduce((acc, item) => acc + item.perspiration, 0);
  const average = total / yearData.length;
  res.json({ average });
});

app.use((err, req, res, next) => {
  console.error(err.message);
  res.status(500).send("Internal Server Error");
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});

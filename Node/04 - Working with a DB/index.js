import express from "express";
import morgan from "morgan";

import yearsRouter from "./routes/years.js";
import dataRouter from "./routes/data.js";
import reportsRouter from "./routes/reports.js";
import mongoose from "mongoose";
import dotenv from "dotenv";

dotenv.config();

const app = express();
const port = 3005;
app.use(express.json());

app.use(morgan(":status :method :url - :response-time ms"));

app.use("/years", yearsRouter);
app.use("/data", dataRouter);
app.use("/reports", reportsRouter);

// Catch all. 404
app.use("*", (req, res) => {
  res.status(404);
  res.json({ data: "Oops, nothing found here" });
});

// Error handler
app.use((err, req, res, next) => {
  console.error(err);
  res.status(500);
  res.send("Internal Server Error");
});

/* app.listen(port, () => {
  console.log(`Perspiration API running on port ${port}`);
}); */

mongoose
  .connect(
    "mongodb+srv://adam:" +
      process.env.PASSWORD +
      "@lesson4.zuphrfe.mongodb.net/?retryWrites=true&w=majority"
  )
  .then(() => {
    app.listen(port, () => {
      console.log(`Perspiration API running on port ${port}`);
    });
  })
  .catch((err) => {
    console.log(err);
  });

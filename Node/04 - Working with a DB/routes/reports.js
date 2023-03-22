import express from "express";
import report from "../schemas/report.js";

const router = express.Router();

router.get("/", (req, res) => {
  report
    .create({
      authorId: 1,
      title: "My first report",
    })
    .then((report) => {
      res.json({ data: report });
    })
    .catch((error) => {
      res.json({ error });
    });
});

export default router;

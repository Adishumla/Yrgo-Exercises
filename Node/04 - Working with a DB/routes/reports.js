import express from "express";
import report from "../schemas/report.js";

const router = express.Router();

router.post("/", (req, res) => {
  report
    .create({
        authorId: req.body.authorId,
        title: req.body.title,
    })
    .then((report) => {
      res.json({ data: report });
    })
    .catch((error) => {
      res.json({ error });
    });
});

router.get("/", (req, res) => {
    report.find().then((reports) => {
        res.json({ data: reports });
    }).catch((error) => {
        res.json({error});
    });
});

router.get("/:id", (req, res) => {
    const { id } = req.params;
    report.findById(id).then((report) => {
        res.json({ data: report });
    }).catch((error) => {
        res.json({error});
    });
});

router.get("/author/:authorId", (req, res) => {
    const { authorId } = req.params;
    report.find({ authorId }).then((reports) => {
        res.json({ data: reports });
    }).catch((error) => {
        res.json({error});
    });
});

export default router;

import express from "express";
const router = express.Router();

router.get("/years", (req, res) => {
  res.json({ status: "epic" });
});

export default router;

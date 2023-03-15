import express from "express";
const router = express.Router();

router.get("/data", (req, res) => {
  res.json({ status: "epic" });
});

export default router;

import { Schema, model } from "mongoose";

const reportSchema = new Schema({
  authorId: Number,
  date: { type: Date, default: Date.now },
  title: String,
});

const report = model("report", reportSchema);

export default report;

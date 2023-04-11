import React from "react";
import audioFile from "../../assets/music/bensound-cute.mp3";

const Audio = () => {
  return <audio src={audioFile} autoPlay={true} style={{ display: "none" }} />;
};

export default Audio;

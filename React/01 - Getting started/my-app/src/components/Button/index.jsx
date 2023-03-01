import React from "react";
import "./button.css";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import { Link } from "react-router-dom";

const Button = (props) => {
  return (
    <button className="button">
      <Link to={props.link}>
        <span>{props.text}</span>
      </Link>
    </button>
  );
};

export default Button;

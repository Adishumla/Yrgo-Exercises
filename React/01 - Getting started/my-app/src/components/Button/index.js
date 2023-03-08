import React from "react";
import PropTypes from "prop-types";
import "./button.css";

const Button = (props) => {
  return (
    <button className="btn" onClick={props.click}>
      {props.buttonText}
    </button>
  );
};

Button.propTypes = {
  buttonText: PropTypes.string,
  click: PropTypes.func,
};

Button.defaultProps = {
  buttonText: "what?",
  click: () => {},
};

export default Button;

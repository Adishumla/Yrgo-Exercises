import React from "react";
import logo from "../../assets/images/headphones.svg";
import "./logo.css";
import PropTypes from "prop-types";

const Logo = (props) => (
  /* if playing add play css */
  <div className={props.playing ? "logo playing" : "logo"}>
    <img src={logo} onClick={props.playing} alt="logo" />
  </div>
);

Logo.propTypes = {
  playing: PropTypes.func,
};

Logo.defaultProps = {
  playing: () => {},
};

export default Logo;

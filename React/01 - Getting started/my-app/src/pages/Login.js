import React from "react";
import Button from "../components/Button";
import { useState } from "react";
import { Link, Route, Routes, Switch } from "react-router-dom";
import { useEffect } from "react";

function Login() {
  const [count, setCount] = useState(0);
  const url = `https://accounts.spotify.com/authorize?client_id=
  ${process.env.REACT_APP_CLIENT_ID}
  &scope=&show_dialog=true&response_type=token&redirect_uri=http://localhost:3000`;
  const [token, setToken] = useState(null);
  if (window.location.hash) {
    const token = window.location.hash.split("=")[1].split("&")[0];
    token && localStorage.setItem("token", token);
  }
  return (
    /* button first navigates to url then to /home */
    <Link to={url}>
      <Button buttonText={"Login to Spotify"} />
    </Link>
  );
}

export default Login;

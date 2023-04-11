import React from "react";
/* import Button from "./components/Button";
 */ import Logo from "./components/Logo";
import Title from "./components/Title";
import Audio from "./components/Audio";
import "./App.css";
import { useState } from "react";
import Login from "./pages/Login";
import Home from "./pages/Home";
import { Link, Route, Routes, Switch, useNavigate } from "react-router-dom";

function App() {
  const [playing, setPlaying] = React.useState(false);
  const [token, setToken] = React.useState(null);
  /* token = window.location.hash.split("=")[1].split("&")[0];
  token && localStorage.setItem("token", token); */

  const navigate = useNavigate();
  return (
    <div className="App">
      <div className="login-view">
        <Logo playing={() => setPlaying(!playing)} />
        {playing && <Audio />}
        <Title>Find your favorite music </Title>
        <Login />
        <Routes>
          <Route path="/login" element={<Login />} />;
          <Route path="/home" element={<Home />} />;
          {localStorage.getItem("token") && navigate("/home")}
        </Routes>
        <Link to="/login">Login</Link>
        <br />
        <Link to="/home">Home</Link>
      </div>
    </div>
  );
}

export default App;

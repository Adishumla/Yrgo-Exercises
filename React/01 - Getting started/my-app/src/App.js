import React from "react";
/* import Button from "./components/Button";
 */ import Logo from "./components/Logo";
import Title from "./components/Title";
import Audio from "./components/Audio";
import "./App.css";
import { useState } from "react";
import Login from "./pages/Login";
import Home from "./pages/Home";
import { Link, Route, Routes, Switch } from "react-router-dom";

function App() {
  const [playing, setPlaying] = React.useState(false);

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
        </Routes>
        <Link to="/login">Login</Link>
        <Link to="/home">Home</Link>
      </div>
    </div>
  );
}

export default App;

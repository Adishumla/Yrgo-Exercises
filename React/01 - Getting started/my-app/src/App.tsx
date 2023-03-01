import React from "react";
import logo from "./logo.svg";
import Headphones from "./components/Headphones";
import Button from "./components/Button";
import "./App.css";
import { BrowserRouter as Router, Route, Link, Routes } from "react-router-dom";
import Playlist from "./Pages/Playlist";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Headphones />
        <p>Find your favorite music</p>
        <Button text="Go to playlist" link="/Playlist" />
      </header>
    </div>
  );
}

export default App;

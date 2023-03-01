import React from "react";
import logo from "./logo.svg";
import Headphones from "./components/Headphones";
import Button from "./components/Button";
import "./App.css";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Headphones />
        <p>Find your favorite music</p>
        <Button text="Login to Spotify" link="Playlist" />
      </header>
    </div>
  );
}

export default App;

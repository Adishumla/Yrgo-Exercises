import React from "react";
import Button from "./components/Button";
import Logo from "./components/Logo";
import Title from "./components/Title";
import Audio from "./components/Audio";
import "./App.css";
import { useState } from "react";

function App() {
  const [count, setCount] = useState(0);
  const [playing, setPlaying] = React.useState(false);
  return (
    <div className="App">
      <div className="login-view">
        <Logo playing={() => setPlaying(!playing)} />
        {playing && <Audio />}
        <Title>Find your favorite music </Title>
        <Button
          click={() => setCount(count + 1)}
          buttonText="Login to spotify"
        />
        {count > 0 && <p>You clicked {count} times</p>}
      </div>
    </div>
  );
}

export default App;

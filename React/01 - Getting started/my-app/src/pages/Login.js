import React from "react";
import Button from "../components/Button";
import { useState } from "react";

function Login() {
  const [count, setCount] = useState(0);
  return (
    <Button click={() => setCount(count + 1)} buttonText="Login to spotify" />
    /* {count > 0 && <p>You clicked {count} times</p>} */
  );
}

export default Login;

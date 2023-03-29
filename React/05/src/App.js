import logo from './logo.svg';
import './App.css';
import Button from "./component/Button";

function App() {
  return (
    <div className="App">
      <Button backgroundColor="grey" color="white" hoverBackgroundColor="blue" hoverColor="white" buttonText="Click me" inverted={true} />
    </div>
  );
}

export default App;

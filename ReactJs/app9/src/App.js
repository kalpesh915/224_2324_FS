import logo from './logo.svg';
import './App.css';
import { useState } from 'react';
import { HighOrderComponetBlue, HighOrderComponetGreen, HighOrderComponetRed } from './components/HighOrderComponet';

function MyCounter(){
  let [counter, setCounter] = useState(0);

  return <>
    <h1>Counter is {counter}</h1>
    <button onClick={()=>setCounter(counter + 1)}>Update</button>
  </>
}

function App() {
  return (
    <div className="App">
      <header>
        {/* <MyCounter></MyCounter> */}
        <HighOrderComponetRed counter={MyCounter}></HighOrderComponetRed>
        <HighOrderComponetGreen counter={MyCounter}></HighOrderComponetGreen>
        <HighOrderComponetBlue counter={MyCounter}></HighOrderComponetBlue>
      </header>
    </div>
  );
}

export default App;

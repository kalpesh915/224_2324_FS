import logo from './logo.svg';
import './App.css';
import InputDemo1 from './components/InputDemo1';
import InputDemo2 from './components/InputDemo2';
import InputDemo3 from './components/InputDemo3';
import InputDemo4 from './components/InputDemo4';
import { useState } from 'react';
import PassFunctionInProps from './components/PassFunctionInProps';

function App() {
  let [status, setStatus] = useState(true);

  function greetings(username){
    alert(`Welcome ${username} to Function of App.js`);
  }

  return (
    <div className="App">
      <header className="App-header">
        {/* <InputDemo1></InputDemo1> */}
        {/* <InputDemo2></InputDemo2> */}
        {/* <InputDemo3></InputDemo3> */}
        {/* <InputDemo4></InputDemo4> */}

        {
          // status ? <InputDemo4></InputDemo4> : <h1>Hidden components</h1>
        }

        {/* <button onClick={()=>setStatus(true)}>Show</button>
        <button onClick={()=>setStatus(false)}>Hide</button> */}

        {/* <button onClick={()=>setStatus(!status)}>Toggle</button> */}

        <PassFunctionInProps data={greetings}></PassFunctionInProps>
      </header>
    </div>
  );
}

export default App;

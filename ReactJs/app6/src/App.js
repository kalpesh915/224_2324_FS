import logo from './logo.svg';
import './App.css';
import Example1 from './components/Example1';
import Example2 from './components/Example2';
import Example3 from './components/Example3';
import Example4 from './components/Example4';
import Example5 from './components/Example5';
import { useState } from 'react';
import ArrayExample1 from './components/ArrayExample1';
import ArrayExample2 from './components/ArrayExample2';
import ArrayExample3 from './components/ArrayExample3';

function App() {
  const [status, setStatus] = useState(true);
  return (
    <div className="App">
      <header className="App-header">
        {/* <Example1></Example1> */}
        {/* <Example2></Example2> */}
        {/* <Example3></Example3> */}
        {/* <Example4></Example4> */}
        {
          // status ? <Example5></Example5> : <h1>Unmounted</h1>
        }
        {/* <button onClick={()=>setStatus(!status)}>Toggle</button> */}
        

        {/* <ArrayExample1></ArrayExample1> */}
        {/* <ArrayExample2></ArrayExample2> */}
      <ArrayExample3></ArrayExample3>
      </header>
    </div>
  );
}

export default App;

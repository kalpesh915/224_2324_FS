import logo from './logo.svg';
import './App.css';
import LifeCycle1 from './components/LifeCycle1';
import LifeCycle2 from './components/LifeCycle2';
import LifeCycle3 from './components/LifeCycle3';
import LifeCycle4 from './components/LifeCycle4';
import LifeCycle5 from './components/LifeCycle5';
import LifeCycle6 from './components/LifeCycle6';
import { useState } from 'react';
import FragmentDemo1 from './components/FragmentDemo1';
import FragmentDemo2 from './components/FragmentDemo2';
import FragmentDemo3 from './components/FragmentDemo3';
import FragmentDemo4 from './components/FragmentDemo4';
import StyleDemo1 from './components/StyleDemo1';
import StyleDemo2 from './components/StyleDemo2';
import StyleDemo3 from './components/StyleDemo3';
import StyleDemo4 from './components/StyleDemo4';
import StyleDemo5 from './components/StyleDemo5';
import StyleDemo6 from './components/StyleDemo6';

function App() {

  let [status, setStatus] = useState(true);

  return (
    <div className="App">
      <header className="App-header">
        {/* <LifeCycle1></LifeCycle1> */}
        {/* <LifeCycle2></LifeCycle2> */}
        {/* <LifeCycle3></LifeCycle3> */}
        {/* <LifeCycle4></LifeCycle4> */}
        {/* <LifeCycle5></LifeCycle5> */}
        {/* <LifeCycle6></LifeCycle6> */}

        {
          // status ? <LifeCycle6></LifeCycle6> : <h1>Unmounted</h1>
        }

        {/* <button onClick={()=>setStatus(!status)}>Toggle</button> */}

        {/* <FragmentDemo1></FragmentDemo1> */}
        {/* <FragmentDemo2></FragmentDemo2> */}
        {/* <FragmentDemo3></FragmentDemo3> */}
        {/* <FragmentDemo4></FragmentDemo4> */}

        {/* <StyleDemo1></StyleDemo1> */}
        {/* <StyleDemo2></StyleDemo2> */}
        {/* <StyleDemo3></StyleDemo3> */}
        {/* <StyleDemo4></StyleDemo4> */}
        {/* <StyleDemo5></StyleDemo5> */}
        <StyleDemo6></StyleDemo6>
      </header>
    </div>
  );
}

export default App;

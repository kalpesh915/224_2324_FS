import logo from './logo.svg';
import './App.css';
import ChildComponent1 from './components/ChildComponent1';
import PureComponentExample1 from './components/PureComponentExample1';
import PureComponentExample2 from './components/PureComponentExample2';
import UseMemoExample1 from './components/UseMemoExample1';
import RefExample1 from './components/RefExample1';
import RefExample2 from './components/RefExample2';
import ForwordRefExample from './components/ForwordRefExample';
import { useRef } from 'react';
import ControlledComponent from './components/ControlledComponent';
import UnControlledComponent from './components/UnControlledComponent';

function App() {

  let fnameRef = useRef(null);

  function greetings(username) {
    alert("Welcome to world of React JS "+username);
  }

  function updateRef(){
    fnameRef.current.style.color = "red";
  }

  return (
    <div className="App">
      <header className="App-header">
        {/* <ChildComponent1 greet={greetings}></ChildComponent1> */}
        {/* <PureComponentExample1></PureComponentExample1> */}
        {/* <PureComponentExample2></PureComponentExample2> */}
        {/* <UseMemoExample1></UseMemoExample1> */}
        {/* <RefExample1></RefExample1> */}
        {/* <RefExample2></RefExample2> */}

        {/* <ForwordRefExample ref={fnameRef}></ForwordRefExample> */}
        {/* <button onClick={()=> updateRef()}>Update Ref</button> */}

        {/* <ControlledComponent></ControlledComponent> */}
        <UnControlledComponent></UnControlledComponent>

      </header>
    </div>
  );
}

export default App;

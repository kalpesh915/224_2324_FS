import logo from './logo.svg';
import './App.css';
import StateDemo1 from './components/StateDemo1';
import StateDemo2 from './components/StateDemo2';
import { useState } from 'react';
import PropsDemo1 from './components/PropsDemo1';
import PropsDemo2 from './components/PropsDemo2';
import PropsDemo3 from './components/PropsDemo3';
import PropsDemo4 from './components/PropsDemo4';
import PropsDemo5 from './components/PropsDemo5';
import PropsDemo6 from './components/PropsDemo6';
import PropsDemo7 from './components/PropsDemo7';
import Input1 from './components/Input1';
import Input2 from './components/Input2';
import Input3 from './components/Input3';

function App() {

  let [fname, setFname] = useState("Yash");
  let [student, setStudent] = useState({fname:"Yash", lname:"Singal", city:"Rajkot"});

  let [fn, setFn] = useState("Rajiv");
  let [ln, setLn] = useState("Shekh");
  let [ct, setCt] = useState("Surat");

  return (
    <div className="App">
      <header className="App-header">
       {/* <StateDemo1></StateDemo1> */}
       {/* <StateDemo2></StateDemo2> */}
       {/* <PropsDemo1 fname={fname}></PropsDemo1> */}
       {/* <PropsDemo2 fname={fname}></PropsDemo2> */}
       {/* <PropsDemo3 data={student} /> */}
       {/* <PropsDemo4 data={{fn, ln, ct}}></PropsDemo4> */}
       {/* <PropsDemo5 data={{fn, ln, ct}}></PropsDemo5> */}
       {/* <PropsDemo6 data={student} /> */}
       {/* <PropsDemo7 data={student}></PropsDemo7> */}
       
       {/* <button onClick={()=>setStudent({fname: "Viraj", lname: "Bhatti", city:"Rajkot"})}>Update Student</button> */}

       {/* <Input1></Input1> */}
       {/* <Input2></Input2> */}
       <Input3></Input3>
      </header>
    </div>
  );
}

export default App;

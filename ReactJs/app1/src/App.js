import logo from './logo.svg';
import './App.css';
import Rajkot from './components/Rajkot';
import Gandhinagar from './components/Gandhinagar';
import { Ahamdabad, Baroda, Surat } from './components/City';
import Junagadh from './components/Junagadh';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        {/* <h1>Welcome to React</h1>
        <p>Welcome to world of Frontend</p> */}
        {/* <Rajkot></Rajkot> */}
        {/* <Gandhinagar></Gandhinagar> */}

        {/* <Ahamdabad></Ahamdabad>
        <Surat />
        <Baroda /> */}

        <Junagadh></Junagadh>
        
      </header>
    </div>
  );
}

export default App;

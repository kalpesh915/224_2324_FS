import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Link, Route, Routes } from 'react-router-dom';
import Student from './Student';

function App() {
  const students = [
    {roll:1, fname:"Yash", lname:"Chavda", city:"Rajkot"},
    {roll:2, fname:"Viraj", lname:"Bhatti", city:"Rajkot"},
    {roll:3, fname:"Rajiv", lname:"Shekh", city:"Rajkot"},
    {roll:4, fname:"Prince", lname:"Gajipara", city:"Rajkot"},
    {roll:5, fname:"Bhavya", lname:"Dava", city:"Rajkot"},
    {roll:6, fname:"Keyur", lname:"Ramani", city:"Rajkot"},
    {roll:7, fname:"Het", lname:"Manani", city:"Rajkot"},
    {roll:8, fname:"Yash", lname:"Single", city:"Rajkot"},
  ];
  return (
    <div className="App">
      <BrowserRouter>
        <nav className='navbar navbar-expand-sm bg-dark navbar-dark'>
          <ul className='navbar-nav'>
            {
              /*students.map((student) => <li className='nav-item'>
                <Link className='nav-link' to={"/student/"+student.roll}>{student.fname}
                </Link></li>) */

                students.map((student) => <li className='nav-item'>
                <Link className='nav-link' to={"/student/"+student.roll+"/"+student.fname+"/"+student.lname+"/"+student.city}>{student.fname}
                </Link></li>)
            }
          </ul>
        </nav>

        <Routes>
          {/* <Route path='/student/:roll' element={<Student></Student>}></Route> */}
          <Route path='/student/:roll/:fname/:lname/:city' element={<Student></Student>}></Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;

import logo from './logo.svg';
import './App.css';
import Home from './components/Home';
import About from './components/About';
import Products from './components/Products';
import Services from './components/Services';
import Contact from './components/Contact';

import { BrowserRouter, Routes, Route, Link } from 'react-router-dom';
import Error404Page from './components/Error404Page';

// function App() {
//   return (
//     <div className="App">
//      <Home></Home>
//      <About></About>
//      <Products></Products>
//      <Services></Services>
//      <Contact></Contact>
//     </div>
//   );
// }

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <nav className='navbar navbar-expand-sm bg-dark navbar-dark'>
          <ul className='navbar-nav'>
            <li className='nav-item'><Link className='nav-link' to={"/"}>Home</Link></li>
            <li className='nav-item'><Link className='nav-link' to={"/about"}>About</Link></li>
            <li className='nav-item'><Link className='nav-link' to={"/products"}>Products</Link></li>
            <li className='nav-item'><Link className='nav-link' to={"/services"}>Services</Link></li>
            <li className='nav-item'><Link className='nav-link' to={"/contact"}>Contact</Link></li>
          </ul>
        </nav>

        <Routes>
          <Route path='/' element={<Home></Home>}></Route>
          <Route path='/about' element={<About></About>}></Route>
          <Route path='/products' element={<Products></Products>}></Route>
          <Route path='/services' element={<Services></Services>}></Route>
          <Route path='/contact' element={<Contact></Contact>}></Route>
          <Route path='*' element={<Error404Page></Error404Page>}></Route>
        </Routes>

      </BrowserRouter>
     
    </div>
  );
}

export default App;

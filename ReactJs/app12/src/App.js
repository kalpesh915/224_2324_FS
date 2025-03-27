import logo from './logo.svg';
import './App.css';

const APIURL = "http://localhost:3000/students";

// GET
function getAllData() {
  fetch(APIURL).then((response) => {
    //console.log(response);
    response.json().then((result) => {
      console.log(result);
    });
  })
}

// POST API
function addNewData() {
  const fname = prompt("Enter First Name");
  const lname = prompt("Enter First Name");

  fetch(APIURL, {
    method: "POST",
    headers: {
      'Content-type': 'Application/json',
      'Accept': 'Application/json'
    }, body: JSON.stringify({ fname, lname })
  }).then((response) => {
    response.json().then((result) => {
      console.log(result);
    })
  })
}

// GET
function getDataById() {
  const id = prompt("Enter ID to Get Data");
  fetch(APIURL + "/" + id).then((response) => {
    response.json().then((result) => {
      console.log(result);
    });
  })
}

// PUT
function updateData() {
  const id = prompt("Enter ID for Update Data");
  const fname = prompt("Enter First Name");
  const lname = prompt("Enter Last Name");

  fetch(APIURL + "/" + id, {
    method: "PUT",
    headers: {
      'Content-Type': 'Application/json',
      'Accept': 'Application/json'
    }, body: JSON.stringify({ fname, lname })
  }).then((response) => {
    response.json().then((result) => {
      console.log(result);
    })
  })
}

// DELETE API
function deleteData() {
  const id = prompt("Enter ID to Delete Data");

  fetch(APIURL + "/" + id, {
    method: "DELETE"
  }).then((response) => {
    response.json().then((result) => {
      console.log(result);
    });
  })
}

function App() {
  return (
    <div className="App">
      <button onClick={() => getAllData()}>Get All Data</button>
      <button onClick={() => addNewData()}>Add New Data</button>
      <button onClick={() => getDataById()}>Get Data By ID</button>
      <button onClick={() => updateData()}>Update Data</button>
      <button onClick={() => deleteData()}>Delete Data</button>
    </div>
  );
}

export default App;

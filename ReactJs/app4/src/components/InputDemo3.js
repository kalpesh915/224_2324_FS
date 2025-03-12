import { useState } from "react";

function InputDemo3(){
    let [username, setUsername] = useState({fname:"", lname:""});

    return <>
        <h1>Example of Input in React JS</h1>
        <input type="text" placeholder="Enter Your First Name" onChange={(e)=>setUsername({...username, fname: e.target.value})}></input><br />
        <input type="text" placeholder="Enter Your Last Name" onChange={(e)=>setUsername({...username, lname:e.target.value})}></input><br />
        <h1>Welcome {username.fname} {username.lname}</h1>
    </>
}

export default InputDemo3;
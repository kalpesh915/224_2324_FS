import { useState } from "react";

function InputDemo2(){
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");

    return <>
        <h1>Example of Input in React JS</h1>
        <input type="text" placeholder="Enter Your First Name" onChange={(e)=>setFname(e.target.value)}></input><br />
        <input type="text" placeholder="Enter Your Last Name" onChange={(e)=>setLname(e.target.value)}></input><br />
        <h1>Welcome {fname} {lname}</h1>
    </>
}

export default InputDemo2;
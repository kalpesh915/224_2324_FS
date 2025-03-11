import { useState } from "react";

function Input2(){
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");
    return <>
        <h1>Example of Input in React JS</h1>
        <input type="text" onChange={(e)=> setFname(e.target.value)} />
        <input type="text" onChange={(e)=> setLname(e.target.value)} />
        <h1>Welcome {fname} {lname}</h1>
    </>
}

export default Input2;
import { useState } from "react";

function Input3(){
    let [fname, setFname] = useState("Rajiv");
    let [lname, setLname] = useState("Shekh");
    return <>
        <h1>Example of Input in React JS</h1>
        <input type="text" onChange={(e)=> setFname(e.target.value)} value={fname}/>
        <input type="text" onChange={(e)=> setLname(e.target.value)} value={lname}/>
        <h1>Welcome {fname} {lname}</h1>
    </>
}

export default Input3;
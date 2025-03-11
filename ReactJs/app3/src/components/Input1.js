import { useState } from "react";

function Input1(){
    let [fname, setFname] = useState("");
    return <>
        <h1>Example of Input in React JS</h1>
        {/* 
            On Change event of input field call function and set first name
            with events target value, here is event called by our input field
            and our js consider input field as target and set value of input field to our fname state
        */}
        <input type="text" onChange={(e)=> setFname(e.target.value)} />
        <h1>Welcome {fname}</h1>
    </>
}

export default Input1;
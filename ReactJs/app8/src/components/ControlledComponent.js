import { useState } from "react";

function ControlledComponent(){
    let [fname, setFname] = useState("");

    return <>
        <h1>Example of Controlled Component</h1>
        <input type="text" name="fname" id="fname" placeholder="Enter First Name" onChange={(e)=>setFname(e.target.value)}></input>

        <h1>Welcome {fname}</h1>
    </>
}

export default ControlledComponent;
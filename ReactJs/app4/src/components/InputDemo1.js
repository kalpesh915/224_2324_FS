import { useState } from "react";

function InputDemo1(){
    let [username, setUserName] = useState("");
    return <>
        <h1>Example of Input in React JS</h1>
        <input type="text" placeholder="Enter Your Name" onChange={(e)=>setUserName(e.target.value)}></input>
        <h1>Welcome {username}</h1>
    </>
}

export default InputDemo1;
import { useState } from "react";

function Example1(){
    
    let [counter, setCounter] = useState(1);

    return <>
        <h1>Example of Hooks</h1>
        <h1>Value of Counter is {counter}</h1>
        <button onClick={()=>setCounter(counter+1)}>Update</button>
    </>
}

export default Example1;
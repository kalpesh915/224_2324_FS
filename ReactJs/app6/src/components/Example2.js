import { useEffect, useState } from "react";

function Example2(){
    
    let [counter, setCounter] = useState(1);

    useEffect(()=> {
        // Work as Render
        console.log("Use Effect Called");
    });

    return <>
        <h1>Example of Hooks</h1>
        <h1>Value of Counter is {counter}</h1>
        <button onClick={()=>setCounter(counter+1)}>Update</button>
    </>
}

export default Example2;
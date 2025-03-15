import { useEffect, useState } from "react";

function Example4(){
    
    let [counter1, setCounter1] = useState(1);
    let [counter2, setCounter2] = useState(1);

    useEffect(()=> {
        console.log("Use Effect 1 Called");
    },[counter1]);

    useEffect(()=> {
        console.log("Use Effect 2 Called");
    }, [counter2]);

    return <>
        <h1>Example of Hooks</h1>
        <h1>Value of Counter1 is {counter1} and Counter2 is {counter2}</h1>
        <button onClick={()=>setCounter1(counter1+1)}>Update</button>
        <button onClick={()=>setCounter2(counter2+1)}>Update</button>
    </>
}

export default Example4;

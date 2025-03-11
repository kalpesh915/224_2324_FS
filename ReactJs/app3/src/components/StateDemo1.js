/*
    How to add state in Functional Component
*/
import { useState } from "react";

 

function StateDemo1(){

    //  let [stateName, stateUpdateFunction] = useState(defaultValue);
    let [count, setCount] = useState(1);

    return <>
        <h1>Example of State in Functional Component</h1>
        <h1>Value of Count is {count}</h1>
        <button onClick={()=> setCount(count + 1)}>Update</button>
    </>
}

export default StateDemo1;
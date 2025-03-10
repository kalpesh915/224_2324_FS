import { useState } from "react";

function StateDemo3(){

    /*
        let [stateName, stateUpdateFunction] = useState(default Value);
    */
    let [ip1, setIp1] = useState(1);
    return <>
        <h1>Example of State in React JS</h1>

        <h1>Value of ip1 is {ip1}</h1>
        <button onClick={()=>setIp1(ip1 + 1)}>Update</button>
    </>
}

export default StateDemo3;
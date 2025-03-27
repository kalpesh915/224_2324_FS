import { useState } from "react";

function PreviousStateinFunction(){
    let [count, setCount] = useState(0);
    return <>
        <h1>Value of Count is {count}</h1>
        {/* <button onClick={()=>setCount(count + 1)}>Update</button> */}
        {/* <button onClick={()=>setCount((previous) => {
            console.log("Previous Value is "+previous);
            return count + 1;
        })}>Update</button> */}
        <button onClick={()=>setCount((previous) => {
            console.log("Previous Value is "+previous);
            return Math.ceil(Math.random() * 10);
        })}>Update</button>
    </>
}

export default PreviousStateinFunction;
import { useMemo, useState } from "react";

function UseMemoExample1(){
    let [counter, setCounter] = useState(1);
    
    useMemo(()=>{
        console.log("Use Memo Called");
    }, [counter]);

    
    return <>
        <h1>Example of Use Memo</h1>
        <h1>Counter is {counter}</h1>
        {/* <button onClick={()=>setCounter(counter + 1)}>Update Counter</button> */}
        <button onClick={()=>setCounter(10)}>Update Counter</button> 
    </>
}

export default UseMemoExample1;
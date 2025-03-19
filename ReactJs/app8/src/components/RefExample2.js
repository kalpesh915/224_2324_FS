import { useRef } from "react";

function RefExample2(){

    let fnameRef = useRef();

    function updateRef(){
        fnameRef.current.style.color = "red";
    }

    return <>
        <h1>useRef Hook in Function Component</h1>
        <input type="text" name="fname" id="fname" placeholder="Enter First Name" ref={fnameRef}></input>
        <button onClick={()=>updateRef()}>Click Me</button>
    </>
}

export default RefExample2;
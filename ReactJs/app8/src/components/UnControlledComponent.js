import { useRef, useState } from "react";

function UnControlledComponent(){
    let fnameRef = useRef();

    function printMessage(){
        console.log(fnameRef.current.value);
    }

    return <>
        <h1>Example of Un-Controlled Component</h1>
        <input type="text" name="fname" id="fname" placeholder="Enter First Name" ref={fnameRef}></input>
        <button onClick={printMessage}>Click Here</button>
    </>
}

export default UnControlledComponent;
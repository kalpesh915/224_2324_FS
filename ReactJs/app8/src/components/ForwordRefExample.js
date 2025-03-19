import { forwardRef } from "react";
function ForwordRefExample(Props, ref){
    return <>
        <h1>Example of Forword Ref in React JS</h1>
        <input type="text" name="fname" id="fname" placeholder="Enter First Name" ref={ref}></input>
    </>
}

export default forwardRef(ForwordRefExample);
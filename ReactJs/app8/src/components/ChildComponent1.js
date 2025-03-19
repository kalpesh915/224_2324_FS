import { useState } from "react";

function ChildComponent1(Props){

    let [username, setUsername] = useState("Rajiv Shekha");
    return <>
        <h1>Child Component</h1>
        <button onClick={()=>Props.greet(username)}>Click Me</button>
    </>
}

export default ChildComponent1;
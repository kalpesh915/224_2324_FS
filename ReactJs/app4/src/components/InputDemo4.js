import { useState } from "react";

function InputDemo4() {
    
    let [username, setUsername] = useState({ fname: "", lname: "" });

    function handleForm(e){
        e.preventDefault();
        //console.log(e.target.fname.value);
        setUsername({
            fname: e.target.fname.value,
            lname: e.target.lname.value,
        });
    }

    return <>
        <h1>Example of Input in React JS</h1>
        <form onSubmit={handleForm}>
            <input type="text" placeholder="Enter Your First Name" id="fname" required /><br />
            <input type="text" placeholder="Enter Your Last Name" id="lname" required /><br />
            <input type="submit" value="Store Data"></input>
        </form>
        <h1>Welcome {username.fname} {username.lname}</h1>
    </>
}

export default InputDemo4;
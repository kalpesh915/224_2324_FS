import { Component, createRef } from "react";

class RefExample1 extends Component{
    constructor(){
        super();
        this.fnameRef = createRef();
    }

    updateRef(){
        this.fnameRef.current.style.color = "white";
        this.fnameRef.current.style.backgroundColor = "black";
        this.fnameRef.current.style.padding = "20px";
    }

    render(){
        return <>
            <h1>Example of Ref in Class Component</h1>
            <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" ref={this.fnameRef}></input>
            <button onClick={()=> this.updateRef()}>Click Me</button>
        </>
    }
}

export default RefExample1;
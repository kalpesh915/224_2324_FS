import { Component } from "react";

class StateDemo4 extends Component{
    constructor(){
        super();

        this.state = {
            ip1 : 1
        }
    }

    render(){
        return <>
            <h1>Example of State in Class Component</h1>
            <h1>Value of ip1 is {this.state.ip1}</h1>
            <button onClick={()=>{this.setState({ip1 : this.state.ip1 + 1})}}>Update</button>
        </>
    }
}

export default StateDemo4;
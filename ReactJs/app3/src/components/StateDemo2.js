/*
    How to add state in Class Component
*/
import { Component } from "react";

class StateDemo2 extends Component {
    constructor() {
        super();

        this.state = {
            count : 1
        }
    }

    render() {
        return <>
            <h1>Example of State in Class Component</h1>
            <h1>Value of Count is {this.state.count}</h1>
            <button onClick={()=> this.setState({count: this.state.count+1})}>Update</button>
        </>
    }
}

export default StateDemo2;
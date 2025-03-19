import { Component } from "react"

class PureComponentExample1 extends Component{
    constructor(){
        super();

        this.state = {
            counter : 1
        }
    }

    render(){
        console.log("Render Function Called");
        return <>
            <h1>Example of Pure Component</h1>
            <h1>Counter is {this.state.counter}</h1>
            {/* <button onClick={()=>this.setState({counter: this.state.counter + 1})}>Update Counter</button> */}
            <button onClick={()=>this.setState({counter: 10})}>Update Counter</button>
        </>
    }
}

export default PureComponentExample1;
import {Component} from 'react';

class LifeCycle1 extends Component{
    constructor(){
        super();
        console.log("Constructor Life Cycle Method Called");
    }

    render(){
        console.log("Render Life Cycle Method Called");
        return <>
            <h1>Example of Life Cycle Methods of React JS</h1>
        </>
    }
}

export default LifeCycle1;
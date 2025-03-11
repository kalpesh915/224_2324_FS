/*
    how to access props in class component
*/

import { Component } from "react";

class PropsDemo2 extends Component {
    constructor() {
        super();
    }

    render() {
        return <>
            <h1>Example of Props Demo in class component</h1>
            <h1>Welcome {this.props.fname}</h1>
        </>
    }

}

export default PropsDemo2;
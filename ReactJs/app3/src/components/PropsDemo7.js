/*
    how to access props in class component
*/

import { Component } from "react";

class PropsDemo7 extends Component {
    constructor() {
        super();
    }

    render() {
        return <>
            <h1>Example of Props Demo in Class component</h1>
            <h1>Welcome {this.props.data.fname} {this.props.data.lname} to {this.props.data.city}</h1>
        </>
    }

}

export default PropsDemo7;
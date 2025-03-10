import React from "react";

function Sample4(){
    // With JSX
    /*return <>
        <h1>Welcome to world of React components</h1>
    </>*/

    // Without JSX
    return React.createElement("h1", null, "Welcome to React withuot JSX Syntax");
}

export default Sample4;
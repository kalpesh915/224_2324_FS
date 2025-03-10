function Event1(){

    function greetings(){
        alert("Good Morning");
    }

    return <>
        <h1>Example of Event in React JS</h1>
        {/* <button onClick="greetings()">Click Me</button> */}
        {/* <button onClick={greetings()}>Click Me</button> */}
        <button onClick={greetings}>Click Me</button>
    </>
}

export default Event1;
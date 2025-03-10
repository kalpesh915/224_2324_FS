function Event2(){

    function greetings(username){
        alert("Good Morning "+username);
    }

    return <>
        <h1>Example of Event in React JS</h1>
        {/* <button onClick={greetings("Viraj Bhatti")}>Click Me</button> */}
        <button onClick={()=> greetings("Viraj")}>Click Me</button>
    </>
}

export default Event2;
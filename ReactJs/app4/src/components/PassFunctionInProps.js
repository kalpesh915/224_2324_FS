function PassFunctionInProps(Props){
    return <>
        <h1>Pass Function in Props</h1>
        <button onClick={()=>Props.data("Yash Viraj Rajiv")}>Click Me</button>
    </>
}

export default PassFunctionInProps;
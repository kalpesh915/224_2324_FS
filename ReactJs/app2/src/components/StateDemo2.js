function StateDemo2(){
    let ip1 = 10;

    function updateIp1(){
        ip1++;
        console.log(ip1);
    }

    return <>
        <h1>Example of State in React JS</h1>

        <h1>Value of ip1 is {ip1}</h1>
        <button onClick={updateIp1}>Update</button>
    </>
}

export default StateDemo2;
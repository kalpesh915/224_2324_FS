function ArrayExample2(){

    const students = [
        "Viraj Bhatti",
        "Yash Singal",
        "Rajiv Shekh"
    ];

    return <>
        <h1>Example of Array in React JS</h1>
        {
            // students.map((tmp) => <h1>Welcome {tmp}</h1>)
            students.map((tmp) => <p>Welcome {tmp}</p>)
        }
    </>
}

export default ArrayExample2;
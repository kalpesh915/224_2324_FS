function ArrayExample1(){

    const students = [
        "Viraj Bhatti",
        "Yash Singal",
        "Rajiv Shekh"
    ];

    let op = "";
    for(let i=0; i<students.length; i++){
        op += students[i]+" ";
    }

    return <>
        <h1>Example of Array in React JS</h1>
        <h1>{op}</h1>
    </>
}

export default ArrayExample1;
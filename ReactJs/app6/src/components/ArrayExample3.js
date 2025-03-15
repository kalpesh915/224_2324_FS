function ArrayExample3(){

    const students = [
        {id: 1, fname: "Yash", lname:"Singal", city:"Rajkot"},
        {id: 2, fname: "Viraj", lname:"Bhatti", city:"Rajkot"},
        {id: 3, fname: "Rajiv", lname:"Shekh", city:"Rajkot"}
    ];

    return <>
        <h1>Example of Array in React JS</h1>
        {
            students.map((tmp) => <p>Welcome {tmp.fname}  {tmp.lname} to {tmp.city} your Id is {tmp.id}</p>)
        }
    </>
}

export default ArrayExample3;
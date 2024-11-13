/*
    Destructuring
*/ 

let student = {
    roll: 1,
    fname: "Rajiv",
    lname: "Shekh",
    city: "Rajkot"
}

let {fname, lname} = student;
console.log("Welcome",fname,lname);
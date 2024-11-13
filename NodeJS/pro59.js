/*
    Destructuring
*/ 

let firstName = "John";
let lastName = "Doe";
console.log(firstName, lastName);

// Destructing
[firstName, lastName] = [lastName, firstName];

console.log(firstName, lastName);
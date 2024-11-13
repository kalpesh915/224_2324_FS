/*
    Destructuring
*/ 

// Create an Array
const numbers = [10, 20, 30, 40, 50, 60, 70];

// Destructuring
const [a,b, ...rest] = numbers 
console.log(a);
console.log(b);
console.log(rest);
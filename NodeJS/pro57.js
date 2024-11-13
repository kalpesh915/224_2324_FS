/*
    Destructuring
*/ 
// Create an Array
const fruits = ["Bananas", "Oranges", "Apples", "Mangos"];
// Destructuring
let {[0]:fruit1 ,[2]:fruit2} = fruits;
console.log(fruit1, fruit2);
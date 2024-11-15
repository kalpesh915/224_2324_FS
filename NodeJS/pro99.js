/*
    But a function can also access variables defined outside the function, like this:
*/
let a = 4;
function myFunction() {
    return a * a;
}

console.log(myFunction());
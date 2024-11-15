/*
    
*/
// outer
const add = (function(){
    let counter = 0;

    // nested function
    return function plus(){
        counter++;
        return counter;
    }
    
})();

console.log(add());
console.log(add());
console.log(add());
console.log(add());
console.log(add());
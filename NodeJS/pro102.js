/*
    
*/
let counter = 1; // global

function add(){
    let counter = 1; //local
    counter++;
    return counter;
}

console.log(counter);
add();
add();
add();
console.log(counter);
/*
    "I will call back later!"
    A callback is a function passed as an argument to another function. This technique allows a function to call another function. A callback function can run after another function has finished
*/

function printer(data){
    console.log(data);
}

function sum(i, j){
    let ans = i + j;
    printer(ans);
}

sum(11);

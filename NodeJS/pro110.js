/*
    JavaScript Callbacks
    A callback is a function passed as an argument to another function.
    Using a callback, you could call the calculator function (myCalculator) with a callback (myCallback), and let the calculator function run the callback after the calculation is finished:
*/

function printer(data){
    console.log(data);
}

function sum(i, j, myCallback){
    let ans = i + j;
    myCallback(ans);
}

sum(11, 22, printer);

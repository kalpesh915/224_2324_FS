/*
    "I will call back later!"
    A callback is a function passed as an argument to another function. This technique allows a function to call another function. A callback function can run after another function has finished
*/

function msg1(){
    console.log("This is msg1()");
}

function msg2(){
    console.log("This is msg2()");
}

msg1();
msg2();
/*
    "I will finish later!"
    Functions running in parallel with other functions are called asynchronous
    A good example is JavaScript setTimeout()
*/

setInterval(()=>{
    console.log("Date is "+Date());
}, 2000);

console.log("Program Completed");
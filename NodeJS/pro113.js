/*
    "I will finish later!"
    Functions running in parallel with other functions are called asynchronous
    A good example is JavaScript setTimeout()
*/

setTimeout(()=>{
    console.log("Date is "+Date());
}, 5000);

console.log("Program Completed");
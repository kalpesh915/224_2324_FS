/*
    "I will finish later!"
    Functions running in parallel with other functions are called asynchronous
    A good example is JavaScript setTimeout()
*/

setTimeout(printer, 5000);

function printer(){
    console.log("Date is "+Date());
}

console.log("Program Completed");
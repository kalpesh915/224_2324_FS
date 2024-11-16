/*
    "I Promise a Result!"
    "Producing code" is code that can take some time
    "Consuming code" is code that must wait for the result
    A Promise is an Object that links Producing code and Consuming code
*/

function printer(data) {
    console.log(data);
}

// producing code
const myPromise = new Promise((resolve, reject) => {
    let x = 15;

    setTimeout(() => {
        if (x >= 10) {
            resolve("Result is Positive");
        } else {
            reject("Result is Negative");
        }
    }, 5000);

});

// consuming code
myPromise.then((data) => {
    printer(data);
}, (error) => {
    printer(error)
});

console.log("Program is Completed");
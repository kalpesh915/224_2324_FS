/*
    JavaScript Callbacks
    A callback is a function passed as an argument to another function.
    Using a callback, you could call the calculator function (myCalculator) with a callback (myCallback), and let the calculator function run the callback after the calculation is finished:
*/

let data = [11, 22, -33, -44, -44, 33, 55, -98, 90, -34, -45, -6, -32, 89, -90];

let result = removeNegative(data, (x) => x > 0);

console.log(result);

function removeNegative(values, callback){
    let ans = [];

    for(let x of values){
        if(callback(x)){
            ans.push(x);
        }
    }

    return ans;
}

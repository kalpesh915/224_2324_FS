/*
    Array
*/

ip1 = [11, 22, 33, 44, 55, 66, 77, 88, 99, 111, 5];

let ans = ip1.some((tmp) => {
    return tmp >= 10;
});

console.log(ans);
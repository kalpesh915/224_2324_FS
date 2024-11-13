/*
    count how many digits in number
    1236789 = 7
*/

let x = 1236789;
let ans = 0;

while(x > 0){
    ans++;
    // x = x / 10;
    x = parseInt(x / 10);
}

console.log(ans);
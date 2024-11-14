/*
    function return value
    Rest Parameters
*/

function makeSum(...ip1){
    let tmp = 0;

    for(let x of ip1){
        tmp += x;
    }
    return tmp;
}

let ans = makeSum(11);
console.log("Sum is",ans);
ans = makeSum(11, 22);
console.log("Sum is",ans);
ans = makeSum(11, 22, 33);
console.log("Sum is",ans);
ans = makeSum(11, 22, 33, 44);
console.log("Sum is",ans);
ans = makeSum(11, 22, 33, 44, 55);
console.log("Sum is",ans);
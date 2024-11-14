/*
    function return value
*/

function makeSum(ip1 = 0, ip2 = 0, ip3 = 0){
    return ip1 + ip2 + ip3;
}

let ans = makeSum(11);
console.log("Sum is",ans);
ans = makeSum(11, 22);
console.log("Sum is",ans);
ans = makeSum(11, 22, 33);
console.log("Sum is",ans);
ans = makeSum();
console.log("Sum is",ans);
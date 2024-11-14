/*
    function return value
*/

function makeSum(ip1, ip2, ip3){
    if(ip1 == undefined){
        ip1 = 0;
    }
    if(ip2 == undefined){
        ip2 = 0;
    }
    if(ip3 == undefined){
        ip3 = 0;
    }
    return ip1 + ip2 + ip3;
}

let ans = makeSum(11, 22);
console.log("Sum is",ans);
ans = makeSum(11, 22, 33);
console.log("Sum is",ans);
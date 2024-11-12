let ip1 = 100;
let ip2 = 13;
let ip3 = 34;
let ans = 0;

if(ip1 > ip2 && ip1 > ip3){
    ans = ip1;
}else if(ip2 > ip1 && ip2 > ip3){
    ans = ip2;
}else{
    ans = ip3;
}

console.log("Maximum is ",ans);
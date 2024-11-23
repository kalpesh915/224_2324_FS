let fs = require("fs");

// synchronous read  
let data = fs.readFileSync("input1.txt");
console.log(data.toString());
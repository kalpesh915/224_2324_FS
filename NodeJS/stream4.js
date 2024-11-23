let fs = require("fs");
let zlib = require("zlib");

let readStream = fs.createReadStream('input.txt')
.pipe(zlib.createGzip())
.pipe(fs.createWriteStream('input.txt.gz'));

console.log("Program Compeleted");
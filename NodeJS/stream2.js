let fs = require("fs");
let data = "Welcome to wolrd of NodeJS with Sky";
let writeStream = fs.createWriteStream('output.txt');
writeStream.write(data, 'utf-8');
writeStream.end();

writeStream.on('error', (err)=>{
    console.log("Error while Writing", err);
});

writeStream.on('close', ()=>{
    console.log("Writing Completed");
});

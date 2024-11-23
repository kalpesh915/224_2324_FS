let fs = require("fs");
let data = "";
let readerStream = fs.createReadStream("input.txt");
readerStream.setEncoding("utf-8");

readerStream.on('data', (txt)=>{
    data += txt;
});

readerStream.on('end', ()=>{
    console.log("Reading Completed");
    console.log(data);
});

readerStream.on('error', (err)=>{
    console.log("Error is ",err);
});

readerStream.on('close', ()=>{
    console.log("Stream Closed");
});

readerStream.on('open', ()=>{
    console.log("Stream Opened");
});
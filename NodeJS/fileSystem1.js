let fs = require("fs");

// Asynchronous read  
fs.readFile("input1.txt", (err, data)=>{
    if(err){
        console.log("Error is ",err);
    }else{
        console.log("Data is ",data.toString());
    }
});
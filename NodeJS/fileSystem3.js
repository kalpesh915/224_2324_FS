let fs = require("fs");

fs.open("input1.txt", "r", (err, data)=>{
    if(err){
        console.log("Error is ",err);
    }else{
        console.log("Data is ", data);
    }
})
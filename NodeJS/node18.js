const fs = require("fs");

function fileReader(err, data){
    if(err){
        console.log("Error is ",err);
    }else{
        //return data;
        console.log(data);
    }
}

fs.readFile("pro1.txt", fileReader);
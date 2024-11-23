let fs = require("fs");

fs.stat("input1.txt", "r", (err, state)=>{
    if(err){
        console.log("Error is ",err);
    }else{
        //console.log(state);
        console.log(state.isFile());
        console.log(state.isDirectory());
        console.log(state.isSocket());
        console.log(state.isSymbolicLink());
    }
})
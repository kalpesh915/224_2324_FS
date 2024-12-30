const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    res.append('Warning', "Unable to Process");
    res.append('Error', "Unable to Process with Error");
    console.log(res.get("Warning"));
    console.log(res.get("Error"));
    res.send("Success");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
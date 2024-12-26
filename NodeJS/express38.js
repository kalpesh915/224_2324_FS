const express = require("express");
const app = express(); // Main

app.all("/", async (req, res) =>{
    res.send("GET Method Called on /");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
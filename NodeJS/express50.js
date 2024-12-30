const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    res.send("Completed");
    console.log(res.headersSent);
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
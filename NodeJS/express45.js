const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    console.log(req.get('Accept'));
    console.log(req.accepts('application/json'));
    console.log(req.accepts('text/plain'));
    res.send("Completed");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
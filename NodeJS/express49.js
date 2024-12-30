const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    //console.log(res.app);
    //console.log(res.app.get('views'));
    console.log(res.headersSent);
    res.send("Completed");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    console.log(req.get('Accept-Charset'));
    console.log(req.acceptsCharsets('UTF-8'));
    console.log(req.acceptsCharsets('UTF-16'));
    console.log(req.acceptsCharsets('ISO-8859-1'));
    res.send("Completed");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
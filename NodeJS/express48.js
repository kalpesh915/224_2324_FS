const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    console.log(req.get('Accept-Language'));
    console.log(req.acceptsLanguages('en-US'));
    console.log(req.acceptsLanguages('fr-CH'));
    res.send("Completed");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
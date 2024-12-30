const express = require("express");
const app = express();

app.use('/', function (req, res, next) {
    res.cookie("city", "Rajkot (Gujarat)", {expire: 100000 + Date.now()});
    res.send("Cookie Set");
    next();
})

app.get("/",async (req, res) => {
    res.send("Successfully Cookies Created");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
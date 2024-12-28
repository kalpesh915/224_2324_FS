const express = require("express");
const app = express();
const cookieParser = require("cookie-parser");

app.use(cookieParser());

app.get("/",async (req, res) => {
    req.cookies.title = "Sample Cookie";
    req.cookies.age = 100;
    console.log(req.cookies);
    res.send("Completed");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
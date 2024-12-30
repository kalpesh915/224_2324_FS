const express = require("express");
const app = express();

app.use('/', async (req, res, next) => {
    res.append("user", "Yash Singal");
    next();
});

app.get("/",async (req, res) => {
    console.log(res.get("user"));
    res.send("Success");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
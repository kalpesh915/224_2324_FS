const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    res.locals.fname = "Yash";
    res.locals.lname = "Singal";
    res.locals.age = 20;
    res.locals.gender = 'Male'
    console.log(res.locals);
    res.send("Success");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
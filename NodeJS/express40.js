const express = require("express");
const app = express();

const user = express.Router();
app.use("/user", user);

user.get("/demo",async (req, res) => {
    //console.log(req.app);
    //console.log(req.app._eventsCount);
    //console.log(req.baseUrl);
    if(req.baseUrl == "/user"){
        console.log("Login Form");
    }else{
        console.log("Signup Form");
    }
    res.send("Completed");
});

app.get("/",async (req, res) => {
    if(req.baseUrl == "/user"){
        console.log("Login Form");
    }else{
        console.log("Signup Form");
    }
    res.send("Completed");
});


app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
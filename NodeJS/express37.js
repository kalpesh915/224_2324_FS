const express = require("express");
const app = express(); // Main

app.get("/", async (req, res) =>{
    res.send("GET Method Called on /");
});

app.post("/", async (req, res) =>{
    res.send("POST Method Called on /");
});

app.put("/", async (req, res) =>{
    res.send("PUT Method Called on /");
});

app.delete("/", async (req, res) =>{
    res.send("DELETE Method Called on /");
});

app.patch("/", async (req, res) =>{
    res.send("PATCH Method Called on /");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
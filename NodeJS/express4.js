const express = require("express");
const app = express();

const PORT = process.env.PORT || 3000;

app.get("/users", (req, res)=>{
    res.send("Get Method Hit on /users API");
});

app.post("/users", (req, res)=>{
    res.send("Post Method Hit on /users API");
});

app.put("/users", (req, res)=>{
    res.send("Put Method Hit on /users API");
});

app.delete("/users", (req, res)=>{
    res.send("Delete Method Hit on /users API");
});

app.listen(PORT, ()=>{
    console.log(`Express JS Server Rnunning on ${PORT} Port Number`);
});
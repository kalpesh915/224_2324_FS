const express = require("express");
const app = express();

const PORT = process.env.PORT || 3000;

app.get("/", (req, res)=>{
    res.send("Welcome to Home Page");
});

app.get("/about", (req, res)=>{
    res.send("Welcome to About Page");
});

app.get("/services", (req, res)=>{
    res.send("Welcome to Services Page");
});

app.get("/login", (req, res)=>{
    res.send("Welcome to Login Page");
});


app.listen(PORT, ()=>{
    console.log(`Express JS Server Rnunning on ${PORT} Port Number`);
});
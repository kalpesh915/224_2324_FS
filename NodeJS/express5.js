const express = require("express");
const app = express();

const PORT = process.env.PORT || 3000;

app.get("/", (req, res)=>{
    res.set('Content-Type', 'text/html');
    res.send("<h1>Welcome to Home Page</h1>");
});

app.get("/about", (req, res)=>{
    res.set('Content-Type', 'text/html');
    res.send("<h1>Welcome to About Page</h1>");
});

app.listen(PORT, ()=>{
    console.log(`Express JS Server Rnunning on ${PORT} Port Number`);
});
const express = require("express");
const path = require("path");

const app = express();

const port = process.env.port || 3000;

/*
    static file register    
*/ 

app.use(express.static(path.join(__dirname, 'public')));

app.get("/", async (req, res) => {
    //console.log(path.join(__dirname, 'public'));
    res.send("Welcome to world of Static Files ");
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
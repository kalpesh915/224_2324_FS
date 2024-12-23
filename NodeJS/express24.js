const express = require("express");
const app = express();

const port = process.env.port || 3000;

/*
*/ 


app.get("/", async (req, res) => {
    res.send("Welcome to world of Static Files ");
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
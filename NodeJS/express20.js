const express = require("express");
const winston = require("winston");

const app = express();

const port = process.env.port || 3000;

/*
    EJS = (Embedded JavaScript Templating)
*/ 

app.set('view engine', 'ejs');
app.get("/", async (req, res) => {
    //res.send("EJS Example");
    res.render("page1");
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
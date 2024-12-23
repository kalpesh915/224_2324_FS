const express = require("express");
const winston = require("winston");

const app = express();

const port = process.env.port || 3000;

/*
    http://localhost:3000/rajiv/shekh
*/ 

app.set('view engine', 'ejs');
app.get("/:fname/:lname", async (req, res) => {
    console.log(req.params.fname, req.params.lname);
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
const express = require("express");
const app = express();

const port = process.env.port || 3000;

/*
    express.text() middleware
*/ 

app.use(express.urlencoded({extended: false}));

app.post("/", async (req, res) => {
    console.log(req.body);
    res.end();
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
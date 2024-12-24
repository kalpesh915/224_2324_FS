const express = require("express");
const app = express();

const port = process.env.port || 3000;

/*
    express.raw() middleware
*/ 

app.use(express.raw());

app.post("/", async (req, res) => {
    console.log(req.body);
    res.end();
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
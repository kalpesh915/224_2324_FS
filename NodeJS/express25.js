const express = require("express");
const app = express();

const port = process.env.port || 3000;

/*
    express.json() middleware
*/ 

app.use(express.json());

app.post("/", async (req, res) => {
    console.log(req.body);
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
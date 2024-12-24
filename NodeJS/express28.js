const express = require("express");
const app = express();
const BankRouter = require("./BankRoute");

const port = process.env.port || 3000;

/*
    express.Router() middleware
*/ 

app.use(BankRouter);

app.get("/", async (req, res) => {
    console.log("/ Route Working");
    res.end();
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
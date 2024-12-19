const express = require("express");
const app = express();
const basicRouters = require("./basicRouters");

const port = process.env.port || 3000;

app.use("/students", basicRouters);

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
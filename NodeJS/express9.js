const express = require("express");
const app = express();

const port = process.env.PORT || 3000;

app.get("/", (req, res) => {
    res.send("Home Page Loaded");
});

app.get("/about", (req, res) => {
    res.send("About us Page Loaded");
});

app.get("/contact", (req, res) => {
    res.send("Contact us Page Loaded");
});

app.listen(port, ()=>{
    console.log("Express JS Project Running on "+port+" Port Number");
});
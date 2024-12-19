const express = require("express");
const app = express();

const port = process.env.port || 3000;
// Get Method
app.get("/", (req, res) => {
    res.send("Get Method Called");
});

app.get("/student", (req, res) => {
    res.send("Get Method Called with Student");
});

app.post("/", (req, res) => {
    res.send("Post Method Called");
});

app.put("/", (req, res) => {
    res.send("Put Method Called");
});

app.patch("/", (req, res) => {
    res.send("Patch Method Called");
});

app.delete("/", (req, res) => {
    res.send("Delete Method Called");
});


app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
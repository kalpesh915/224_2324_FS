const express = require("express");
const app = express();

app.post("/check", async (req, res, next) => {
    res.send("This is POST Route");
    next();
});

app.get("/demo", async (req, res, next) => {
    res.send("This is GET Route");
    res.end();
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
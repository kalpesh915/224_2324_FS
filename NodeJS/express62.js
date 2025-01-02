const express = require("express");
const cookieparser = require("cookie-parser");
const app = express();


app.get("/", async (req, res) => {
    console.log(req.fresh);
    console.log(req.stale);
    console.log(req.subdomains);
    console.log(req.xhr);
    res.send();
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
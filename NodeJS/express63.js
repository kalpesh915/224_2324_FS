const express = require("express");
const cookieparser = require("cookie-parser");
const app = express();


app.get("/", async (req, res) => {
    //console.log(res.app);
    //res.send();
    //console.log(res.headersSent);
    res.locals.username = "Yash Singal";
    res.locals.age = 23;
    res.locals.gender = 'Male'
    console.log(res.locals);
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
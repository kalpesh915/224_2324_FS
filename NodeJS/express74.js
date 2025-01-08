const express = require("express");
const app = express();

function myRootMiddleware(req, res, next){
    console.log("Root Route Level Middleware Called");
    next();
}

function myDataMiddleware(req, res, next){
    console.log("Data Route Level Middleware Called");
    next();
}


app.get("/", myRootMiddleware, async (req, res) => {
    res.status(200).json({
        "message": "Root of Application Called",
    });
});

app.get("/data", myDataMiddleware, async (req, res) => {
    res.status(200).json({
        "message": "Data of Application Called",
    });
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
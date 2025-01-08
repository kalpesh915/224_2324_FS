const express = require("express");
const app = express();

function myGlobalMiddleware(req, res, next){
    console.log("App Level Middleware Called");
    next();
}
// used for all routes
app.use(myGlobalMiddleware);

app.get("/", async (req, res) => {
    res.status(200).json({
        "message": "Root of Application Called",
    });
});

app.get("/data", async (req, res) => {
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
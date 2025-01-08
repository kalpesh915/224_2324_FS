const express = require("express");
const app = express();
const parser = require("body-parser");

// Using body-parser middleware to parse JSON requests
app.use(parser.json());

app.post("/student/data", async (req, res) => {
    const reqData = req.body;
    console.log('Requested Data is ', reqData);
    res.status(200).json({
        "message": "Data Received Successfully",
        "data": reqData
    });
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
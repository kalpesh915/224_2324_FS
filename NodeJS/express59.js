const express = require("express");
const app = express();

app.get("/", async (req, res) => {
    //res.set("Content-Type", "text/plain");
    //res.set("Content-Type", "application/json");
    res.set("Content-Type", "text/html");
    res.format({
        text: function(){
            res.send("Response in Text Format");
        },
        html: function(){
            res.send("<h1>Response in HTML Format</h1>");
        },
        json: function(){
            res.send({"key" : "JSON Response Data"});
        }
    });
    
    res.send();
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
})
const express = require("express");
const app = express();

const port = process.env.port || 3000;
// Get Method
app.get("/", (req, res) => {
    //res.send("Get Method Called "+req.method);
    //res.send("Get Method Called "+req.path);
    //res.send("Get Method Called "+req.headers);
    //res.send("Get Method Called "+req.body);
    res.send("Get Method Called "+req.query);
});


app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
const express = require("express");
const app = express();

const port = process.env.port || 3000;

function sampleMiddleware(req, res, next){
    console.log("Middleware Called");
    next();
}

app.use(sampleMiddleware);

app.get("/", (req, res, next) => {
    res.send("Get Method Called");
});


app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
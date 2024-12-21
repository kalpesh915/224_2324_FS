const express = require("express");
const app = express();

const port = process.env.port || 3000;

function errorHandler(err, req, res, next){
    console.log("Error is "+err);
    res.status(500);
    res.send("Internal Server Error");
}

// error as middleware function
app.use(errorHandler);
//  Express does not catch asynchronous errors by default, so you need to handle them manually.
app.get("/", async (req, res, next) => {
    try{
        throw new Error("Custome Error");
    }catch(error){
        next(error);
    }
});


app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
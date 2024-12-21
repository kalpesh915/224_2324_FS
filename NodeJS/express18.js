const express = require("express");
const app = express();

const port = process.env.port || 3000;

/*
    Creating custom error classes can help manage different types of errors more effectively. Custom error classes can include additional properties and methods that provide more context about the error.
*/ 

class NotFoundError extends Error{
    constructor(message){
        super(message);
        this.name = "Not Found Error";
        this.statusCode = 404;
    }
}

app.get("/", async (req, res, next) => {
    try{
        throw new NotFoundError("Not Found Error Occure in Our Code");
    }catch(error){
        next(error);
    }
});

function errorHandler(err, req, res, next){
    console.log(err);
    res.status(err.statusCode || 500).json({ error: err.message });
}

app.use(errorHandler);

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
const express = require("express");
const winston = require("winston");

const app = express();

const port = process.env.port || 3000;

/*
    Logging errors is important for debugging and monitoring your application. You can use libraries like winston or morgan for more sophisticated logging.
*/ 

const logger = winston.createLogger({
    level: 'error',
    format: winston.format.json(),
    transports: [
        new winston.transports.File({ filename: 'error.log', level: 'error' })
    ]
});


app.get("/", async (req, res, next) => {
    try{
        throw new Error("Not Found Error Occure in Our Code");
    }catch(error){
        next(error);
    }
});

function errorHandler(err, req, res, next){
    logger.error(err.message, { metadata: Date()+' '+err.message+' '+err.stack });
    res.status(500).json({ error: err.message });
}

app.use(errorHandler);

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
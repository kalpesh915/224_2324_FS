const express = require("express");
const app = express();
app.use(express.urlencoded({extended : true}));

// Middlware 1 for printing Method and URL
const formMiddleware = (req, res, next) => {
    console.log(`Received a ${req.method} request to ${req.url}`);
    next();
}

// get Data
const formDataMiddleware = (req, res, next) => {
    const {username: geekName} = req.body;
    if(geekName){
        req.username = geekName;
    }
    next();
}

const userShowFunction = (req, res, next) => {
    const username = req.username || "Guest";
    res.send(`<h1>Hello, ${username}!</h1>`);
}

app.get("/", formMiddleware, async (req, res) => {
    res.send(`
        <h1>Middleware Example</h1>
        <form action='/msg' method='post'>
        <label for='username'>Enter Your Name : </label>
        <input type='text' name='username' id='username' required>
        <input type='submit' value='Send Data'>
        </form>`);
});

app.post("/msg", formMiddleware, formDataMiddleware, userShowFunction);


app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
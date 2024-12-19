const express = require("express");
const Router = express.Router();

Router.route("/")
.all((req, res, next) => {
    res.statusCode = 200;
    res.setHeader("Content-Type", "text/plain")
    next();
}).get((req, res, next) => {
    res.send("When a GET request is made, then this is the response sent to the client!");
}).post((req, res, next) => {
    res.send("When a POST request is made, then this is the response sent to the client!");
}).put((req, res, next) => {
    res.send("When a PUT request is made, then this is the response sent to the client!");
}).patch((req, res, next) => {
    res.send("When a PATCH request is made, then this is the response sent to the client!");
}).delete((req, res, next) => {
    res.send("When a DELETE request is made, then this is the response sent to the client!");
});

module.exports = Router;
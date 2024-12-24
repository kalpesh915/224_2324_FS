const express = require("express");
const BankRouter = express.Router();

BankRouter.route("/bank")
.get((req, res) =>{
    console.log("Bank Route Get Method Called");
    res.end();
}).post((req, res) =>{
    console.log("Bank Route Post Method Called");
    res.end();
}).put((req, res) =>{
    console.log("Bank Route Put Method Called");
    res.end();
}).delete((req, res) =>{
    console.log("Bank Route Delete Method Called");
    res.end();
});

module.exports = BankRouter;
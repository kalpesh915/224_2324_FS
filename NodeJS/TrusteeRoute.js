const express = require("express");
const TrusteeRouter = express.Router();

TrusteeRouter.get("/trustee", (req, res) => {
    console.log("Trustee Route Called");
});

module.exports = TrusteeRouter;
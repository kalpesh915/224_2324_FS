const express = require("express");
const app = express();
const router = require("./route");

app.use("/", router);

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
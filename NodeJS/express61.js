const express = require("express");
const cookieparser = require("cookie-parser");
const app = express();

app.enable('trust proxy');
app.use(express.json());
app.use(cookieparser());

app.get("/", async (req, res) => {
    req.signedCookies.title = "Username";    
    req.signedCookies.year = "2025";    
    console.log(req.signedCookies);
    res.send();
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
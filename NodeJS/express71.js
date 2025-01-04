const express = require("express");
const app = express();
const session = require("express-session");

app.use(session({
    secret: "rajkot",
    resave: false,
    saveUninitialized: true
}));

app.get("/", async (req, res) => {
    req.session.username = "Rajiv";
    res.send(`Hey Geek! Session is set! Now Go to 
        <a href="/msg">/msg</a> to retrieve the session.`);
});

app.get("/msg", (req, res) => {
    const username = req.session.username || "Guest User";
    res.send(`Welcome ${username}`);
});


app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
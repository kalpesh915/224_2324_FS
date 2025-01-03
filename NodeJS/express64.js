const express = require("express");
const app = express();
const router = express.Router();

router.all("/students", async (req, res) => {
    res.send("Student Route Called");
    res.end();
});

router.all("/teachers", async (req, res) => {
    res.send("Teacher Route Called");
    res.end();
});

app.use(router);

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
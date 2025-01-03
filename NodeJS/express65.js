const express = require("express");
const app = express();
const router = express.Router();

router.get("/students", async (req, res) => {
    res.send("Get Student Route Called");
    res.end();
});

router.post("/students", async (req, res) => {
    res.send("Post Student Route Called");
    res.end();
});

router.put("/students", async (req, res) => {
    res.send("Put Student Route Called");
    res.end();
});

router.delete("/students", async (req, res) => {
    res.send("Delete Student Route Called");
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
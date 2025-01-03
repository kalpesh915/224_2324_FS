const express = require("express");
const router = express.Router();

router.param("userid", async (req, res, next, id) => {
    console.log("This Function Called at Once");
    next();
});

router.param("fname", async (req, res, next, id) => {
    console.log("This fname Function Called at Once");
    next();
});

router.get("/user/:userid/:fname", async (req, res) => {
    console.log("then this function will be called");
    res.end();
});

module.exports = router;
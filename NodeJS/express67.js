const express = require("express");
const app = express();
const router = express.Router();

router.route("/users")
.get(async (req, res, next) => {
    console.log("User Route Get Method Called");
    res.end();
})
.post(async (req, res, next) => {
    console.log("User Route Post Method Called");
    res.end();
})
.delete(async (req, res, next) => {
    console.log("User Route Delete Method Called");
    res.end();
})
.put(async (req, res, next) => {
    console.log("User Route Put Method Called");
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
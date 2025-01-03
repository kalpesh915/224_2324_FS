const express = require("express");
const app = express();
const router = express.Router();

router.use(async (req, res, next) =>{
    console.log("Middleware Called");
    next();
})

app.use("/user", router);


app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
const express = require("express");
const app = express();

app.enable('trust proxy');
app.use(express.json());
app.get("/:id/:fname", async (req, res) => {
    //console.log(req.hostname);
    //console.log(req.ip);
    //console.log(req.ips);
    //console.log(req.method);
    //console.log(req.originalUrl);
    //console.log(req.params["id"]);
    //console.log(req.params);
    //console.log(req.path);
    //console.log(req.protocol);
    //console.log(req.query);
    //console.log(req.route);
    //console.log(req.secure);
    
    res.send();
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
});
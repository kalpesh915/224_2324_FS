const express = require("express");
const path = require("path");
const app = express();

const port = process.env.PORT || 3000;

app.use(express.json());
app.use("/static", express.static(path.join(__dirname, "staticFiles")));

app.get("/", (req, res) => {
    app.set("content-type", "text/html");
    res.send("<h1>Root Path Executed</h1>");
});


app.listen(port, (err)=>{
    if(!err){
        console.log("Server Execting on "+port+" PORT");
    }else{
        console.log("Error while Running Server Code "+err);
    }
})
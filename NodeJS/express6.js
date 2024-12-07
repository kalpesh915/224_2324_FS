const express = require("express");
const app = express();

const port = process.env.PORT || 3000;

app.use(express.json());

app.get("/", (req, res) => {
    app.set("content-type", "text/html");
    res.send("<h1>Root Path Executed</h1>");
});

app.post("/", (req, res) => {
    //res.send(req.body);
    
    //let {fname} = req.body;
    //res.send(`Welcome ${fname}`);

    let {fname, lname, city} = req.body;
    res.send(`Welcome ${fname} ${lname} to ${city}`);
});

app.listen(port, (err)=>{
    if(!err){
        console.log("Server Execting on "+port+" PORT");
    }else{
        console.log("Error while Running Server Code "+err);
    }
})
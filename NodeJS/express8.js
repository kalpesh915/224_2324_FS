const express = require("express");
const path = require("path");
const app = express();

const port = process.env.PORT || 3000;

app.get("/", (req, res) => {
    res.sendFile(path.join(__dirname, "staticFiles/img1.jpg"));    
});

app.listen(port, (err)=>{
    if(!err){
        console.log("Server Execting on "+port+" PORT");
    }else{
        console.log("Error while Running Server Code "+err);
    }
})
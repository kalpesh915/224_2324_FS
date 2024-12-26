const express = require("express");
const app = express();

app.use(express.query());

app.delete("/student", (req, res) => {
    res.send("Student Delete Request executed ");
});

app.delete("/teacher", (req, res) => {
    res.send("Teacher Delete Request executed ");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }
    
})
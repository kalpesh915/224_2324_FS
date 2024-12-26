const express = require("express");
const app = express(); // Main
const student = express(); // Sub

app.get("/", async (req, res) =>{
    console.log(student.mountpath);
    res.send("Student Home Page");
    //console.log(teacher.mountpath);
});

student.get("/", async (req, res) => {
    console.log("Student / page loaded");
});

app.use("/student", student);
//app.use("/teacher", teacher);

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
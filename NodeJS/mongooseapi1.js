require("./mongooseConnection");
const studentModel = require("./studentConfig");
const express = require("express");

const app = express();
app.use(express.json());

app.post("/", async (request, response) => {
    //response.send("API Called");
    //response.send(request.body);
    let studentData = new studentModel(request.body);
    let result = await studentData.save();
    
    response.send(result);
    
});

app.listen(3000, (err) =>{
    if(err){
        console.log("Error is "+err);
    }
});
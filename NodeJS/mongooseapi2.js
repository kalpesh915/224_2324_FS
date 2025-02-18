require("./mongooseConnection");
const studentModel = require("./studentConfig");
const express = require("express");
const app = express();

app.use(express.json());

// GET for fetch data
app.get("/", async (request, response) =>{
    const studentdata = await studentModel.find();
    response.send({
        "status" : 200,
        "message" : studentdata.length + " Records Found ",
        "studentdata" : studentdata
    }, 200);
});

// POST for create new data
app.post("/", async (request, response) => {
    let studentdata = new studentModel(request.body);
    let result = await studentdata.save();

    if(result._id !== null){
        response.send({
            "status" : 201,
            "message" : "New Student created in database",
            "result" : result
        }, 201);
    }else{
        response.send({
            "status" : 500,
            "message" : "Error while creating new Student",
            "studentdata" : studentdata
        }, 500);
    }
    
});

// PUT for Update Data
app.put("/update/:_id", async (request, response) => {
    //console.log(request.params._id);

    let result = await studentModel.updateOne(
        {_id : request.params._id},
        {$set : request.body});

    if(result.modifiedCount >= 1){
        response.send({
            "status" : 204,
            "message" : "Data Updated",
            "result" : result
        });
    }else{
        response.send({
            "status" : 404,
            "message" : "No Data Updated with "+request.params._id,
            "result" : result
        });
    }
    
});

// Search Data
app.get("/:_id", async (request, response) => {
    result = await studentModel.findById(request.params._id);
    if(result != null){
        response.send({
            "status" : 200,
            "message" : "Data Found with ID "+request.params._id,
            "studentdata" : result
        });
    }else{
        response.send({
            "status" : 404,
            "message" : "No Data Found with ID "+request.params._id
        });
    }
    
});

// DELETE for Delete data
app.delete("/delete/:_id", async (request, response) => {
    const result = await studentModel.deleteOne(request.params);
    if(result.deletedCount >= 1){
        response.send({
            "status" : 200,
            "message" : "Data Deleted with ID "+request.params._id,
            "result" : result
        });
    }else{
        response.send({
            "status" : 404,
            "message" : "No Data Found with ID "+request.params._id
        });
    }
});

app.listen(3000, (err) => {
    if(err){
        console.log("Error in Server");
    }else{
        console.log("Server is Running");
    }
});
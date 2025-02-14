/*
    PUT : used to updated data
*/

const express = require("express");
const app = express();
const getConnection = require("./dbconnection");

app.use(express.json());

// GET
app.get("", async (request, response) => {
    let data = await getConnection();
    let result = await data.find().toArray();
    response.send(result);
});

//Search
app.get("/:fname", async (request, response) => {
    let data = await getConnection();
    let result = await data.find({"fname": request.params.fname}).toArray();
    
    if(result.length> 0){
        response.send({
            "code" : 200,
            "message" : "Students Found",
            "data" : result
        });
    }else{
        response.send({
            "code" : 500,
            "message" : "No Students Found with Name "+request.params.fname
        });
    }
});

// POST
app.post("", async(request, response) => {
    let data = await getConnection();
    let result = await data.insertOne(request.body);
    if(result.insertedId){
        response.send({
            "code" : 200,
            "message" : "New Student Created",
            "data" : result
        });
    }else{
        response.send({
            "code" : 500,
            "message" : "Internal Server Error"
        });
    }
    response.end();
});

// PUT
app.put("", async(request, response) => {
    const data = await getConnection();
    const result = await data.updateMany({
        "fname" : "Rajiv"
    },{
        $set: {
            "fname" : "RAJIV",
            "lname" : "SHEKH"
        }
    });

    if(result.acknowledged && result.modifiedCount >= 1){
        response.send({
            "code" : 200,
            "Message" : result.modifiedCount+" Records Updated in Database"
        });
    }else{
        response.send({
            "code" : 500,
            "Message" : "No Records Updated in Database"
        });
    }
});

// DELETE
app.delete("/:fname", async(request, response) => {
    const data = await getConnection();
    const result = await data.deleteMany({"fname": request.params.fname});
    if(result.acknowledged && result.deletedCount >= 1){
        response.send({
            "code" : 200,
            "message" : result.deletedCount+" Student Deleted"
        });
    }else{
        response.send({
            "code" : 500,
            "message" : "No Student Deleted"
        });
    }
})


app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
})
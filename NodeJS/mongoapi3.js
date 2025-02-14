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

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
})
/*
    GET API used to retrive data from database
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

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
})
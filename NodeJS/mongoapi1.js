/*
    GET API used to retrive data from database
*/

const express = require("express");
const app = express();
const getConnection = require("./dbconnection");

app.get("", async (request, response) => {
    //console.log("GET Method Called");
    //response.send("OK");
    let data = await getConnection();
    let result = await data.find().toArray();
    response.send(result);
});

app.listen(3000, (err) => {
    if (!err) {
        console.log("Server Running on port 3000");
    } else {
        console.log("Server Error " + err);
    }
})
let mysql = require("mysql");

let connection = mysql.createConnection({
    "host": "localhost",
    "user": "root",
    "password": ""
});

connection.connect((err) => {
    if (err) {
        console.log("Error while Connecting with Database Server ", err);
    } else {
        connection.query("create database node729", (err, result) => {
            if (err) {
                console.log("Error while executing query ", err);
            } else {
                console.log("result is ", result);
            }
        });
    }
});


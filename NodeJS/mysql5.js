let mysql = require("mysql");

let connection = mysql.createConnection({
    "host": "localhost",
    "user": "root",
    "password": "",
    "database": "node729"
});

connection.connect((err) => {
    if (err) {
        console.log("Error while Connecting with Database Server ", err);
    } else {
        connection.query("alter table students add column phone varchar(12) not null after email", (err, result) => {
            if (err) {
                console.log("Error while executing query ", err);
            } else {
                console.log("result is ", result);
            }
        });
    }
});


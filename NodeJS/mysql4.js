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
        connection.query("create table students (id int auto_increment primary key, fname varchar(20) not null, lname varchar(20) not null, city varchar(20) not null, email varchar(64) not null, gender varchar(6) not null, dob date not null, create_at timestamp default current_timestamp, updated_at timestamp default current_timestamp on update current_timestamp)", (err, result) => {
            if (err) {
                console.log("Error while executing query ", err);
            } else {
                console.log("result is ", result);
            }
        });
    }
});


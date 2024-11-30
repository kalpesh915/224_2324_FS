let mysql = require("mysql");

let connection = mysql.createConnection({
    "host": "localhost",
    "user": "root",
    "password": "",
    "database": "node729"
});

connection.connect((err)=>{
    if(err){
        console.log("Error while connecting Database Server");
        throw err;
    }else{
        let query = "select students.id, students.fname, students.lname, attendance.absents, attendance.presents from students inner join attendance on students.id = attendance.student_id ";
        connection.query(query, (err, result, fields)=>{
            if(err){
                console.log("Error while Executing Query");
                throw err;
            }else{
                console.log("Result is ",result);
            }
        });
    }
});
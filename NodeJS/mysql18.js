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
        //let query = "select * from students";
        //let query = "select id, fname, lname from students";
        //let query = "select id, fname, lname from students limit 5";
        //let query = "select id, fname, lname from students limit 5 offset 5";
        let query = "select id, fname, lname from students limit 10, 5";
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
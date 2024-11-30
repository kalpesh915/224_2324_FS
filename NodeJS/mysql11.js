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
        //let query = "select id, fname, lname, city from students where id = 5";
        //let query = "select id, fname, lname, city from students where id >= 5";
        //let query = "select id, fname, lname from students where fname = 'yash'";
        //let query = "select id, fname, lname from students where not fname = 'yash'";
        let query = "select id, fname, lname from students where fname like '%ya%'";
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
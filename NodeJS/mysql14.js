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
        let fname = 'yash';
        let city = 'Rajkot';
        let query = "select * from students where fname = ? and city = ?";
        connection.query(query, [fname, city] ,(err, result, fields)=>{
            if(err){
                console.log("Error while Executing Query");
                throw err;
            }else{
                console.log("Result is ",result);
            }
        });
    }
});
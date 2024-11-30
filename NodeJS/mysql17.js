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
        //let query = "update students set city = 'Baroda'";
        // let query = "update students set city = 'Surat' where id > 10";
        let query = "update students set city = 'Surat', gender = 'MALE' where id > 10";
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
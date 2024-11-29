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
        connection.query("insert into students (fname, lname, city, email, phone, gender, dob) values ('rajiv', 'shekh', 'rajkot', 'rajiv@gmail.com', '9988998899', 'male', '2004-04-04')", (err, result)=>{
            if(err){
                console.log("Error while Executing Query");
                throw err;
            }else{
                console.log("Result is ",result);
            }
        });
    }
});
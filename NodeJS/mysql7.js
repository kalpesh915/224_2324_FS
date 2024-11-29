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
        let query = "insert into students (fname, lname, city, email, phone, gender, dob) values ?";
        let values = [
            ["yash", "singal", "rajkot", "yash@gmail.com", "9900009900", "Male", "2005-04-04"],
            ["Rajiv", "shekh", "rajkot", "rajiv@gmail.com", "9900009900", "Male", "2004-04-04"],
            ["Viraj", "bhatti", "rajkot", "viraj@gmail.com", "9900009900", "Male", "2006-04-04"]
        ];
        connection.query(query, [values], (err, result)=>{
            if(err){
                console.log("Error while Executing Query");
                throw err;
            }else{
                console.log("Result is ",result);
            }
        });
    }
});
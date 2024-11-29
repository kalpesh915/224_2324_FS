let mysql = require("mysql");

let connection = mysql.createConnection({
    "host": "localhost",
    "user": "root",
    "password": ""
});

connection.connect((err)=>{
    if(err){
        throw err;
    }else{
        console.log("Connected with MySql Database Server");
    }
})
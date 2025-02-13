const getConnection = require("./dbconnection");

const insert = async () => {
    const db = await getConnection();

    const result = await db.insertOne({
        "fname": "Rajiv",
        "lname": "Shaikh",
        "city" : "Rajkot",
        "phone" : "9900990099",
        "email" : "rajiv@gmail.com",
        "gender": "male"
    });

    /*if(result.acknowledged){
        console.log("New Student Created in Database");
    }else{
        console.log("Error while Creating new student in Database");
    }*/

    console.log("New Student Created with "+result.insertedId+" ID ");
}

insert();
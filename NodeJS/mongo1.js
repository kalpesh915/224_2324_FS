let { MongoClient } = require("mongodb");
const url = "mongodb://localhost:27017";
const database = "nodeproject";

const client = new MongoClient(url);

async function getData() {
    let conn = await client.connect();
    let mydb = conn.db(database);
    let collection = mydb.collection("students");
    let response = await collection.find({}).toArray();
    console.log(response);
    conn.close();
}

getData();

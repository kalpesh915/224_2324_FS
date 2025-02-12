const {MongoClient} = require("mongodb");
const URL = "mongodb://localhost:27017";
const database = "nodeproject";

const client = new MongoClient(URL);

async function getConnection() {
    let result = await client.connect();
    let db = result.db(database);
    return db.collection("students");
}

module.exports = getConnection;
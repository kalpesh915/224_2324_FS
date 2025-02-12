const {MongoClient} = require("mongodb");
const URL = "mongodb://localhost:27017";
const database = "nodeproject";

const client = new MongoClient(URL);

async function getConnection() {
    let result = await client.connect();
    let db = result.db(database);
    return db.collection("students");
}

const main = async ()=>{
    let data = await getConnection();
    let result = await data.find({}).toArray();
    console.log(result);
}

main();
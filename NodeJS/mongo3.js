const {MongoClient} = require("mongodb");
const url = "mongodb://localhost:27017";
const database = "nodeproject";

const client = new MongoClient(url);

async function getConnection() {
    let result = await client.connect();
    let db = result.db(database);
    return db.collection("students");
}

getConnection().then((resolve)=>{
    resolve.find({}).toArray().then((result) => {
        console.log(result);
    })
}, (reject)=>{
    console.log("Error is "+reject);
});

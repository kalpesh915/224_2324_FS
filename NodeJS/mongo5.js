const getConnection = require("./dbconnection");

let main = async () => {
    let data = await getConnection();
    let result = await data.find({}).toArray();
    console.log(result);   
}

main();
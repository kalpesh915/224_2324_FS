const getConnection = require("./dbconnection");

const deleteData = async () => {
    const db = await getConnection();

    const result = await db.deleteMany({"fname" : "RAJIV"});

    if(result.acknowledged){
        console.log(`Total ${result.deletedCount} Students Deleted from Database`);
    }else{
        console.log(`No Data Deleted from Database`);
    }
}

deleteData();
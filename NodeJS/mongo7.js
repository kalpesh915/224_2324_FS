const getConnection = require("./dbconnection");

const update = async () => {
    const db = await getConnection();

    const result = await db.updateOne({"fname" : "Rajiv"},
        {
            $set : {
                "fname" : "RAJIV",
                "state" : "Gujarat",
                "languages" : ["C", "CPP", "HTML", "CSS", "JS", "PHP", "Node", "ReactJS"]
            }
        }
    );


    console.log(result);
}

update();
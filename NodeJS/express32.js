const express = require("express");
const app = express();

app.disable("trust proxy");
//app.enable("trust proxy");
//app.set("trust proxy", false);
//app.set("trust proxy", true);

app.get("/", async (req, res) =>{
    console.log(app.get('trust proxy'));
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }
    
})
const express = require("express");
const app = express();

app.disable("trust proxy");

app.get("/", async (req, res) =>{
    //console.log(app.get('trust proxy'));
    console.log(app.enabled("trust proxy"));
    app.enable("trust proxy");
    console.log(app.enabled("trust proxy"));
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }
    
})
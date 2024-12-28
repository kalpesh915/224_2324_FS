const express = require("express");
const app = express();
// body parser
app.use(express.json());
app.use(express.urlencoded({extended: true}));

app.post("/",async (req, res) => {
    const formData = req.body;
    console.log(`Welcome ${formData.fname} ${formData.lname} to ${formData.city}`);
    res.send("Completed");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
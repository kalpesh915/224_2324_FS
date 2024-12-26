const express = require("express");
const app = express(); // Main
const admin = express(); // Sub

app.get("/", async (req, res) =>{

});

admin.on('mount', (parent) => {
    console.log('Admin App Mounted');
});

admin.get('/', function (req, res) {
    res.send('Admin Homepage');
});

app.use('/admin', admin);

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
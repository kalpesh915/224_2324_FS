const express = require("express");
const app = express(); // Main
const admin = express(); // Sub
const user = express(); // Sub

app.get("/", async (req, res) =>{

});

admin.on('mount', (parent) => {
    console.log('Admin App Mounted');
});

user.on('mount', (parent) => {
    console.log('User App Mounted');
});

admin.get('/', function (req, res) {
    res.send('Admin Homepage');
});

user.get('/', function (req, res) {
    res.send('User Homepage');
});

app.use('/admin', admin);
app.use('/user', user);

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})
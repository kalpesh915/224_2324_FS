const mongoose = require("mongoose");

const studentSchema = new mongoose.Schema({
    "fname" : String,
    "lname" : String,   
    "city" : String,
    "phone" : String,
    "email" : String,
    "gender" : String,
    "age" : Number
});

module.exports = studentModel = mongoose.model("students", studentSchema);
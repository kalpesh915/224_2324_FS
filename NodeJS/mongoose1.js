const mongoose = require("mongoose");

const main = async () => {
    await mongoose.connect("mongodb://localhost:27017/nodeproject");

    const studentSchema = new mongoose.Schema({
        "fname" : String,
        "lname" : String,
        "city" : String,
        "age" : Number,
        "gender" : String,
        "email" : String,
        "phone" : String
    });

    const studentModel = new mongoose.model("student", studentSchema);

    let data = new studentModel({
        "fname" : "Yash",
        "lname" : "Singal",
        "email" : "yash@gmail.com",
        "phone" : "99889909998"
    });

    let result = await data.save();
    console.log(result);
};

main()
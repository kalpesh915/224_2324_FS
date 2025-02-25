// app/models/user.model.js

import mongoose from "mongoose";

const userSchema = new mongoose.Schema({
    username: {
        type: String,
        required: true,
        unique: true,
        trim: true
    }, 
    email :{
        type: String,
        required: true,
        unique: true,
        trim: true,
        lowercase: true
    },
    password:{
        type: String,
        required: true,
        minlength:6
    }, 
    roles:[
        {
            type: mongoose.Schema.Types.ObjectId,
            ref: 'Role'
        }
    ]
},
{ timestamps: true });

const User = mongoose.model('User', userSchema);
export default User;
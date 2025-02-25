// app/middlewares/verifySignUp.js

import db from '../models/index.js';

const ROLES = db.ROLES;
const User = db.User;

const checkDuplicateUsernameOrEmail = async (req, res, next) => {
    try {
        const userByUserName = await User.findOne({ username: req.body.username });
        if (userByUserName) {
            return res.status(400).json({ message: 'Failed! Username is already in use!' });
        }

        const userByEmail = await User.findOne({ email: req.body.email });
        if (userByEmail) {
            return res.status(400).json({ message: 'Failed! Email is already in use!' });
        }

        next();
    } catch (err) {
        return res.status(500).json({message: err.message });
    }
};

const checkRoleExisted = async (req, res, next) => {
    if(req.body.roles){
        const invalidRoles = req.body.roles.filter((role) => !ROLES.includes(role));

        if(invalidRoles.length > 0){
            return res.status(400).json({
                message: `Failed! Roles [${invalidRoles.join(', ')}] do not exist!`
            });
        }
    }

    next();
};

const verifySignUp = {
    checkDuplicateUsernameOrEmail,
    checkRoleExisted
};

export default verifySignUp;
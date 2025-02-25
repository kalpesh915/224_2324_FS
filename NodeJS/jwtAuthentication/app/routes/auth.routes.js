// app/routes/auth.routes.js

import express from 'express';
import {signin, signup} from '../controllers/auth.controller.js';
import {verifySignUp} from '../middlewares/index.js';

const route = express.Router();

route.post('/signup', [
    verifySignUp.checkDuplicateUsernameOrEmail, 
    verifySignUp.checkRoleExisted
], signup);

route.post('/signin', signin);

export default route;
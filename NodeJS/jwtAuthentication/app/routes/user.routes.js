// app/routes/user.routes.js

import express from 'express';
import { adminBoard, allAccess, moderatorBoard, userBoard } from '../controllers/user.controller.js';
import {authJwt} from '../middlewares/index.js';

const router = express.Router();

// public route
router.get("/all", allAccess);

// user route
router.get("/user", [authJwt.verifyToken], userBoard);

// moderator route
router.get("/mod", [authJwt.verifyToken, authJwt.isModerator], moderatorBoard);

// Admin route
router.get("/admin", [authJwt.verifyToken, authJwt.isAdmin], adminBoard);

export default router;
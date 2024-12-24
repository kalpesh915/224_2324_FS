const express = require("express");
const app = express();
const TrusteeRouter = require("./TrusteeRoute");

const port = process.env.port || 3000;

/*
    express.Router() middleware
*/ 

const StudentRoutes = express.Router();

StudentRoutes.get("/student", (req, res) =>{
    console.log("Student Route Called");
});

const TeacherRoutes = express.Router();

TeacherRoutes.get("/teacher", (req, res) =>{
    console.log("Teacher Route Called");
});


app.use(StudentRoutes);
app.use(TeacherRoutes);
app.use(TrusteeRouter);

app.get("/", async (req, res) => {
    console.log("/ Route Working");
    res.end();
});

app.listen(port, ()=>{
    console.log("Express Server Execute on "+port+" Port");
});
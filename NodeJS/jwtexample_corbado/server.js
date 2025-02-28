// server.js
import express from "express";
import cors from "cors";
import db from "./app/models/index.js";
import authRoutes from "./app/routes/auth.routes.js";
import userRoutes from "./app/routes/user.routes.js";

const app = express();

// Middleware configuration
const corsOptions = {
  origin: "http://localhost:8081"
};

app.use(cors(corsOptions));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Simple route for testing
app.get("/", (req, res) => {
  res.json({ message: "Welcome to the Node.js JWT Authentication application." });
});

// Routes
app.use("/api/auth", authRoutes);
app.use("/api/test", userRoutes);

// Set port and start server
const PORT = process.env.PORT || 8080;

// Connect to MongoDB and start the server
db.mongoose
  .connect(`mongodb://${db.config.HOST}:${db.config.PORT}/${db.config.DB}`)
  .then(() => {
    console.log("Successfully connected to MongoDB.");
    // Initialize roles in the database
    initial();
    app.listen(PORT, () => {
      console.log(`Server is running on port ${PORT}.`);
    });
  })
  .catch((err) => {
    console.error("Connection error:", err);
    process.exit();
  });

// Initial function to populate roles
function initial() {
  db.Role.estimatedDocumentCount()
    .then((count) => {
      if (count === 0) {
        return Promise.all([
          new db.Role({ name: "user" }).save(),
          new db.Role({ name: "admin" }).save(),
          new db.Role({ name: "moderator" }).save()
        ]);
      }
    })
    .then((roles) => {
      if (roles) {
        console.log("Added 'user', 'admin', and 'moderator' to roles collection.");
      }
    })
    .catch((err) => {
      console.error("Error initializing roles:", err);
    });
}
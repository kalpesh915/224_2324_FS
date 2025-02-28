// app/models/role.model.js
import mongoose from 'mongoose';
 
const roleSchema = new mongoose.Schema({
  name: {
    type: String,
    required: true,
    unique: true,
  },
});
 
const Role = mongoose.model('Role', roleSchema);
export default Role;
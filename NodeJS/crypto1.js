const crypto = require("crypto");
const secret = 'surat';

const hash = crypto.createHmac('sha256', secret)
//.update("123@iant")
.update("welcome to world of javascript")
.digest('hex');
console.log(hash);

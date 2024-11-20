let http = require("http");

http.createServer((request, response)=>{
    response.write("Welcome to world of Node");
    response.end();
}).listen(8080);
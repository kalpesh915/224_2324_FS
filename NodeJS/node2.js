let http = require("http");

http.createServer((request, response) => {
    response.write("Welcome to world of Node JS");
    response.write("<p>Welcome to world of Node JS</p>");
    response.end();
}).listen(8080);

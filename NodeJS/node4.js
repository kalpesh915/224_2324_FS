let http = require("http");

http.createServer((request, response) => {
    response.writeHead(200, {'Content-Type': 'text/html'});  
    response.write("Welcome to world of Node JS");
    response.write("<p>Welcome to world of Node JS</p>");
    response.end();
}).listen(8080);

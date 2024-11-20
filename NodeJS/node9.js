let http = require("http");

function handleReqRes(request, response){
    response.writeHead(200, {'Content-Type': 'text/html'});  
    response.write("Welcome to world of Node with External Function");
    response.write("<p>Welcome to world of Node with External Function line 1</p>");
    response.write("<p>Press Ctrl + C for Exit</p>");
    response.end();
}

http.createServer(handleReqRes).listen(8080);
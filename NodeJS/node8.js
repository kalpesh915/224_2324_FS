let http = require("http");

function handleReqRes(request, response){
    response.write("Welcome to world of Node with External Function");
    response.end();
}

http.createServer(handleReqRes).listen(8080);
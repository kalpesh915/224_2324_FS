const net = require("net");

let server = net.createServer((socket) => {
    socket.end("Terminated");
}).on('error', (err) => {
    console.log("Error is " + err);
});

server.listen(() => {
    address = server.address();
    console.log('opened server on %j', address);
});  
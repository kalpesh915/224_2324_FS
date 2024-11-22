const net = require("net");

const client = net.connect({ port: 53195 }, () => {
    console.log("Connected to Server");
    client.write("Hello Server");
});

client.on('data', (data) => {
    console.log(data.toString());
    client.end();
});

client.on('end', () => {
    console.log('disconnected from server');
}); 
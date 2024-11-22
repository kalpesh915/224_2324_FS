const dns = require('dns');
dns.resolve4('www.javatpoint.com', (err, addresses) => {
    if (err) throw err;
    console.log(`addresses: ${JSON.stringify(addresses)}`);
    addresses.forEach((a) => {
        dns.reverse(a, (err, hostnames) => {
            if (err) {
                throw err;
            }
            console.log(`reverse for ${a}: ${JSON.stringify(hostnames)}`);
        });
    });
});   
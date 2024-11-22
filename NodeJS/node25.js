const dns = require("dns");

dns.resolve4("www.javatpoint.com", (err, address)=>{
    if(err){
        console.log("Error is "+err);
    }else{
        console.log("Address",address);
        
        address.forEach((add)=>{
            //console.log(add);
            dns.reverse(add, (err, hostname)=>{
                console.log("HostName is ", JSON.stringify(hostname));
            })
        })
    }
})

const dns = require("dns");

dns.lookup("www.google.com", (err, address, family)=>{
    if(err){
        console.log("Error is "+err);
    }else{
        console.log("Address",address);
        console.log("Family",family);
    }
})

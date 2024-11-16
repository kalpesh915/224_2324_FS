/*
    JavaScript Async
    "async and await make promises easier to write"
    async makes a function return a Promise
    await makes a function wait for a Promise
*/

function printer(value){
    console.log(value);
}

async function msg(){
    let myPromise = new Promise((resolve, reject) =>{
        setTimeout(()=>{
            resolve(Date());
        }, 5000);
    });

    // console.log(myPromise);
    console.log(await myPromise);
}

msg();
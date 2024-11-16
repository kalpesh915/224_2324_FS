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
    return Date();
}

msg().then((data)=>{
    printer("Success : "+data);
});
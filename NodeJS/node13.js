let count = 0;

let animation = setInterval(()=>{
    console.log("Today is "+Date());
    count++;

    if(count == 5){
        clearInterval(animation);
    }
}, 1000);
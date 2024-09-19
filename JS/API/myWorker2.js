function myCounter(){
    postMessage(Date());
    setTimeout("myCounter()", 1000);
}

myCounter();
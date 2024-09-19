let i = 0;

function myCounter(){
    i++;
    postMessage(i);
    setTimeout("myCounter()", 1000);
}

myCounter();
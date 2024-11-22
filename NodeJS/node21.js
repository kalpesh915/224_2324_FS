function div(i, j){
    if(j == 0){
        throw "Division is Not Possible";
    }else{
        console.log("Div is "+ (i / j));
    }
}

try{
    div(111, 2);
    div(111, 0);
    div(111, 12);
    div(111, 23);
}catch(err){
    console.log(err);
}
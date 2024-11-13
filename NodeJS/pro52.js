/*
    continue keyword
*/ 

for(i=1; i<=10; i++){
    if(i == 5){
        continue;
    }
    process.stdout.write(` ${i}`)
}
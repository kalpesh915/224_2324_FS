/*
    continue keyword
*/ 

for(i=1; i<=100; i++){
    if(i %2 == 0){
        continue;
    }
    process.stdout.write(` ${i}`)
}
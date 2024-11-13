/*
    nested loop
*/
let count = 1;
for(i=1; i<=5; i++){
    for(j=1; j<=i; j++){
        process.stdout.write(` ${count++}`);
    }
    console.log();
}

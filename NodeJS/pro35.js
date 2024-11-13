/*
    nested loop
*/

for(i=1; i<=5; i++){
    for(j=1; j<=i; j++){
        process.stdout.write("*");
        //console.log("*");
    }
    console.log();
}

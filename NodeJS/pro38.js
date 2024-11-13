/*
    nested loop
*/

for(i=1; i<=5; i++){
    for(s=4; s>=i; s--){
        process.stdout.write(" ");
    }
    for(j=1; j<=i; j++){
        process.stdout.write(`${j}`);
        //console.log("*");
    }
    console.log();
}

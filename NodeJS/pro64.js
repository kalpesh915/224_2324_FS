/*
    User Defined Function
*/

function printPattern(n){
    for(i=1; i<=n; i++){
        for(j=1; j<=i; j++){
            process.stdout.write("*");
        }
        console.log();
    }
}

printPattern(10);
/*
    User Defined Function
*/

function printPattern(n){
    // n = parameter
    for(i=1; i<=n; i++){
        for(j=1; j<=i; j++){
            process.stdout.write("*");
        }
        console.log();
    }
}

printPattern(10); // 10 = arguments
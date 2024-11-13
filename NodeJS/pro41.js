/*
    nested while loop
*/


/*for(i=1; i<=5; i++){
    for(j=1; j<=i; j++){
        process.stdout.write("*");
    }
    console.log();
}*/

let i = 1;

while(i<=5){
    let j = 1;

    while(j<=i){
        process.stdout.write("*");
        j++;
    }
    console.log();
    i++;
}
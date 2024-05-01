/**
    draw following pattern with for loop

        1
       123
      12345
     1234567
    123456789
*/

#include<stdio.h>

void main(){
    int i, j;

    for(i=1; i<=5; i++){
        for(j=4; j>=i; j--){
            printf(" ");
        }

        for(j=1; j<i*2; j++){
            printf("%d",j);
        }
        printf("\n");
    }
}

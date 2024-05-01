/**
    draw following pattern with for loop

    A
   BAB
  BCABC
 DCBABCD
EDCBABCDE
*/

#include<stdio.h>

void main(){
    int i, j;

    for(i=65; i<=69; i++){
        for(j=68; j>=i; j--){
            printf(" ");
        }

        for(j=i; j>=65; j--){
            printf("%c", j);
        }

        for(j=66; j<=i; j++){
            printf("%c", j);
        }
        printf("\n");
    }
}

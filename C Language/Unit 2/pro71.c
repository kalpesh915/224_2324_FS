/**
    draw following pattern with for loop

    A
   ABA
  ABCBA
 ABCDCBA
ABCDEDCBA
*/

#include<stdio.h>

void main(){
    int i, j;

    for(i=65; i<=69; i++){
        for(j=68; j>=i; j--){
            printf(" ");
        }

        for(j=65; j<=i; j++){
            printf("%c", j);
        }

        for(j=i-1; j>=65; j--){
            printf("%c", j);
        }
        printf("\n");
    }
}

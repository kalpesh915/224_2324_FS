/**
    draw following pattern with for loop

    1
   121
  12323
 1234321
123454321
*/

#include<stdio.h>

void main(){
    int i, j;

    for(i=1; i<=5; i++){
        for(j=4; j>=i; j--){
            printf("-");
        }

        for(j=1; j<=i; j++){
            printf("%d", j);
        }

        for(j=i-1; j>=1; j--){
            printf("%d", j);
        }
        printf("\n");
    }
}

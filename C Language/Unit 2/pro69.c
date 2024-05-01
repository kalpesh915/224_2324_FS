/**
    draw following pattern with for loop

    1
   212
  32123
 4321234
543212345
*/

#include<stdio.h>

void main(){
    int i, j;

    for(i=1; i<=5; i++){
        for(j=4; j>=i; j--){
            printf("-");
        }

        for(j=i; j>=1; j--){
            printf("%d", j);
        }

        for(j=2; j<=i; j++){
            printf("%d", j);
        }
        printf("\n");
    }
}

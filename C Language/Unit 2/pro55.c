/**
    print following pattern with use of nested loop

   12345
   12345
   12345
   12345
   12345
*/

#include<stdio.h>

void main(){
    int i, j;

    /// row
    for(i=1; i<=5; i++){
        for(j=1; j<=5; j++){
            printf("%d",j);
        }
        printf("\n");
    }
}

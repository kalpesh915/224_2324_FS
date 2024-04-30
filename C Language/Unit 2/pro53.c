/**
    print following pattern with use of nested loop

    *****
    *****
    *****
    *****
    *****
*/

#include<stdio.h>

void main(){
    int i, j;

    /// row
    for(i=1; i<=5; i++){
        for(j=1; j<=5; j++){
            printf("*");
        }
        printf("\n");
    }
}

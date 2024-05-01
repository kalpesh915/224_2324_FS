/**
    draw following pattern with for loop (with ASCII)

    A
    BC
    DEF
    GHIJ
    KLMNO
*/

#include<stdio.h>

void main(){
    int i, j;
    char c = 'A';
    for(i=1; i<=5; i++){
        for(j=1; j<=i; j++){
            printf("%c ", c++);
        }
        printf("\n");
    }
}

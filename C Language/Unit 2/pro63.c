/**
    draw following pattern with for loop (with ASCII)

    A
    AB
    ABC
    ABCD
    ABCDE
*/

#include<stdio.h>

void main(){
    int i, j;

    for(i=65; i<=69; i++){
        for(j=65; j<=i; j++){
            printf("%c",j);
        }
        printf("\n");
    }
}

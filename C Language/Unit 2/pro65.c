/**
    draw following pattern with for loop (with char)

    A
    BB
    CCC
    DDDD
    EEEEE
*/

#include<stdio.h>

void main(){
    char i, j;

    for(i='A'; i<='E'; i++){
        for(j='A'; j<=i; j++){
            printf("%c",i);
        }
        printf("\n");
    }
}

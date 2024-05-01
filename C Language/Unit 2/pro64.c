/**
    draw following pattern with for loop (with char)

    A
    AB
    ABC
    ABCD
    ABCDE
*/

#include<stdio.h>

void main(){
    char i, j;

    for(i='A'; i<='E'; i++){
        for(j='A'; j<=i; j++){
            printf("%c",j);
        }
        printf("\n");
    }
}

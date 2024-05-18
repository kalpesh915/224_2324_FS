/**
    Character pointer
*/

#include<stdio.h>

void main(){
    char *ip = "Welcome to world of C Pointers";

    while(*ip != '\0'){
        printf("\n %s", ip);
        ip++;
    }
}

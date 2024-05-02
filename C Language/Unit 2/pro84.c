/**
    go to keyword
*/

#include<stdio.h>

void main(){
    int i = 1;

    loop: /// label

    printf(" %d", i);
    i++;
    if(i <= 10){
        goto loop;
    }
}

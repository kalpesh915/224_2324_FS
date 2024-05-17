/**
    example without static keyword
*/

#include<stdio.h>
void msg();

void main(){
    int i;

    for(i=1; i<=10; i++){
        msg();
    }
}

void msg(){
    int tmp = 1;
    printf(" %d", tmp);
    tmp++;
}

/**
    do while loop

    do{
        executable code
    }while(condition);
*/

#include<stdio.h>

void main(){
    int i;

    i = 1;

    do{
        printf(" %d", i);
        i++;
    }while(i <= 10);
}

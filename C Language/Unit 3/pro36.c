/**
    for loop sleep
*/

#include<stdio.h>
#include<dos.h>

void main(){
    int i;

    for(i=1; i<=10; i++){
        printf(" %d", i);
        delay(1000);
    }
}

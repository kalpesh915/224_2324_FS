/**
    print 10 to 1 with do while loop
*/

#include<stdio.h>

void main(){
    int ip = 1;

    do{
        printf(" %d", ip);
        ip+=2;
    }while(ip <= 100);
}

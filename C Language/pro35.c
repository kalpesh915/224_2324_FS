/**
    Global Scope of Variables
*/

#include<stdio.h>

int ip = 100;

void main(){
    printf("\n value of ip is %d", ip);

    {
        printf("\n value of ip is %d", ip);
    }

    {
        printf("\n value of ip is %d", ip);
    }

    printf("\n value of ip is %d", ip);
}

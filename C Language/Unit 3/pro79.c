/**
    global variables
*/

#include<stdio.h>

int ip1 = 100;

void main(){

    printf("\n value of ip1 is %d", ip1);

    {
        printf("\n value of ip1 is %d", ip1);
    }

    {
        printf("\n value of ip1 is %d", ip1);
    }

    printf("\n value of ip1 is %d", ip1);
}

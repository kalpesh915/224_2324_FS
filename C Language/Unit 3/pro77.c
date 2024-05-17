/**
    local variables
*/

#include<stdio.h>

void msg();

void main(){
    int ip1 = 10;

    printf("\n value of ip1 is %d", ip1);

    {
        int ip1 = 20;
        printf("\n value of ip1 is %d", ip1);
    }

    {
        int ip1 = 30;
        printf("\n value of ip1 is %d", ip1);
    }

    printf("\n value of ip1 is %d", ip1);
}

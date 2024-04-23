/**
    BODMAS
*/

#include<stdio.h>

void main(){
    int ip1 = 15 * 10 / 2 - 20 + 100;

    /**
        ip1 = 15 * 10 / 2 - 20 + 100;
        ip1 = 15 * 5 - 20 + 100;
        ip1 = 75 - 20 + 100;
        ip1 = 55 + 100;
        ip1 = 155;
    */

    printf("\n value of ip1 is %d", ip1);
}

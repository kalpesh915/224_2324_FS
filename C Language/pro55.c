/**
    BODMAS
*/

#include<stdio.h>

void main(){
    int ip1 = 15 + 5 / 4 - 20 + 100;

    /**
        ip1 = 15 + 5 / 4 - 20 + 100;
        ip1 = 15 + 1.25 - 20 + 100;
        ip1 = 16.25 - 20 + 100;
        ip1 = -3.75 + 100;
        ip1 = 96.25;
        ip1 = 96;
    */

    printf("\n value of ip1 is %d", ip1);
}

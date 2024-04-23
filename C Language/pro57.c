/**
    BODMAS
*/

#include<stdio.h>

void main(){
    int ip1 = 15 * 10 / 2 - (20 + 100);

    /**
        ip1 = 15 * 10 / 2 - (20 + 100);
        ip1 = 15 * 10 / 2 - 120;
        ip1 = 15 * 5 - 120;
        ip1 = 75 - 120;
        ip1 = -45

    */

    printf("\n value of ip1 is %d", ip1);
}

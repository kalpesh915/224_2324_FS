/**
    size of array
*/

#include<stdio.h>

void main(){
    int ip1[10], i;

    ip1[0] = 152;
    ip1[1] = 332;
    ip1[2] = 142;
    ip1[3] = 752;
    ip1[4] = 552;
    ip1[5] = 158;
    ip1[6] = 162;
    ip1[7] = 452;
    ip1[8] = 132;
    ip1[9] = 252;

    for(i=0; i<10; i++){
        printf("\n ip1[%d] is %d", i, ip1[i]);
    }
}

/**
    Two Dimensional Array
*/

#include<stdio.h>


void main(){
    int ip[3][3] = {{11, 22, 33}, {44, 55, 66}, {77, 88, 99}};

    printf("\n Size of Array is %d Bytes ",sizeof(ip));

    printf("\n ip[0][0] = is %d", ip[0][0]);
    printf("\n ip[0][2] = is %d", ip[0][2]);
    printf("\n ip[2][1] = is %d", ip[2][1]);
    printf("\n ip[1][1] = is %d", ip[1][1]);
}

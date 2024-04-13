#include<stdio.h>

/**
    descriptive variable names
    make sum of two numbers
*/

void main(){
    int ip1, ip2, sum;

    ip1 = 10;
    ip2 = 20;
    sum = ip1 + ip2;

    printf("\n Sum is %d", sum);
    printf("\n Sum of %d and %d is %d", ip1, ip2, sum);
    printf("\n Sum of %d and %d is %d", ip1, ip2, ip1 + ip2);
}

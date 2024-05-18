/**
    double pointers
*/

#include<stdio.h>

void main(){
    int ip1, ip2, *ptr, **pptr;

    ip1 = 10;
    ip2 = 20;

    ptr = &ip1;
    pptr = &ptr;

    printf("\n Value of **pptr is %d", **pptr);

    ptr = &ip2;

    printf("\n Value of **pptr is %d", **pptr);
}

/**
    pointers
*/

#include<stdio.h>

void main(){
    int ip1 = 10, *ptr;

    printf("\n Value of ip1 is %d", ip1);
    printf("\n Address of ip1 is %d", &ip1);

    /// assign address of ip1 to ptr

    ptr = &ip1;
    printf("\n Value of ptr is %d", ptr);
    printf("\n Address of ptr is %d", &ptr);

    printf("\n *ptr is %d", *ptr);

    *ptr = 100;
    printf("\n Value of ip1 is %d", ip1);
}

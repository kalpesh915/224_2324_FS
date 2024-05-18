/**
    pointers with array
*/

#include<stdio.h>

void main(){
    int ip[] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111}, *ptr;

    ptr = &ip;
    printf("\n Address is %d and value is %d", ptr, *ptr);

    ptr++;
    printf("\n Address is %d and value is %d", ptr, *ptr);

    ptr++;
    printf("\n Address is %d and value is %d", ptr, *ptr);

    ptr++;
    printf("\n Address is %d and value is %d", ptr, *ptr);

    ptr++;
    printf("\n Address is %d and value is %d", ptr, *ptr);
}

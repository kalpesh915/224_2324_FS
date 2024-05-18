/**
    pointers with array
*/

#include<stdio.h>

void main(){
    int ip[] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111}, *ptr, i;

    ptr = &ip;
    for(i=0; i<10; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }
}

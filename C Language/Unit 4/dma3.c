#include<stdio.h>
#include<stdlib.h>
/**
    calloc(number of blocks, size)
*/

void main(){
    int size, *ptr, i;

    printf("\n Enter number of required blocks \t");
    scanf("%d", &size);

    ptr = (int*) calloc(size, sizeof(int));

    for(i=0; i<size; i++){
        printf("\n Value is %d and Address is %d", *ptr, ptr);
        ptr++;
    }

    free(ptr);
}

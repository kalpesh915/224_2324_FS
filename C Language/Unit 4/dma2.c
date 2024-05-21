#include<stdio.h>
#include<stdlib.h>
/**
    malloc(number of bytes);
*/

void main(){
    int size, *ptr, blocks, i;

    printf("\n Enter number of Bytes to occupy memory \t");
    scanf("%d", &size);

    ptr = (int*) malloc(size);

    blocks = size / sizeof(int);

    printf("\n Total Number blocks are %d", blocks);

    for(i=0; i<blocks; i++){
        printf("\n Value is %d and Address is %d", *ptr, ptr);
        ptr++;
    }

    printf("\n Enter Size for of Memory \t");
    scanf("%d", &size);

    realloc(ptr, size);

    blocks = size / sizeof(int);

    printf("\n Total Number blocks are %d", blocks);

    for(i=0; i<blocks; i++){
        printf("\n Value is %d and Address is %d", *ptr, ptr);
        ptr++;
    }

    free(ptr);
}

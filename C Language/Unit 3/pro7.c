/**
    scan array from user and print values
*/

#include<stdio.h>

void main(){
    int ip1[10], i;

    /// scan values from user
    for(i=0; i<10; i++){
        printf("\n Enter value for ip1[%d] \t", i);
        scanf("%d", &ip1[i]);
    }

    /// print values
    for(i=0; i<10; i++){
        printf("\n ip1[%d] is %d", i, ip1[i]);
    }
}

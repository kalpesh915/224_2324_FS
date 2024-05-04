/**
    scan array from user and print max of it
*/

#include<stdio.h>

void main(){
    int ip1[10], i, max = 0;

    /// scan values from user
    for(i=0; i<10; i++){
        printf("\n Enter value for ip1[%d] \t", i);
        scanf("%d", &ip1[i]);
    }

    /// print values
    for(i=0; i<10; i++){
        if(max < ip1[i]){
            max = ip1[i];
        }
    }

    printf("\n Max of Array is %d", max);
}

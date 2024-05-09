/**
    Sum of Two Dimensional Array
*/

#include<stdio.h>
#define size 3

void main(){
    int ip[size][size], i, j, sum = 0;

    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    printf("\n Values From Array is \n");
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf(" ip[%d][%d] : %d", i, j, ip[i][j]);

            sum += ip[i][j];
        }
        printf("\n");
    }

    printf("\n Sum of Array is %d", sum);
}

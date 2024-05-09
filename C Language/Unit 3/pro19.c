/**
    Max of Two Dimensional Array
*/

#include<stdio.h>
#define size 3

void main(){
    int ip[size][size], i, j, max = 0;

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

            if(max < ip[i][j]){
                max = ip[i][j];
            }
        }
        printf("\n");
    }

    printf("\n Max of Array is %d", max);
}

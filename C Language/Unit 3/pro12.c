/**
    sort array with Selection sorting
*/

#include<stdio.h>

#define size 10

void main(){
    int ip[size], i, j, small, tmp;

    /// get values in array from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// code for sorting
    for(i=0; i<size; i++){
        small = i;
        for(j=i+1; j<size; j++){
            if(ip[j] < ip[small]){
                small = j;
            }
        }
        tmp = ip[small];
        ip[small] = ip[i];
        ip[i] = tmp;
    }


    /// code for sorted values
    printf("\n Sorted values is \n");
    for(i=0; i<size; i++){
        printf(" %d", ip[i]);
    }
}

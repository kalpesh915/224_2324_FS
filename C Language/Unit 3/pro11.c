/**
    sort array with bubble sorting
*/

#include<stdio.h>

#define size 3

void main(){
    int ip[size], i, j, tmp;

    /// get values in array from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// code for sorting
    for(i=0; i<size; i++){
        for(j=0; j<size-i; j++){
            if(ip[j] > ip[j+1]){
                tmp = ip[j];
                ip[j] = ip[j+1];
                ip[j+1] = tmp;
            }
        }
    }

    /// code for sorted values
    printf("\n Sorted values is \n");
    for(i=0; i<size; i++){
        printf(" %d", ip[i]);
    }
}

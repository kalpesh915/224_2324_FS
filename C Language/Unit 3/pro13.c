/**
    example of binary search
*/

#include<stdio.h>

#define size 10

void main(){
    int ip[size], i, high = size, low = 0, mid, search, flag = 0;

    /// get values in array
    printf("\n Enter Values in sorted form ");
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// get value for search in array
    printf("\n Enter value for search in array \t");
    scanf("%d", &search);

    /// binary searching process
    while(low <= high){
        mid = low + ((high - low) / 2);

        if(ip[mid] == search){
            flag = 1;
            break;
        }

        if(ip[mid] < search){
            low = mid + 1;
        }else if(ip[mid] > search){
            high = mid - 1;
        }
    }

    if(flag == 0){
        printf("\n value not found in array");
    }else{
        printf("\n value found in array");
    }
}

/**
    check entered number is odd or even
*/

#include<stdio.h>

void main(){
    int ip1;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);

    if(ip1 %2 == 0){
        printf("\n Even");
    }else{
        printf("\n Odd");
    }
}

/**
    check entered number is positive or negative
*/

#include<stdio.h>

void main(){
    int ip1;

    printf("\n Enter any value \t");
    scanf("%d", &ip1);

    if(ip1 > 0){
        printf("\n Positive Number");
    }else{
        printf("\n Negative Number");
    }
}

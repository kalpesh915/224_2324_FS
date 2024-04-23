/**
    check entered number is positive or negative
    leader if
*/

#include<stdio.h>

void main(){
    int ip1;

    printf("\n Enter any value \t");
    scanf("%d", &ip1);

    if(ip1 > 0){
        printf("\n Positive Number");
    }else if(ip1 < 0){
        printf("\n Negative Number");
    }else{
        printf("\n Neutral Value");
    }
}

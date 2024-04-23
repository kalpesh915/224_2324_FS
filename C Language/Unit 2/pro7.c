/**
    check entered number between 0 to 100
*/

#include<stdio.h>

void main(){
    int ip1;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);

    if(ip1 >= 0 && ip1 <= 100 ){
        printf("\n Between Range");
    }else{
        printf("\n Out of Range");
    }
}

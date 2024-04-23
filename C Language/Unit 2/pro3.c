/**
    if - else condition

    if(condition){
        code run when condition is true
    }else{
        code run when condition is false
    }

    check both values are same or not
*/

#include<stdio.h>

void main(){
    int ip1, ip2;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    if(ip1 == ip2){
        printf("\n Both are same");
    }else{
        printf("\n Both are not same");
    }
}

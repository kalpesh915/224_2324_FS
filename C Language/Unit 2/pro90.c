/**
    check entered number in palindrome or not
    12321
    >> <<
*/

#include<stdio.h>

void main(){
    int ip, rev = 0, tmp;

    printf("\ Enter any number \t");
    scanf("%d", &ip);

    tmp = ip;
    while(ip > 0){
        rev = rev * 10;
        rev += ip % 10;
        ip = ip / 10;
    }

    if(rev == tmp){
        printf("\n Number is Palindrome");
    }else{
        printf("\n try Another Number");
    }
}

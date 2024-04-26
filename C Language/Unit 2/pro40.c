/**
    Make sum of Digits in Entered Number
    ex. 4568 = 23
*/


#include<stdio.h>

void main(){
    int ip, ans = 0;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans += ip % 10;
        ip = ip / 10;
    }

    printf("\n Answer is %d", ans);
}

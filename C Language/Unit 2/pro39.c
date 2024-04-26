/**
    Count How many Digits in Entered Number
    ex. 4568 = 4
*/


#include<stdio.h>

void main(){
    int ip, ans = 0;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans++;
        ip = ip / 10;
    }

    printf("\n Answer is %d", ans);
}

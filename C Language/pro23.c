/// print square of entered number

#include<stdio.h>

void main(){
    int ip, ans;

    printf("\n Enter any Number \t");
    scanf("%d", &ip);

    ans = ip * ip;

    printf("\n Square of %d is %d", ip, ans);
}

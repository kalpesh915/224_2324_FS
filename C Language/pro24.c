/// print cube of entered number

#include<stdio.h>

void main(){
    int ip, ans;

    printf("\n Enter any Number \t");
    scanf("%d", &ip);

    ans = ip * ip * ip;

    printf("\n Cube of %d is %d", ip, ans);
}

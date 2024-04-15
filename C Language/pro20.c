/// take two numbers from user and print division of it

#include<stdio.h>

void main(){
    float ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%f", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%f", &ip2);

    ans = ip1 / ip2;

    printf("\n Division is %f", ans);
}

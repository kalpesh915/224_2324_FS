/// take two numbers from user and print division of it

#include<stdio.h>

void main(){
    int ip1, ip2;
    float ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = (float)ip1 / ip2;

    printf("\n Division is %f", ans);
}

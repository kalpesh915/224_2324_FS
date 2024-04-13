#include<stdio.h>

/**
    get values from keyboard
*/

void main(){
    int ip1, ip2, ans;
    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = ip1 + ip2;
    printf("\n Sum is %5d", ans);
}

#include<stdio.h>

/**
    scan multiple values
*/

void main(){
    int ip1, ip2, ans;
    printf("\n Enter value for ip1 and ip2 \t");
    scanf("%d%d", &ip1, &ip2);

    ans = ip1 + ip2;
    printf("\n Sum is %5d", ans);
}

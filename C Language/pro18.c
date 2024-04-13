#include<stdio.h>

/**
    Swap two values with use of third variable
*/

void main(){
    int ip1, ip2, tmp;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n Before swap ip1 is %d and ip2 is %d", ip1, ip2);

    tmp = ip1;
    ip1 = ip2;
    ip2 = tmp;

    printf("\n After swap ip1 is %d and ip2 is %d", ip1, ip2);
}

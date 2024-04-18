/**
    open folder and run exe file of this program
*/

#include<stdio.h>
void main(){
    int ip1, ip2, sum;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    sum = ip1 + ip2;

    printf("\n Sum is %d", sum);
    getche();
}


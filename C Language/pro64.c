/**
   ternary / conditional operators
   (condition ? true : false);

   find maximum out of two numbers with ternary operator
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = (ip1 > ip2 ? ip1 : ip2);

    printf("\n Maximum is %d", ans);
}

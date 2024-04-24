/**
    find maximum out of 3 numbers with use of nested if
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ip3, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);
    printf("\n Enter value for ip3 \t");
    scanf("%d", &ip3);

    /**
        ip1     ip2     ip3
        150     521     1570
    */

    if(ip1 > ip2){
        if(ip1 > ip3){
            ans = ip1;
        }else{
            ans = ip3;
        }
    }else{
        if(ip2 > ip3){
            ans = ip2;
        }else{
            ans = ip3;
        }
    }

    printf("\n Maximum is %d", ans);
}

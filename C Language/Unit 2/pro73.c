/**
    print fibonacci series

    0 1 1 2 3 5 8 13 21 34.....
*/

#include<stdio.h>

void main(){
    int i, ip1, ip2, ip3;

    ip1 = 0;
    ip2 = 1;

    printf(" %d %d", ip1, ip2);

    for(i=1; i<=10; i++){
        ip3 = ip1 + ip2;
        printf(" %d", ip3);
        ip1 = ip2;
        ip2 = ip3;
    }
}

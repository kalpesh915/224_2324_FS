/**
    bitwise and operator
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ans;

    ip1 = 13;
    ip2 = 10;

    /**
        ip1     13      1101
        ip2     10      1010
                &       1000
    */
    ans = ip1 & ip2;

    printf("\n Answer is %d", ans);
}


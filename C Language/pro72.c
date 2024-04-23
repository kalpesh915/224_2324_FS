/**
    bitwise left shift operator
*/

#include<stdio.h>

void main(){
    int ip1, ans;

    ip1 = 13;

    ans = ip1 << 3;
    /**
        13      1101 << 3
             1101000
    */

    printf("\n Answer is %d", ans);
}


/**
    bitwise right shift operator
*/

#include<stdio.h>

void main(){
    int ip1, ans;

    ip1 = 510;

    ans = ip1 >> 3;
    /**
        510  111111110
             000111111
    */

    printf("\n Answer is %d", ans);
}


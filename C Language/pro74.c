/**
    bitwise not operator
*/

#include<stdio.h>

void main(){
    int ip1, ans;

    ip1 = 510;

    ans = ~ip1;
    /**
        510  111111110
             000000001
    */

    printf("\n Answer is %d", ans);
}


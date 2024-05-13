/**
    UDF 3 : No Parameters With Return
*/

#include<stdio.h>

float pi();

void main(){
    float ans;

    ans = pi();
    printf("\n value of ans is %f", ans);
}

float pi(){
    return 3.14;
}

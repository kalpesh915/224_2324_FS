/**
    sum of 1 to 10
*/

#include<stdio.h>

void main(){
    int i, ans = 0;

    for(i=1; i<=10; i++){
        ans += i;
    }

    printf("\n Answer is %d", ans);
}

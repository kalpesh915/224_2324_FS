/**
    print factorial number of entered number

    5 = 5 * 4 * 3 * 2 * 1 = 120
*/

#include<stdio.h>

void main(){
    int ip, i, ans = 1;

    printf("\n Enter any Number \t");
    scanf("%d", &ip);

    for(i=ip; i>1; i--){
        ans *= i;
    }

    printf("\n Factorial of %d is %d", ip, ans);
}

/**
    find factorial of entered number with use of
    recursion
*/

#include<stdio.h>

int factorial(int);

void main(){
    int ip, ans;

    printf("\n Enter value for ip \t");
    scanf("%d", &ip);
    ans = factorial(ip);
    printf("\n Factorial of %d is %d", ip, ans);
}

int factorial(int i){
    if(i == 1){
        return i;
    }else{
        return i * factorial(i - 1);
    }
}

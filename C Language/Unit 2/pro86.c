/**
    check entered number is prime or not
    divisible by 1 or it self only
*/

#include<stdio.h>

void main(){
    int ip, i, flag = 0;

    printf("\n Enter any number to check prime \t");
    scanf("%d", &ip);

    /// logic
    for(i=2; i<ip/2; i++){
        if(ip % i == 0){
            flag = 1;
            break;
        }
    }

    if(flag == 0){
        printf("\n %d is Prime Number", ip);
    }else{
        printf("\n %d is not Prime Number", ip);
    }
}

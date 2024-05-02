/**
    find prime numbers from given range
*/

#include<stdio.h>

void main(){
    int rs, re, i, i2,ip, flag = 0;

    printf("\n Enter Start Point of Range \t");
    scanf("%d", &rs);
    printf("\n Enter End Point of Range \t");
    scanf("%d", &re);

    for(i=rs; i<=re; i++){
        ip = i;
        flag = 0;

        for(i2 = 2; i2 < ip/2; i2++){
            if(ip % i2 == 0){
                flag = 1;
                break;
            }
        }

        if(flag == 0){
            printf(" %d", ip);
        }
    }
}

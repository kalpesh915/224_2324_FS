/**
    print table of entered number
*/


#include<stdio.h>

void main(){
    int i, ip;

    i = 1;

    printf("\n Enter any number to print table \t");
    scanf("%d", &ip);

    while(i <= 10){
        /// printf("\n %d * %d = %d", ip, i, ip * i);
        printf("\n %3d * %3d = %3d", ip, i, ip * i);
        i++;
    }
}

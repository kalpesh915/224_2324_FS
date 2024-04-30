/**
    print table of entered number
*/

#include<stdio.h>

void main(){
    int i, ip;

    printf("\n Enter any Number to print Table \t");
    scanf("%d", &ip);

    for(i= 1; i<=10; i++){
        printf(" \n %3d * %3d = %3d", ip, i, ip * i);
    }
}

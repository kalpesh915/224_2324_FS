/**
    make sum of 10 numbers
*/


#include<stdio.h>

void main(){
    int i = 1, sum = 0, tmp;

    while(i <= 10){
        printf("\n Enter any value \t");
        scanf("%d", &tmp);
        sum += tmp;
        i++;
    }

    printf("\n Answer is %d", sum);
}

/**
    make sum of first 10 natural numbers
*/


#include<stdio.h>

void main(){
    int i = 1, sum = 0;

    while(i <= 10){
        sum += i;
        i++;
    }

    printf("\n Answer is %d", sum);
}

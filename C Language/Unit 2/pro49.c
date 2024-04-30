/**
    run loop as per range given by user
*/

#include<stdio.h>

void main(){
    int i, start, stop;

    printf("\n Enter Start of Loop \t");
    scanf("%d", &start);
    printf("\n Enter Stop of Loop \t");
    scanf("%d", &stop);

    for(i= start; i<=stop; i++){
        printf(" %3d", i);
    }
}

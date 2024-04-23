/**
    check entered year is leap year or not
*/

#include<stdio.h>

void main(){
    int year;

    printf("\n Enter any year \t");
    scanf("%d", &year);

    if(year %4 == 0){
        printf("\n leap year");
    }else{
        printf("\n non leap year");
    }
}

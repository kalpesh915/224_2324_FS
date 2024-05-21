#include<stdio.h>

#define year 2024

void main(){
    printf("\n year is %d", year);

    #undef year
    printf("\n year is %d", year);
}

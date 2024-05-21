#include<stdio.h>

#define year 2024

void main(){
    printf("\n year is %d", year);

    #undef year

    #ifndef year

    #define year 2025

    #endif // year
    printf("\n year is %d", year);
}

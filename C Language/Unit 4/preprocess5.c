#include<stdio.h>

#define year 2035

void main(){


    #if year == 2024
        printf("\n Year is 2024");
    #elif year == 2025
        printf("\n Year is 2025");
    #else
        printf("\n year is not 2024 or 2025");
    #endif // year
}

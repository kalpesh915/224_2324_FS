#include<stdio.h>

#define year 2024
void main(){


    #if year == 2024
        #error "Year is 2024"
    #elif year == 2025
        #error "Year is 2025"
    #else
        #error "year is not 2024 or 2025"
    #endif // year
}

#include<stdio.h>

#define year 2024
void main(){


    #if year == 2024
        #warning "Year is 2024"
    #elif year == 2025
        #warning "Year is 2025"
    #else
        #warning "year is not 2024 or 2025"
    #endif // year
}

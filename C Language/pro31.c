/**
    W.A.P. to convert Celsius to Fahrenheit
*/

#include<stdio.h>

void main(){
    float celcius, fahrenheit;

    printf("\n Enter Temprature in celcius \t");
    scanf("%f", &celcius);

    fahrenheit = (celcius * 9 / 5 ) + 32;

    printf("\n Fahrenheit is %f", fahrenheit);
}

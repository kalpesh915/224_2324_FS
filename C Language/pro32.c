/**
    W.A.P. to convert Fahrenheit to Celcius
*/

#include<stdio.h>

void main(){
    float celcius, fahrenheit;

    printf("\n Enter Temprature in Fahrenheit \t");
    scanf("%f", &fahrenheit);

    celcius = (fahrenheit - 32 ) * 5 / 9;

    printf("\n Celcius is %f", celcius);
}

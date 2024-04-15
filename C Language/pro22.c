/// convert kilometers to meters

#include<stdio.h>

void main(){
    int meters;
    float kms;

    printf("\n Enter Kilo meters \t");
    scanf("%f", &kms);

    meters = (kms * 1000);

    printf("\n Meters of %f Kms. is %d", kms, meters);
}

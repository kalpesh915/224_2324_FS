/**
    find compound interest
*/

#include<stdio.h>

void main(){
    float pri, roi, noy, si;
    int i;

    printf("\n Enter Principal Amount \t");
    scanf("%f", &pri);
    printf("\n Enter Rate of Interest \t");
    scanf("%f", &roi);
    printf("\n Enter Number of Years \t");
    scanf("%f", &noy);

    for(i=1; i<=noy; i++){
        si = (pri * roi) / 100;
        pri += si;
    }

    printf("\n Payable Amount is %lf", pri);
}

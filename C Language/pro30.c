/// Find Simple interest

#include<stdio.h>

void main(){
    float pr, roi, noy, si;

    printf("\n Enter Principle Amount \t");
    scanf("%f", &pr);
    printf("\n Enter Rate of Interest \t");
    scanf("%f", &roi);
    printf("\n Enter Number of Years \t");
    scanf("%f", &noy);

    si = (pr * roi * noy) / 100;

    printf("\n Simple Interest is %f", si);
}

/**
    Data Type : double

    Bytes   :   8
    Format  :   %lf
*/

#include<stdio.h>
void main(){
    double ip;
    printf("\n Size of double is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%lf", &ip);

    printf("\n Value of ip is %lf", ip);
    printf("\n Value of ip is %.2lf", ip);
}

/**
    Data Type : long double

    Bytes   :   12
    Format  :   %Lf
*/

#include<stdio.h>
void main(){
    long double ip;
    printf("\n Size of long double is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%Lf", &ip);

    printf("\n Value of ip is %Lf", ip);
    printf("\n Value of ip is %.2Lf", ip);
}

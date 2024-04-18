/**
    Data Type : float

    Bytes   :   4
    Format  :   %f
*/

#include<stdio.h>
void main(){
    float ip;
    printf("\n Size of float is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%f", &ip);

    printf("\n Value of ip is %f", ip);
    printf("\n Value of ip is %.2f", ip);
}

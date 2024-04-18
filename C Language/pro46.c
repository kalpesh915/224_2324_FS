/**
    Data Type : char

    Bytes   :   1
    Format  :   %c
*/

#include<stdio.h>
void main(){

    char ip;
    printf("\n Size of Character is %d bytes ",sizeof(ip));

    printf("\n Enter any Character \t");
    scanf("%c", &ip);

    printf("\n Value of ip is %c ASCII is %d", ip, ip);
}


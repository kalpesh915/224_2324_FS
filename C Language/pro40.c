/**
    Data Type : short unsigned int

    Bytes   :   2
    bits    :   16
    Use     :   16
    sign    :   0bit
    Range   :   2 ^ 16 (0 to 65535)
    Format  :   %u
*/

#include<stdio.h>
void main(){
    short unsigned int ip;
    printf("\n Size of short signed int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%u", &ip);

    printf("\n Value of ip is %u", ip);
}

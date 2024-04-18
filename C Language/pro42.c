/**
    Data Type : long unsigned int

    Bytes   :   4
    bits    :   32
    Use     :   32
    sign    :   0bit
    Range   :   2 ^ 32 (0 to 4294967295)
    Format  :   %lu
*/

#include<stdio.h>
void main(){
    long unsigned int ip;
    printf("\n Size of long unsigned int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%lu", &ip);

    printf("\n Value of ip is %lu", ip);
}

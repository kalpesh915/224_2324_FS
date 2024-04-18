/**
    Data Type : long signed int

    Bytes   :   4
    bits    :   32
    Use     :   31
    sign    :   1bit
    Range   :   2 ^ 31 (-2147483648 to 2147483647)
    Format  :   %ld
*/

#include<stdio.h>
void main(){
    long signed int ip;
    printf("\n Size of long signed int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%ld", &ip);

    printf("\n Value of ip is %ld", ip);
}

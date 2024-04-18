/**
    Data Type : short signed int

    Bytes   :   2
    bits    :   16
    Use     :   15
    sign    :   1bit
    Range   :   2 ^ 15 (-32768 to 32767)
    Format  :   %d
*/

#include<stdio.h>
void main(){
    short signed int ip;
    printf("\n Size of short signed int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%d", &ip);

    printf("\n Value of ip is %d", ip);
}

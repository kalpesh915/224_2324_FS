/**
    UDF 2 : With Parameters No Return
*/

#include<stdio.h>

void sum(int, int); /// declaration

void main(){
    int ip1, ip2;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    sum(ip1, ip2);
}

void sum(int i, int j){ /// definition
    printf("\n Sum is %d", i + j);
}

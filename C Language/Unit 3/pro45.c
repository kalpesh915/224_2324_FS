/**
    String Function
*/

#include<stdio.h>
#include<string.h>

void main(){
    char ip1[20], ip2[20];
    int ans;
    printf("\n Enter any String \t");
    gets(ip1);

    strcpy(ip2, ip1); /// destination, source

    printf("\n New String is %s", ip1);
    printf("\n New String is %s", ip2);
}

/**
    String Function
*/

#include<stdio.h>
#include<string.h>

void main(){
    char ip[20];
    int ans;
    printf("\n Enter any String \t");
    gets(ip);

    strrev(ip);

    printf("\n New String is %s", ip);
}

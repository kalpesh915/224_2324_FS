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

    printf("\n New String is %s", strupr(ip));
    printf("\n New String is %s", strlwr(ip));
}

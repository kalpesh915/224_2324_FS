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

    ans = strlen(ip);

    printf("\n Length of String is %d", ans);
}

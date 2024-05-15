/**
    convert entered string in uppercase
    a-z = 97-122
    A-Z = 65-90

    difference is 32
*/

#include<stdio.h>

void upperCase(char[]);

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any String \t");
    gets(ip);

    upperCase(ip);
}

void upperCase(char ip[100]){
    int count = 0;

    while(ip[count] != '\0'){
        if(ip[count] >= 97 && ip[count] <= 122){
            ip[count] = ip[count] - 32;
        }
        count++;
    }
    printf("\n New String is %s", ip);
}

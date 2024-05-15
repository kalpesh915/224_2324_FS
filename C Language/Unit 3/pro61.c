/**
    convert entered string in lowercase
    a-z = 97-122
    A-Z = 65-90

    difference is 32
*/

#include<stdio.h>

void lowerCase(char[]);

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any String \t");
    gets(ip);

    lowerCase(ip);
}

void lowerCase(char ip[100]){
    int count = 0;

    while(ip[count] != '\0'){
        if(ip[count] >= 65 && ip[count] <= 90){
            ip[count] = ip[count] + 32;
        }
        count++;
    }
    printf("\n New String is %s", ip);
}

/**
    find length of entered string with UDF

    01234567
    welcome\0
    \0 = null character indicate end of string
*/

#include<stdio.h>

int length(char[]);

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any String \t");
    gets(ip);

    ans = length(ip);
    printf("\n Length of String is %d", ans);
}

int length(char ip[100]){
    int count = 0;

    while(ip[count] != '\0'){
        count++;
    }
    return count;
}
